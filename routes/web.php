<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\TeamMember;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Message;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Helper: scan public/demos dan kembalikan Collection of stdClass portfolio
function getDemoPortfolios(): \Illuminate\Support\Collection {
    $meta = [
        // Mobile Apps
        'bankease'     => ['title' => 'BankEase',     'category' => 'Mobile App',      'icon' => 'fas fa-mobile-alt',     'tags' => ['Mobile', 'Banking', 'Fintech']],
        'edugame'      => ['title' => 'EduGame',      'category' => 'Mobile App',      'icon' => 'fas fa-gamepad',        'tags' => ['Mobile', 'Game', 'Education']],
        'shopease'     => ['title' => 'ShopEase',     'category' => 'Mobile App',      'icon' => 'fas fa-shopping-bag',   'tags' => ['Mobile', 'Shopping', 'E-Commerce']],
        'socialflow'   => ['title' => 'SocialFlow',   'category' => 'Mobile App',      'icon' => 'fas fa-share-alt',      'tags' => ['Mobile', 'Social Media']],
        'stayeasy'     => ['title' => 'StayEasy',     'category' => 'Mobile App',      'icon' => 'fas fa-hotel',          'tags' => ['Mobile', 'Hotel', 'Booking']],
        'logitrack'    => ['title' => 'LogiTrack',    'category' => 'Mobile App',      'icon' => 'fas fa-truck',          'tags' => ['Mobile', 'Tracking', 'Logistics']],
        // Web Development
        'edulearn'     => ['title' => 'EduLearn',     'category' => 'Web Development', 'icon' => 'fas fa-graduation-cap', 'tags' => ['Web', 'E-Learning', 'Platform']],
        'findash'      => ['title' => 'FinDash',      'category' => 'Web Development', 'icon' => 'fas fa-chart-line',     'tags' => ['Web', 'Dashboard', 'Analytics']],
        'hr-pro'       => ['title' => 'HR Pro',       'category' => 'Web Development', 'icon' => 'fas fa-users',          'tags' => ['Web', 'HR', 'Management']],
        'medicare-pro' => ['title' => 'Medicare Pro', 'category' => 'Web Development', 'icon' => 'fas fa-heartbeat',      'tags' => ['Web', 'Medical', 'Dashboard']],
        // Bot Telegram
        'helpdesk-bot' => ['title' => 'Helpdesk Bot', 'category' => 'Bot Telegram',    'icon' => 'fab fa-telegram',       'tags' => ['Telegram', 'Bot', 'Support']],
        'orderbot'     => ['title' => 'OrderBot',     'category' => 'Bot Telegram',    'icon' => 'fab fa-telegram',       'tags' => ['Telegram', 'Bot', 'Order']],
    ];

    $items = [];
    foreach ($meta as $slug => $m) {
        $file = $slug . '.html';
        if (!file_exists(public_path('demos/' . $file))) continue;
        $items[] = (object) [
            'id'           => 'demo_' . $slug,
            'title'        => $m['title'],
            'category'     => $m['category'],
            'icon'         => $m['icon'],
            'tags'         => $m['tags'],
            'description'  => null,
            'thumbnail'    => null,
            'demo_url'     => '/demos/' . $file,
            'demo_file'    => $file,
            'github_url'   => null,
            'status'       => 'completed',
            'team_members' => null,
        ];
    }
    return collect($items);
}

// Halaman Publik
Route::get('/', function () {
    $featuredServices = Service::where('is_active', true)->latest()->take(6)->get();

    $dbPortfolios  = Portfolio::latest()->take(6)->get();
    $linkedFiles   = $dbPortfolios->pluck('demo_file')->filter()->values()->toArray();
    $demoPortfolios = getDemoPortfolios()->filter(fn($d) => !in_array($d->demo_file, $linkedFiles));
    $featuredPortfolios = $dbPortfolios->concat($demoPortfolios)->take(6);

    return view('home', compact('featuredServices', 'featuredPortfolios'));
})->name('home');

Route::get('/services', function () {
    $services = Service::where('is_active', true)->latest()->get();
    return view('services', compact('services'));
})->name('services');

Route::get('/portfolio', function () {
    $dbPortfolios   = Portfolio::latest()->get();
    $linkedFiles    = $dbPortfolios->pluck('demo_file')->filter()->values()->toArray();
    $demoPortfolios = getDemoPortfolios()->filter(fn($d) => !in_array($d->demo_file, $linkedFiles));
    $portfolios     = $dbPortfolios->concat($demoPortfolios);
    return view('portfolio', compact('portfolios'));
})->name('portfolio');

