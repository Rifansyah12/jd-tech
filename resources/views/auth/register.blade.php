@extends('layouts.app')

@section('title', 'Register - JD Technology')

@section('content')
<div style="min-height: calc(100vh - 80px); display: flex; align-items: center; justify-content: center; padding: 120px 5% 60px;">

    <!-- Background Decoration -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
        <div style="position: absolute; width: 400px; height: 400px; background: rgba(0,242,254,0.05); border-radius: 50%; filter: blur(100px); top: -100px; right: -100px;"></div>
        <div style="position: absolute; width: 300px; height: 300px; background: rgba(79,172,254,0.05); border-radius: 50%; filter: blur(80px); bottom: -50px; left: -50px;"></div>
    </div>

    <div style="width: 100%; max-width: 480px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 40px; padding: 50px 40px; backdrop-filter: blur(10px);">

        <!-- Header -->
        <div style="text-align: center; margin-bottom: 40px;">
            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; transform: rotate(10deg); box-shadow: 0 0 30px rgba(0,242,254,0.3);">
                <span style="font-size: 28px; font-weight: 700; color: #0a0a0a; transform: rotate(-10deg);">JD</span>
            </div>
            <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 8px;">Buat Akun</h2>
            <p style="color: rgba(255,255,255,0.5);">Daftar untuk mengakses fitur JD Technology</p>
        </div>

        @if($errors->any())
        <div style="margin-bottom: 20px; padding: 15px; background: rgba(255,100,100,0.1); border: 1px solid rgba(255,100,100,0.3); border-radius: 12px; color: rgba(255,100,100,0.9);">
            @foreach($errors->all() as $error)
                <p style="margin-bottom: 5px;"><i class="fas fa-exclamation-circle"></i> {{ $error }}</p>
            @endforeach
        </div>
        @endif

        <form method="POST" action="{{ route('register') }}" style="display: flex; flex-direction: column; gap: 18px;">
            @csrf

            <div>
                <label style="display: block; color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-bottom: 8px;">Nama Lengkap</label>
                <div style="position: relative;">
                    <i class="fas fa-user" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: rgba(0,242,254,0.5);"></i>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan nama lengkap" required
                        style="width: 100%; background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.2); border-radius: 15px; padding: 14px 16px 14px 44px; color: #fff; font-size: 1rem; transition: all 0.3s;"
                        onfocus="this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 15px rgba(0,242,254,0.1)'"
                        onblur="this.style.borderColor='rgba(0,242,254,0.2)'; this.style.boxShadow='none'">
                </div>
            </div>

            <div>
                <label style="display: block; color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-bottom: 8px;">Alamat Email</label>
                <div style="position: relative;">
                    <i class="fas fa-envelope" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: rgba(0,242,254,0.5);"></i>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required
                        style="width: 100%; background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.2); border-radius: 15px; padding: 14px 16px 14px 44px; color: #fff; font-size: 1rem; transition: all 0.3s;"
                        onfocus="this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 15px rgba(0,242,254,0.1)'"
                        onblur="this.style.borderColor='rgba(0,242,254,0.2)'; this.style.boxShadow='none'">
                </div>
            </div>

            <div>
                <label style="display: block; color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-bottom: 8px;">Password</label>
                <div style="position: relative;">
                    <i class="fas fa-lock" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: rgba(0,242,254,0.5);"></i>
                    <input type="password" name="password" placeholder="Minimal 8 karakter" required
                        style="width: 100%; background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.2); border-radius: 15px; padding: 14px 16px 14px 44px; color: #fff; font-size: 1rem; transition: all 0.3s;"
                        onfocus="this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 15px rgba(0,242,254,0.1)'"
                        onblur="this.style.borderColor='rgba(0,242,254,0.2)'; this.style.boxShadow='none'">
                </div>
            </div>

            <div>
                <label style="display: block; color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-bottom: 8px;">Konfirmasi Password</label>
                <div style="position: relative;">
                    <i class="fas fa-lock" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: rgba(0,242,254,0.5);"></i>
                    <input type="password" name="password_confirmation" placeholder="Ulangi password" required
                        style="width: 100%; background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.2); border-radius: 15px; padding: 14px 16px 14px 44px; color: #fff; font-size: 1rem; transition: all 0.3s;"
                        onfocus="this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 15px rgba(0,242,254,0.1)'"
                        onblur="this.style.borderColor='rgba(0,242,254,0.2)'; this.style.boxShadow='none'">
                </div>
            </div>

            <button type="submit" class="btn-primary" style="width: 100%; border: none; cursor: pointer; padding: 16px; font-size: 1rem; justify-content: center; margin-top: 5px;">
                <i class="fas fa-user-plus"></i> Daftar Sekarang
            </button>
        </form>

        <p style="text-align: center; margin-top: 25px; color: rgba(255,255,255,0.5); font-size: 0.9rem;">
            Sudah punya akun? <a href="{{ route('login') }}" style="color: #00f2fe; text-decoration: none; font-weight: 500;">Masuk di sini</a>
        </p>
    </div>
</div>
@endsection
