@extends('layouts.app')

@section('title', 'Admin Login - JD Technology')

@section('content')
<div style="min-height: calc(100vh - 80px); display: flex; align-items: center; justify-content: center; padding: 40px 5%; position: relative; overflow: hidden;">
    
    <!-- Background Decoration -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
        <div style="position: absolute; width: 400px; height: 400px; background: rgba(0,242,254,0.05); border-radius: 50%; filter: blur(100px); top: -100px; right: -100px;"></div>
        <div style="position: absolute; width: 300px; height: 300px; background: rgba(79,172,254,0.05); border-radius: 50%; filter: blur(80px); bottom: -50px; left: -50px;"></div>
    </div>

    <!-- Login Container -->
    <<div class="login-container" style="display: grid; grid-template-columns: 1fr 1fr; max-width: 1100px; width: 100%; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 50px; overflow: hidden; backdrop-filter: blur(10px); box-shadow: 0 0 50px rgba(0,242,254,0.1);">
        <!-- Left Side - Branding & Admin Features -->
        <div class="login-left" style="background: linear-gradient(135deg, rgba(0,242,254,0.1), rgba(79,172,254,0.1)); padding: 60px 40px; display: flex; flex-direction: column; justify-content: center; position: relative; overflow: hidden;">      
            <!-- Animated Elements -->
            <div style="position: absolute; top: 20%; right: 10%; width: 100px; height: 100px; background: rgba(0,242,254,0.1); border-radius: 30px; transform: rotate(45deg); animation: float 6s ease-in-out infinite;"></div>
            <div style="position: absolute; bottom: 20%; left: 10%; width: 80px; height: 80px; background: rgba(79,172,254,0.1); border-radius: 30px; transform: rotate(20deg); animation: float 5s ease-in-out infinite; animation-delay: 1s;"></div>
            
            <!-- Logo and Brand -->
            <div style="position: relative; z-index: 1;">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); border-radius: 18px; display: flex; align-items: center; justify-content: center; transform: rotate(10deg); box-shadow: 0 0 30px rgba(0,242,254,0.3);">
                        <span style="font-size: 30px; font-weight: 700; color: #0a0a0a;">JD</span>
                    </div>
                    <div>
                        <span style="font-size: 28px; font-weight: 700; background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">JD Technology</span>
                    </div>
                </div>

                <h1 style="font-size: 2.8rem; font-weight: 700; line-height: 1.2; margin-bottom: 20px;">
                    Admin <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Portal</span>
                </h1>

                <p style="color: rgba(255,255,255,0.7); font-size: 1.1rem; line-height: 1.7; margin-bottom: 30px;">
                    Akses panel administrasi untuk mengelola sistem, memantau aktivitas pengguna, dan mengatur konfigurasi platform.
                </p>

                <!-- Admin Features List -->
                <div style="display: flex; flex-direction: column; gap: 15px;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 30px; height: 30px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #00f2fe;">
                            <i class="fas fa-shield-alt" style="font-size: 14px;"></i>
                        </div>
                        <span style="color: rgba(255,255,255,0.8);">Manajemen pengguna dan hak akses</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 30px; height: 30px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #00f2fe;">
                            <i class="fas fa-chart-line" style="font-size: 14px;"></i>
                        </div>
                        <span style="color: rgba(255,255,255,0.8);">Laporan dan analitik real-time</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 30px; height: 30px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #00f2fe;">
                            <i class="fas fa-cog" style="font-size: 14px;"></i>
                        </div>
                        <span style="color: rgba(255,255,255,0.8);">Konfigurasi sistem dan pengaturan</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 30px; height: 30px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #00f2fe;">
                            <i class="fas fa-database" style="font-size: 14px;"></i>
                        </div>
                        <span style="color: rgba(255,255,255,0.8);">Backup dan keamanan data</span>
                    </div>
                </div>

                <!-- Admin Info Card -->
                <div style="margin-top: 40px; padding: 20px; background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px;">
                    <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                        <i class="fas fa-lock" style="color: #00f2fe; font-size: 18px;"></i>
                        <p style="color: #00f2fe; font-weight: 600;">Akses Terbatas</p>
                    </div>
                    <p style="color: rgba(255,255,255,0.7); font-size: 0.95rem; line-height: 1.6;">
                        Halaman ini khusus untuk administrator sistem. Pastikan Anda memiliki otorisasi yang sesuai sebelum melanjutkan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Side - Admin Login Form -->
         <div class="login-right" style="padding: 60px 50px; background: rgba(10,10,10,0.8); backdrop-filter: blur(10px);">
            
            <!-- Header -->
            <div class="login-header" style="text-align: center; margin-bottom: 40px;">
                <div class="icon-container" style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 25px; display: flex; align-items: center; justify-content: center; transform: rotate(10deg); box-shadow: 0 0 30px rgba(0,242,254,0.3);">
                    <i class="fas fa-user-cog" style="font-size: 45px; color: #0a0a0a;"></i>
                </div>
                <h2 style="color: white; font-size: 2.2rem; font-weight: 700; margin-bottom: 10px;">Admin Login</h2>
                <p style="color: rgba(255,255,255,0.6);">Masukkan kredensial administrator Anda</p>
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('filament.auth.login') }}" class="login-form">
                @csrf
                
                <!-- Username/Email Field -->
               <div class="form-group" style="margin-bottom: 25px;">
                    <label style="color: white; display: block; margin-bottom: 10px; font-weight: 500; font-size: 0.95rem;">
                        <i class="fas fa-user-shield" style="color: #00f2fe; margin-right: 8px;"></i> Username / Email
                    </label>
                    <div style="position: relative;">
                        <input type="text" name="email" value="{{ old('email') }}" required 
                               style="width: 100%; padding: 16px 20px; padding-left: 50px; background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.2); border-radius: 15px; color: white; font-size: 1rem; transition: all 0.3s ease;"
                               placeholder="Masukkan username atau email"
                               onfocus="this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 20px rgba(0,242,254,0.2)'; this.style.background='rgba(0,242,254,0.05)'"
                               onblur="this.style.borderColor='rgba(0,242,254,0.2)'; this.style.boxShadow='none'; this.style.background='rgba(255,255,255,0.03)'">
                        <i class="fas fa-user-shield" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); color: #00f2fe; opacity: 0.7;"></i>
                    </div>
                    @error('username')
                        <p style="color: #ff6b6b; font-size: 0.85rem; margin-top: 8px; display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="form-group" style="margin-bottom: 20px;">
                    <label style="color: white; display: block; margin-bottom: 10px; font-weight: 500; font-size: 0.95rem;">
                        <i class="fas fa-key" style="color: #00f2fe; margin-right: 8px;"></i> Password
                    </label>
                    <div style="position: relative;">
                        <input type="password" name="password" id="password" required 
                               style="width: 100%; padding: 16px 20px; padding-left: 50px; padding-right: 50px; background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.2); border-radius: 15px; color: white; font-size: 1rem; transition: all 0.3s ease;"
                               placeholder="Masukkan password admin"
                               onfocus="this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 20px rgba(0,242,254,0.2)'; this.style.background='rgba(0,242,254,0.05)'"
                               onblur="this.style.borderColor='rgba(0,242,254,0.2)'; this.style.boxShadow='none'; this.style.background='rgba(255,255,255,0.03)'">
                        <i class="fas fa-key" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); color: #00f2fe; opacity: 0.7;"></i>
                        <i class="fas fa-eye" id="togglePassword" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); color: #00f2fe; opacity: 0.7; cursor: pointer;" onclick="togglePasswordVisibility()"></i>
                    </div>
                    @error('password')
                        <p style="color: #ff6b6b; font-size: 0.85rem; margin-top: 8px; display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- 2FA & Security Note -->
                <div class="security-note" style="background: rgba(0,242,254,0.05); border: 1px solid rgba(0,242,254,0.1); border-radius: 10px; padding: 15px; margin-bottom: 25px;">       <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-shield-alt" style="color: #00f2fe; font-size: 18px;"></i>
                        <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">
                            Two-factor authentication (2FA) akan diperlukan setelah login untuk keamanan tambahan.
                        </p>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
               <div class="remember-forgot" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
                    <label style="color: rgba(255,255,255,0.7); display: flex; align-items: center; gap: 8px; cursor: pointer;">
                        <input type="checkbox" name="remember" style="width: 18px; height: 18px; accent-color: #00f2fe;">
                        <span>Remember this device</span>
                    </label>
                    <a href="#" style="color: #00f2fe; text-decoration: none; font-size: 0.95rem; transition: all 0.3s;"
                       onmouseover="this.style.color='#4facfe'; this.style.textDecoration='underline'"
                       onmouseout="this.style.color='#00f2fe'; this.style.textDecoration='none'">
                        <i class="fas fa-headset"></i> Contact Support
                    </a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-primary" style="width: 100%; padding: 16px; font-size: 1.1rem; border: none; cursor: pointer; margin-bottom: 25px; display: flex; align-items: center; justify-content: center; gap: 10px;">
                    <i class="fas fa-sign-in-alt"></i> Access Admin Panel
                </button>

                <!-- Security Badge -->
                 <div class="security-badge" style="display: flex; justify-content: center; align-items: center; gap: 15px; padding-top: 20px; border-top: 1px solid rgba(0,242,254,0.1);">            <i class="fas fa-lock" style="color: #00f2fe; font-size: 14px;"></i>
                    <span style="color: rgba(255,255,255,0.5); font-size: 0.85rem;">SSL Secured Connection</span>
                    <i class="fas fa-shield-alt" style="color: #00f2fe; font-size: 14px;"></i>
                </div>

                <!-- Back to Main Site -->
                <div class="back-link" style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('home') }}" style="color: rgba(255,255,255,0.5); text-decoration: none; font-size: 0.9rem; transition: all 0.3s;"
                       onmouseover="this.style.color='#00f2fe'"
                       onmouseout="this.style.color='rgba(255,255,255,0.5)'">
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
        50% { transform: rotate(45deg) translateY(-20px); }
    }
    
    /* Admin-specific styling */
    .btn-primary {
        background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
        color: #0a0a0a;
        font-weight: 600;
        border-radius: 15px;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 0 30px rgba(0,242,254,0.4);
    }
    
    .btn-primary:active {
        transform: translateY(0);
    }

    /* Login Page Responsive Styles */
