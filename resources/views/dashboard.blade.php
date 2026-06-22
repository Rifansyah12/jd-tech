@extends('layouts.app')

@section('title', 'Dashboard - JD Technology')

@section('content')
<div style="min-height: calc(100vh - 80px); padding: 120px 5% 80px;">
    <div style="max-width: 1100px; margin: 0 auto;">

        <!-- Welcome Header -->
        <div style="margin-bottom: 50px;">
            <div class="hero-badge" style="margin-bottom: 16px;">
                <i class="fas fa-user-circle"></i> MY ACCOUNT
            </div>
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 10px;">
                Selamat Datang, <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ Auth::user()->name }}</span>
            </h1>
            <p style="color: rgba(255,255,255,0.6); font-size: 1.1rem;">{{ Auth::user()->email }}</p>
        </div>

        <!-- Stats Cards -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; margin-bottom: 50px;">
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 25px; padding: 30px; text-align: center; transition: all 0.3s ease;"
                 onmouseover="this.style.borderColor='#00f2fe'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 0 30px rgba(0,242,254,0.15)'"
                 onmouseout="this.style.borderColor='rgba(0,242,254,0.1)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                <div style="width: 60px; height: 60px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #00f2fe; margin: 0 auto 15px;">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div style="font-size: 2.5rem; font-weight: 800; color: #00f2fe; margin-bottom: 5px;">{{ $totalPortfolios }}</div>
                <div style="color: rgba(255,255,255,0.6); font-size: 0.95rem;">Total Portfolio</div>
            </div>

            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 25px; padding: 30px; text-align: center; transition: all 0.3s ease;"
                 onmouseover="this.style.borderColor='#00f2fe'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 0 30px rgba(0,242,254,0.15)'"
                 onmouseout="this.style.borderColor='rgba(0,242,254,0.1)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                <div style="width: 60px; height: 60px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #00f2fe; margin: 0 auto 15px;">
                    <i class="fas fa-cogs"></i>
                </div>
                <div style="font-size: 2.5rem; font-weight: 800; color: #00f2fe; margin-bottom: 5px;">{{ $totalServices }}</div>
                <div style="color: rgba(255,255,255,0.6); font-size: 0.95rem;">Total Layanan</div>
            </div>

            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 25px; padding: 30px; text-align: center; transition: all 0.3s ease;"
                 onmouseover="this.style.borderColor='#00f2fe'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 0 30px rgba(0,242,254,0.15)'"
                 onmouseout="this.style.borderColor='rgba(0,242,254,0.1)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                <div style="width: 60px; height: 60px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #00f2fe; margin: 0 auto 15px;">
                    <i class="fas fa-envelope"></i>
                </div>
                <div style="font-size: 2.5rem; font-weight: 800; color: #00f2fe; margin-bottom: 5px;">{{ $totalMessages }}</div>
                <div style="color: rgba(255,255,255,0.6); font-size: 0.95rem;">Total Pesan</div>
            </div>
        </div>

        <!-- Quick Links -->
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px;">
            <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 30px;">
                <i class="fas fa-compass" style="color: #00f2fe; margin-right: 10px;"></i> Navigasi Cepat
            </h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px;">
                <a href="{{ route('portfolio') }}" style="display: flex; flex-direction: column; align-items: center; gap: 12px; padding: 25px; background: rgba(0,242,254,0.04); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; text-decoration: none; color: #fff; transition: all 0.3s ease;"
                   onmouseover="this.style.borderColor='#00f2fe'; this.style.background='rgba(0,242,254,0.08)'"
                   onmouseout="this.style.borderColor='rgba(0,242,254,0.1)'; this.style.background='rgba(0,242,254,0.04)'">
                    <i class="fas fa-briefcase" style="font-size: 1.8rem; color: #00f2fe;"></i>
                    <span style="font-weight: 500;">Portfolio</span>
                </a>
                <a href="{{ route('services') }}" style="display: flex; flex-direction: column; align-items: center; gap: 12px; padding: 25px; background: rgba(0,242,254,0.04); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; text-decoration: none; color: #fff; transition: all 0.3s ease;"
                   onmouseover="this.style.borderColor='#00f2fe'; this.style.background='rgba(0,242,254,0.08)'"
                   onmouseout="this.style.borderColor='rgba(0,242,254,0.1)'; this.style.background='rgba(0,242,254,0.04)'">
                    <i class="fas fa-cogs" style="font-size: 1.8rem; color: #00f2fe;"></i>
                    <span style="font-weight: 500;">Layanan</span>
                </a>
                <a href="{{ route('about') }}" style="display: flex; flex-direction: column; align-items: center; gap: 12px; padding: 25px; background: rgba(0,242,254,0.04); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; text-decoration: none; color: #fff; transition: all 0.3s ease;"
                   onmouseover="this.style.borderColor='#00f2fe'; this.style.background='rgba(0,242,254,0.08)'"
                   onmouseout="this.style.borderColor='rgba(0,242,254,0.1)'; this.style.background='rgba(0,242,254,0.04)'">
                    <i class="fas fa-users" style="font-size: 1.8rem; color: #00f2fe;"></i>
                    <span style="font-weight: 500;">Tim Kami</span>
                </a>
                <a href="{{ route('contact') }}" style="display: flex; flex-direction: column; align-items: center; gap: 12px; padding: 25px; background: rgba(0,242,254,0.04); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; text-decoration: none; color: #fff; transition: all 0.3s ease;"
                   onmouseover="this.style.borderColor='#00f2fe'; this.style.background='rgba(0,242,254,0.08)'"
                   onmouseout="this.style.borderColor='rgba(0,242,254,0.1)'; this.style.background='rgba(0,242,254,0.04)'">
                    <i class="fas fa-envelope" style="font-size: 1.8rem; color: #00f2fe;"></i>
                    <span style="font-weight: 500;">Hubungi Kami</span>
                </a>
            </div>
        </div>

        <!-- Logout -->
        <div style="margin-top: 30px; text-align: right;">
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" style="background: rgba(255,100,100,0.1); border: 1px solid rgba(255,100,100,0.3); border-radius: 15px; padding: 12px 25px; color: rgba(255,100,100,0.8); cursor: pointer; font-size: 0.9rem; transition: all 0.3s ease;"
                        onmouseover="this.style.background='rgba(255,100,100,0.2)'; this.style.borderColor='rgba(255,100,100,0.6)'"
                        onmouseout="this.style.background='rgba(255,100,100,0.1)'; this.style.borderColor='rgba(255,100,100,0.3)'">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
