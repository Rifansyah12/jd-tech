@extends('layouts.app')

@section('title', 'Admin Login - JD Technology')

@section('content')
<div style="min-height: calc(100vh - 72px); display: flex; align-items: center; justify-content: center; padding: 40px 5%; position: relative; overflow: hidden; background: #0A0A0A;">

    <!-- Background glow blobs -->
    <div style="position: absolute; width: 500px; height: 500px; background: radial-gradient(circle, rgba(99,102,241,0.12) 0%, transparent 70%); border-radius: 50%; top: -150px; right: -100px; pointer-events: none;"></div>
    <div style="position: absolute; width: 350px; height: 350px; background: radial-gradient(circle, rgba(139,92,246,0.08) 0%, transparent 70%); border-radius: 50%; bottom: -100px; left: -80px; pointer-events: none;"></div>

    <!-- Login Container -->
    <div class="login-container" style="display: grid; grid-template-columns: 1fr 1fr; max-width: 1100px; width: 100%; background: rgba(255,255,255,0.02); border: 1px solid rgba(99,102,241,0.2); border-radius: 32px; overflow: hidden; backdrop-filter: blur(10px); box-shadow: 0 0 60px rgba(99,102,241,0.12);">

        <!-- Left Side — Branding -->
        <div class="login-left" style="background: linear-gradient(135deg, rgba(99,102,241,0.12), rgba(139,92,246,0.08)); padding: 60px 40px; display: flex; flex-direction: column; justify-content: center; position: relative; overflow: hidden; border-right: 1px solid rgba(99,102,241,0.15);">

            <!-- Floating shapes -->
            <div style="position: absolute; top: 18%; right: 8%; width: 90px; height: 90px; background: rgba(99,102,241,0.1); border-radius: 24px; transform: rotate(45deg); animation: float 6s ease-in-out infinite;"></div>
            <div style="position: absolute; bottom: 18%; left: 8%; width: 70px; height: 70px; background: rgba(139,92,246,0.1); border-radius: 24px; transform: rotate(20deg); animation: float 5s ease-in-out infinite; animation-delay: 1s;"></div>

            <div style="position: relative; z-index: 1;">
                <!-- Logo -->
                <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 36px;">
                    <img src="{{ asset('images/logo/jdt.ico') }}" alt="JD Technology" style="width: 52px; height: 52px; object-fit: contain; filter: brightness(0) invert(1);">
                    <span style="font-size: 26px; font-weight: 700; color: #fff; letter-spacing: -0.5px;">JD Technology</span>
                </div>

                <h1 style="font-size: 2.6rem; font-weight: 700; line-height: 1.15; margin-bottom: 16px; color: #fff; letter-spacing: -1.5px;">
                    Admin <span style="background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Portal</span>
                </h1>

                <p style="color: rgba(255,255,255,0.55); font-size: 1rem; line-height: 1.75; margin-bottom: 36px;">
                    Akses panel administrasi untuk mengelola sistem, memantau aktivitas pengguna, dan mengatur konfigurasi platform.
                </p>

                <!-- Feature list -->
                <div style="display: flex; flex-direction: column; gap: 14px;">
                    @foreach([
                        ['fas fa-shield-alt', 'Manajemen pengguna dan hak akses'],
                        ['fas fa-chart-line', 'Laporan dan analitik real-time'],
                        ['fas fa-cog',        'Konfigurasi sistem dan pengaturan'],
                        ['fas fa-database',   'Backup dan keamanan data'],
                    ] as $f)
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 32px; height: 32px; background: rgba(99,102,241,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #8B8CF8; flex-shrink: 0;">
                            <i class="{{ $f[0] }}" style="font-size: 13px;"></i>
                        </div>
                        <span style="color: rgba(255,255,255,0.7); font-size: 0.9rem;">{{ $f[1] }}</span>
                    </div>
                    @endforeach
                </div>

                <!-- Info card -->
                <div style="margin-top: 40px; padding: 18px 20px; background: rgba(99,102,241,0.08); border: 1px solid rgba(99,102,241,0.2); border-radius: 14px;">
                    <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                        <i class="fas fa-lock" style="color: #8B8CF8; font-size: 15px;"></i>
                        <span style="color: #8B8CF8; font-weight: 600; font-size: 0.9rem;">Akses Terbatas</span>
                    </div>
                    <p style="color: rgba(255,255,255,0.5); font-size: 0.875rem; line-height: 1.65;">
                        Halaman ini khusus untuk administrator sistem. Pastikan Anda memiliki otorisasi yang sesuai sebelum melanjutkan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Side — Login Form -->
        <div class="login-right" style="padding: 60px 50px; background: rgba(8,8,8,0.7); backdrop-filter: blur(16px);">

            <!-- Header -->
            <div class="login-header" style="text-align: center; margin-bottom: 40px;">
                <div class="icon-container" style="width: 76px; height: 76px; margin: 0 auto 20px; background: linear-gradient(135deg, #6366F1, #8B5CF6); border-radius: 22px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 32px rgba(99,102,241,0.35);">
                    <i class="fas fa-user-shield" style="font-size: 32px; color: #fff;"></i>
                </div>
                <h2 style="color: #fff; font-size: 2rem; font-weight: 700; margin-bottom: 8px; letter-spacing: -0.8px;">Admin Login</h2>
                <p style="color: rgba(255,255,255,0.45); font-size: 0.9rem;">Masukkan kredensial administrator Anda</p>
            </div>

            <!-- Session errors -->
            @if(session('error'))
            <div style="margin-bottom: 20px; padding: 14px 16px; background: rgba(239,68,68,0.1); border: 1px solid rgba(239,68,68,0.3); border-radius: 10px; color: #FCA5A5; font-size: 0.875rem; display: flex; align-items: center; gap: 8px;">
                <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
            </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('admin.login.post') }}" class="login-form">
                @csrf

                <!-- Username / Email -->
                <div class="form-group" style="margin-bottom: 20px;">
                    <label style="color: rgba(255,255,255,0.7); display: block; margin-bottom: 8px; font-weight: 500; font-size: 0.875rem; letter-spacing: 0.3px;">
                        <i class="fas fa-user-shield" style="color: #6366F1; margin-right: 6px;"></i> Username / Email
                    </label>
                    <div style="position: relative;">
                        <input type="text" name="username" value="{{ old('username') }}" required
                               style="width: 100%; padding: 14px 20px 14px 48px; background: rgba(255,255,255,0.05); border: 1px solid rgba(99,102,241,0.25); border-radius: 12px; color: #fff; font-size: 0.95rem; outline: none; transition: all 0.25s ease;"
                               placeholder="Masukkan username atau email"
                               onfocus="this.style.borderColor='#6366F1'; this.style.boxShadow='0 0 0 3px rgba(99,102,241,0.15)'; this.style.background='rgba(99,102,241,0.08)'"
                               onblur="this.style.borderColor='rgba(99,102,241,0.25)'; this.style.boxShadow='none'; this.style.background='rgba(255,255,255,0.05)'">
                        <i class="fas fa-user" style="position: absolute; left: 18px; top: 50%; transform: translateY(-50%); color: #6366F1; opacity: 0.7; font-size: 14px;"></i>
                    </div>
                    @error('username')
                    <p style="color: #FCA5A5; font-size: 0.8rem; margin-top: 6px; display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-exclamation-circle"></i> {{ $message }}
                    </p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group" style="margin-bottom: 18px;">
                    <label style="color: rgba(255,255,255,0.7); display: block; margin-bottom: 8px; font-weight: 500; font-size: 0.875rem; letter-spacing: 0.3px;">
                        <i class="fas fa-key" style="color: #6366F1; margin-right: 6px;"></i> Password
                    </label>
                    <div style="position: relative;">
                        <input type="password" name="password" id="password" required
                               style="width: 100%; padding: 14px 48px 14px 48px; background: rgba(255,255,255,0.05); border: 1px solid rgba(99,102,241,0.25); border-radius: 12px; color: #fff; font-size: 0.95rem; outline: none; transition: all 0.25s ease;"
                               placeholder="Masukkan password admin"
                               onfocus="this.style.borderColor='#6366F1'; this.style.boxShadow='0 0 0 3px rgba(99,102,241,0.15)'; this.style.background='rgba(99,102,241,0.08)'"
                               onblur="this.style.borderColor='rgba(99,102,241,0.25)'; this.style.boxShadow='none'; this.style.background='rgba(255,255,255,0.05)'">
                        <i class="fas fa-key" style="position: absolute; left: 18px; top: 50%; transform: translateY(-50%); color: #6366F1; opacity: 0.7; font-size: 14px;"></i>
                        <i class="fas fa-eye" id="togglePassword" style="position: absolute; right: 18px; top: 50%; transform: translateY(-50%); color: rgba(255,255,255,0.35); cursor: pointer; font-size: 14px;" onclick="togglePasswordVisibility()"></i>
                    </div>
                    @error('password')
                    <p style="color: #FCA5A5; font-size: 0.8rem; margin-top: 6px; display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-exclamation-circle"></i> {{ $message }}
                    </p>
                    @enderror
                </div>

                <!-- Security note -->
                <div class="security-note" style="background: rgba(99,102,241,0.06); border: 1px solid rgba(99,102,241,0.18); border-radius: 10px; padding: 13px 16px; margin-bottom: 22px; display: flex; align-items: flex-start; gap: 10px;">
                    <i class="fas fa-shield-alt" style="color: #8B8CF8; font-size: 15px; margin-top: 2px; flex-shrink: 0;"></i>
                    <p style="color: rgba(255,255,255,0.5); font-size: 0.85rem; line-height: 1.6;">
                        Two-factor authentication (2FA) akan diperlukan setelah login untuk keamanan tambahan.
                    </p>
                </div>

                <!-- Remember & Support -->
                <div class="remember-forgot" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 28px;">
                    <label style="color: rgba(255,255,255,0.5); display: flex; align-items: center; gap: 8px; cursor: pointer; font-size: 0.875rem;">
                        <input type="checkbox" name="remember" style="width: 16px; height: 16px; accent-color: #6366F1;">
                        Remember this device
                    </label>
                    <a href="#" style="color: #8B8CF8; text-decoration: none; font-size: 0.875rem; transition: color 0.2s;"
                       onmouseover="this.style.color='#fff'"
                       onmouseout="this.style.color='#8B8CF8'">
                        <i class="fas fa-headset"></i> Contact Support
                    </a>
                </div>

                <!-- Submit -->
                <button type="submit" class="login-submit-btn" style="width: 100%; padding: 15px; font-size: 1rem; font-weight: 600; font-family: 'Space Grotesk', sans-serif; border: none; border-radius: 12px; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 10px; background: linear-gradient(135deg, #6366F1, #8B5CF6); color: #fff; transition: all 0.25s ease; margin-bottom: 24px; box-shadow: 0 4px 20px rgba(99,102,241,0.35);">
                    <i class="fas fa-sign-in-alt"></i> Access Admin Panel
                </button>

                <!-- Security badge -->
                <div class="security-badge" style="display: flex; justify-content: center; align-items: center; gap: 12px; padding-top: 18px; border-top: 1px solid rgba(255,255,255,0.06);">
                    <i class="fas fa-lock" style="color: rgba(255,255,255,0.2); font-size: 13px;"></i>
                    <span style="color: rgba(255,255,255,0.25); font-size: 0.8rem;">SSL Secured Connection</span>
                    <i class="fas fa-shield-alt" style="color: rgba(255,255,255,0.2); font-size: 13px;"></i>
                </div>

                <!-- Back link -->
                <div class="back-link" style="text-align: center; margin-top: 18px;">
                    <a href="{{ route('home') }}" style="color: rgba(255,255,255,0.3); text-decoration: none; font-size: 0.875rem; transition: color 0.2s;"
                       onmouseover="this.style.color='rgba(255,255,255,0.7)'"
                       onmouseout="this.style.color='rgba(255,255,255,0.3)'">
                        <i class="fas fa-arrow-left"></i> Kembali ke halaman utama
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@push('styles')
<style>
    @keyframes float {
        0%, 100% { transform: rotate(45deg) translateY(0); }
        50%       { transform: rotate(45deg) translateY(-18px); }
    }

    .login-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(99,102,241,0.45) !important;
    }
    .login-submit-btn:active { transform: translateY(0); }

    /* Input placeholder color */
    .login-form input::placeholder { color: rgba(255,255,255,0.25); }

    /* Responsive */
    @media (max-width: 900px) {
        .login-container { grid-template-columns: 1fr !important; max-width: 520px !important; }
        .login-left      { display: none !important; }
        .login-right     { padding: 48px 36px !important; }
    }
    @media (max-width: 640px) {
        .login-right { padding: 36px 24px !important; }
        .login-right h2 { font-size: 1.7rem !important; }
        .remember-forgot { flex-direction: column !important; gap: 12px !important; align-items: flex-start !important; }
        .security-note p { font-size: 0.8rem !important; }
    }
    @media (max-width: 400px) {
        .login-right { padding: 28px 18px !important; }
        .login-right h2 { font-size: 1.5rem !important; }
        .icon-container { width: 60px !important; height: 60px !important; border-radius: 16px !important; }
        .icon-container i { font-size: 24px !important; }
        .login-submit-btn { font-size: 0.9rem !important; padding: 13px !important; }
    }
</style>
@endpush

@push('scripts')
<script>
function togglePasswordVisibility() {
    const input = document.getElementById('password');
    const icon  = document.getElementById('togglePassword');
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}

document.querySelector('form').addEventListener('submit', function() {
    const btn = this.querySelector('button[type="submit"]');
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memverifikasi...';
    btn.disabled = true;
    setTimeout(() => { btn.innerHTML = '<i class="fas fa-sign-in-alt"></i> Access Admin Panel'; btn.disabled = false; }, 6000);
});
</script>
@endpush
@endsection
