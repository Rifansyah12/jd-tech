<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\TeamMember;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Publik
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

// Route::get('/about', function () {
//     $members = TeamMember::where('is_active', true)->get();
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

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
    return view('dashboard');
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