@media (max-width: 1024px) {
    .login-container {
        grid-template-columns: 1fr !important;
        max-width: 600px !important;
    }
    
    .login-left {
        display: none !important;
    }
    
    .login-right {
        padding: 40px 30px !important;
    }
}

@media (max-width: 768px) {
    .login-right {
        padding: 30px 20px !important;
    }
    
    .login-right h2 {
        font-size: 1.8rem !important;
    }
    
    .login-right p {
        font-size: 0.95rem !important;
    }
    
    .form-control {
        padding: 14px 20px !important;
        padding-left: 45px !important;
    }
    
    .btn-primary {
        padding: 14px !important;
        font-size: 1rem !important;
    }
    
    /* Adjust floating elements for mobile */
    .floating-element {
        display: none;
    }
    
    /* Make security note more compact */
    .security-note {
        padding: 12px !important;
        margin-bottom: 20px !important;
    }
    
    .security-note p {
        font-size: 0.85rem !important;
    }
    
    /* Adjust remember me and forgot password */
    .remember-forgot {
        flex-direction: column !important;
        gap: 15px !important;
        align-items: flex-start !important;
    }
    
    /* Back to main site link */
    .back-link {
        margin-top: 15px !important;
        font-size: 0.85rem !important;
    }
}

@media (max-width: 480px) {
    .login-right {
        padding: 25px 15px !important;
    }
    
    .login-right h2 {
        font-size: 1.5rem !important;
    }
    
    .icon-container {
        width: 60px !important;
        height: 60px !important;
        border-radius: 20px !important;
    }
    
    .icon-container i {
        font-size: 35px !important;
    }
    
    .form-group {
        margin-bottom: 20px !important;
    }
    
    .form-control {
        padding: 12px 15px !important;
        padding-left: 40px !important;
        font-size: 0.95rem !important;
    }
    
    .form-group i:first-child {
        left: 15px !important;
        font-size: 16px !important;
    }
    
    .toggle-password {
        right: 15px !important;
        font-size: 16px !important;
    }
    
    .btn-primary {
        padding: 12px !important;
        font-size: 0.95rem !important;
    }
    
    .security-badge {
        flex-wrap: wrap !important;
        gap: 10px !important;
    }
    
    .security-badge span {
        font-size: 0.8rem !important;
    }
}

