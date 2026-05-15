@extends('admin.layouts.app')
@section('title', 'Pengaturan')
@section('page-title', 'Pengaturan')

@section('content')

@if(session('success'))
    <div class="alert-success"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
@endif

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 900px;">

    <!-- Update Profil -->
    <div class="card">
        <h3 style="color: white; font-size: 1rem; font-weight: 600; margin-bottom: 25px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
            <i class="fas fa-user-cog" style="color: #00f2fe; margin-right: 8px;"></i>Update Profil
        </h3>

        <form method="POST" action="{{ route('admin.settings.profile') }}">
            @csrf
            <div class="form-group">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', Auth::user()->name) }}" required>
                @error('name')<p style="color: #ff6b6b; font-size: 0.8rem; margin-top: 5px;">{{ $message }}</p>@enderror
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', Auth::user()->email) }}" required>
                @error('email')<p style="color: #ff6b6b; font-size: 0.8rem; margin-top: 5px;">{{ $message }}</p>@enderror
            </div>
            <button type="submit" class="btn-cyan" style="width: 100%; justify-content: center; padding: 13px;">
                <i class="fas fa-save"></i> Simpan Profil
            </button>
        </form>
    </div>

    <!-- Ganti Password -->
    <div class="card">
        <h3 style="color: white; font-size: 1rem; font-weight: 600; margin-bottom: 25px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
            <i class="fas fa-key" style="color: #00f2fe; margin-right: 8px;"></i>Ganti Password
        </h3>

        <form method="POST" action="{{ route('admin.settings.password') }}">
            @csrf
            <div class="form-group">
                <label class="form-label">Password Lama</label>
                <input type="password" name="current_password" class="form-control" required>
                @error('current_password')<p style="color: #ff6b6b; font-size: 0.8rem; margin-top: 5px;">{{ $message }}</p>@enderror
            </div>
            <div class="form-group">
                <label class="form-label">Password Baru</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="form-label">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
                @error('password')<p style="color: #ff6b6b; font-size: 0.8rem; margin-top: 5px;">{{ $message }}</p>@enderror
            </div>
            <button type="submit" class="btn-cyan" style="width: 100%; justify-content: center; padding: 13px;">
                <i class="fas fa-lock"></i> Ganti Password
            </button>
        </form>
    </div>

    <!-- Info Akun -->
    <div class="card" style="grid-column: 1/-1;">
        <h3 style="color: white; font-size: 1rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
            <i class="fas fa-info-circle" style="color: #00f2fe; margin-right: 8px;"></i>Informasi Akun
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px;">
            <div style="padding: 15px; background: rgba(0,242,254,0.03); border-radius: 12px;">
                <p style="color: rgba(255,255,255,0.4); font-size: 0.78rem; margin-bottom: 5px;">Nama</p>
                <p style="color: white; font-weight: 500;">{{ Auth::user()->name }}</p>
            </div>
            <div style="padding: 15px; background: rgba(0,242,254,0.03); border-radius: 12px;">
                <p style="color: rgba(255,255,255,0.4); font-size: 0.78rem; margin-bottom: 5px;">Email</p>
                <p style="color: white; font-weight: 500;">{{ Auth::user()->email }}</p>
            </div>
            <div style="padding: 15px; background: rgba(0,242,254,0.03); border-radius: 12px;">
                <p style="color: rgba(255,255,255,0.4); font-size: 0.78rem; margin-bottom: 5px;">Bergabung Sejak</p>
                <p style="color: white; font-weight: 500;">{{ Auth::user()->created_at->format('d M Y') }}</p>
            </div>
            <div style="padding: 15px; background: rgba(0,242,254,0.03); border-radius: 12px;">
                <p style="color: rgba(255,255,255,0.4); font-size: 0.78rem; margin-bottom: 5px;">Role</p>
                <p style="color: #00f2fe; font-weight: 500;">Administrator</p>
            </div>
        </div>
    </div>
</div>

@endsection