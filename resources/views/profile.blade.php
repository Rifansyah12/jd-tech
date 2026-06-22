@extends('layouts.app')

@section('title', 'Profile - JD Technology')

@section('content')
<div style="min-height: calc(100vh - 80px); padding: 120px 5% 80px;">
    <div style="max-width: 700px; margin: 0 auto;">

        <div style="margin-bottom: 40px;">
            <div class="hero-badge" style="margin-bottom: 16px;">
                <i class="fas fa-user-circle"></i> MY PROFILE
            </div>
            <h1 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 10px;">
                Profil <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Saya</span>
            </h1>
        </div>

        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 35px; padding: 50px 40px;">
            <!-- Avatar -->
            <div style="text-align: center; margin-bottom: 40px; padding-bottom: 40px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.5rem; font-weight: 700; color: #0a0a0a; margin: 0 auto 20px;">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 5px;">{{ Auth::user()->name }}</h2>
                <p style="color: #00f2fe; font-size: 0.95rem;">{{ Auth::user()->email }}</p>
                <p style="color: rgba(255,255,255,0.4); font-size: 0.85rem; margin-top: 8px;">
                    <i class="fas fa-calendar"></i> Bergabung {{ Auth::user()->created_at->format('d M Y') }}
                </p>
            </div>

            <!-- Info Cards -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div style="background: rgba(0,242,254,0.04); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; padding: 25px;">
                    <p style="color: rgba(255,255,255,0.4); font-size: 0.8rem; margin-bottom: 8px;">NAMA</p>
                    <p style="color: white; font-weight: 500;">{{ Auth::user()->name }}</p>
                </div>
                <div style="background: rgba(0,242,254,0.04); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; padding: 25px;">
                    <p style="color: rgba(255,255,255,0.4); font-size: 0.8rem; margin-bottom: 8px;">EMAIL</p>
                    <p style="color: white; font-weight: 500;">{{ Auth::user()->email }}</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div style="display: flex; gap: 15px; margin-top: 35px; flex-wrap: wrap;">
                <a href="{{ route('dashboard') }}" class="btn-primary" style="padding: 12px 28px;">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="background: rgba(255,100,100,0.1); border: 1px solid rgba(255,100,100,0.3); border-radius: 50px; padding: 12px 28px; color: rgba(255,100,100,0.8); cursor: pointer; font-size: 0.95rem; display: flex; align-items: center; gap: 8px; transition: all 0.3s ease;"
                            onmouseover="this.style.background='rgba(255,100,100,0.2)'"
                            onmouseout="this.style.background='rgba(255,100,100,0.1)'">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