// Route::get('/about', function () {
//     $members = TeamMember::where('is_active', true)->get();
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function () {
    $data = request()->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string',
    ]);

    Message::create($data);

    // Kirim notifikasi ke Discord
    $webhookUrl = env('DISCORD_WEBHOOK_URL');
    if ($webhookUrl) {
        try {
            \Illuminate\Support\Facades\Http::post($webhookUrl, [
                'embeds' => [[
                    'title'       => '📩 Pesan Baru dari Website!',
                    'color'       => 0x00f2fe,
                    'fields'      => [
                        ['name' => '👤 Nama',    'value' => $data['name'],               'inline' => true],
                        ['name' => '📧 Email',   'value' => $data['email'],              'inline' => true],
                        ['name' => '📝 Subjek',  'value' => $data['subject'] ?? '-',     'inline' => false],
                        ['name' => '💬 Pesan',   'value' => $data['message'],            'inline' => false],
                    ],
                    'footer'      => ['text' => 'JD Technology — jannahdigitalteknologi.site'],
                    'timestamp'   => now()->toIso8601String(),
                ]],
            ]);
        } catch (\Exception $e) {
            // Gagal kirim Discord tidak mengganggu penyimpanan pesan
        }
    }

    return back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
})->name('contact.store');

// Sitemap XML
Route::get('/sitemap.xml', function () {
    $portfolios = Portfolio::latest()->get();
    $services = Service::where('is_active', true)->latest()->get();

    $urls = [
        ['loc' => url('/'),           'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => url('/about'),      'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => url('/services'),   'priority' => '0.9', 'changefreq' => 'weekly'],
        ['loc' => url('/portfolio'),  'priority' => '0.8', 'changefreq' => 'weekly'],
        ['loc' => url('/contact'),    'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => url('/faq'),        'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => url('/career'),     'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => url('/privacy'),    'priority' => '0.3', 'changefreq' => 'yearly'],
        ['loc' => url('/terms'),      'priority' => '0.3', 'changefreq' => 'yearly'],
    ];

    return response()->view('sitemap', compact('urls'))->header('Content-Type', 'application/xml');
})->name('sitemap');

// Halaman Footer
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/career', function () {
    return view('career');
})->name('career');

// ============ AUTHENTICATION ROUTES ============
// Route untuk login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    // Validasi input
    $credentials = request()->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Attempt login
    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    // Jika login gagal
    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->onlyInput('email');
});

// Route untuk register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function () {
    // Validasi input
    $data = request()->validate([
        'name' => 'required|min:3|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed'
    ]);

    // Create user
    $user = \App\Models\User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => bcrypt($data['password'])
    ]);

    // Login user
    Auth::login($user);

    return redirect('/dashboard');
});

// Route untuk logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Route untuk dashboard (hanya untuk user yang sudah login)
Route::get('/dashboard', function () {
    $totalMessages = Message::count();
    $totalPortfolios = Portfolio::count();
    $totalServices = Service::count();
    return view('dashboard', compact('totalMessages', 'totalPortfolios', 'totalServices'));
})->name('dashboard')->middleware('auth');

// Route untuk profile (hanya untuk user yang sudah login)
Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');

// ============ ADMIN ROUTES ============
Route::get('/admin/login', [App\Http\Controllers\AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [App\Http\Controllers\AdminAuthController::class, 'login'])
    ->name('admin.login.post');

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth:filament')
    ->group(function () {

    // Redirect /admin ke dashboard
    Route::get('/', fn() => redirect()->route('admin.dashboard'));

    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
        ->name('dashboard');

    // Portfolio
    Route::resource('portfolio', App\Http\Controllers\Admin\PortfolioController::class);

    // Services
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);

    // Team
    Route::resource('team', App\Http\Controllers\Admin\TeamController::class);

    // Messages
    Route::get('/messages', [App\Http\Controllers\Admin\MessageController::class, 'index'])
        ->name('messages.index');
    Route::get('/messages/{message}', [App\Http\Controllers\Admin\MessageController::class, 'show'])
        ->name('messages.show');
    Route::delete('/messages/{message}', [App\Http\Controllers\Admin\MessageController::class, 'destroy'])
        ->name('messages.destroy');

    // Settings
    Route::get('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index'])
        ->name('settings.index');
    Route::post('/settings/profile', [App\Http\Controllers\Admin\SettingsController::class, 'updateProfile'])
        ->name('settings.profile');
    Route::post('/settings/password', [App\Http\Controllers\Admin\SettingsController::class, 'updatePassword'])
        ->name('settings.password');
});

Route::post('/admin/logout', function () {

    Auth::guard('filament')->logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('admin.login');

})->name('admin.logout');