/* Landscape mode for mobile */
@media (max-width: 768px) and (orientation: landscape) {
    .login-right {
        padding: 20px 30px !important;
    }
    
    .login-right h2 {
        font-size: 1.8rem !important;
        margin-bottom: 5px !important;
    }
    
    .icon-container {
        width: 50px !important;
        height: 50px !important;
        margin-bottom: 15px !important;
    }
    
    .icon-container i {
        font-size: 30px !important;
    }
    
    .form-group {
        margin-bottom: 15px !important;
    }
    
    .security-note {
        padding: 10px !important;
        margin-bottom: 15px !important;
    }
}

/* Tablet landscape */
@media (min-width: 769px) and (max-width: 1024px) and (orientation: landscape) {
    .login-left {
        display: block !important;
        padding: 40px 30px !important;
    }
    
    .login-left h1 {
        font-size: 2.2rem !important;
    }
    
    .login-left p {
        font-size: 1rem !important;
    }
}

/* High-resolution mobile */
@media (max-width: 360px) {
    .login-right h2 {
        font-size: 1.3rem !important;
    }
    
    .form-control {
        padding: 10px 12px !important;
        padding-left: 35px !important;
        font-size: 0.9rem !important;
    }
    
    .form-group i:first-child {
        left: 12px !important;
        font-size: 14px !important;
    }
    
    .btn-primary {
        padding: 10px !important;
        font-size: 0.9rem !important;
    }
}

