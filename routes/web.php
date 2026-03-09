<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/about', function () {
    return view('about');
})->name('about');

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

// ============ ADMIN ROUTES (Opsional) ============
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    // Hanya user dengan role admin yang bisa akses
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard')->middleware('can:admin');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('users')->middleware('can:admin');
});