/* Animation for mobile menu */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.nav-menu.active .nav-link {
    animation: slideIn 0.3s ease forwards;
    animation-delay: calc(var(--i) * 0.1s);
}

/* Add index for animation delay */
.nav-menu.active .nav-link:nth-child(1) { --i: 1; }
.nav-menu.active .nav-link:nth-child(2) { --i: 2; }
.nav-menu.active .nav-link:nth-child(3) { --i: 3; }
.nav-menu.active .nav-link:nth-child(4) { --i: 4; }
.nav-menu.active .nav-link:nth-child(5) { --i: 5; }
.nav-menu.active .nav-btn { --i: 6; }

/* Smooth transitions */
* {
    -webkit-tap-highlight-color: transparent;
}

/* Prevent body scroll when menu is open */
body.menu-open {
    overflow: hidden;
}

/* Touch-friendly improvements */
@media (hover: none) and (pointer: coarse) {
    .nav-link,
    .btn-primary,
    .social-link,
    .menu-toggle span {
        transition: none;
    }
    
    .nav-link:active,
    .btn-primary:active,
    .social-link:active {
        opacity: 0.7;
    }
    
    .menu-toggle:active span {
        background: #4facfe;
    }
}
</style>
@endpush

@push('scripts')
<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('togglePassword');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }

    // Form submission animation
    document.querySelector('form').addEventListener('submit', function(e) {
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Verifying credentials...';
        submitBtn.disabled = true;
        
        // Form will submit normally, but this shows loading state
        setTimeout(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 5000); // Fallback in case something goes wrong
    });

    // Add admin-specific animations
    document.addEventListener('DOMContentLoaded', function() {
        const adminIcon = document.querySelector('.fa-user-cog');
        if (adminIcon) {
            setInterval(() => {
                adminIcon.style.transform = 'rotate(10deg) scale(1.1)';
                setTimeout(() => {
                    adminIcon.style.transform = 'rotate(10deg) scale(1)';
                }, 200);
            }, 3000);
        }
    });

    // ,obile
        // Handle orientation change
    window.addEventListener('orientationchange', function() {
        // Reset any orientation-specific issues
        setTimeout(function() {
            window.scrollTo(0, 0);
        }, 100);
    });

    // Prevent zoom on input focus for iOS
    document.addEventListener('touchstart', function(e) {
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') {
            document.body.style.transform = 'scale(1)';
        }
    }, { passive: true });

    // Add active class to current nav link
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    });

    // Smooth scroll for mobile
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
@endpush
@endsection