@extends('admin.layouts.app')
@section('title', 'Tim')
@section('page-title', 'Manajemen Tim')

@section('content')

@if(session('success'))
    <div class="alert-success"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
@endif

<div class="page-header">
    <h2><i class="fas fa-users" style="color: #00f2fe; margin-right: 10px;"></i>Anggota Tim</h2>
    <a href="{{ route('admin.team.create') }}" class="btn-cyan"><i class="fas fa-user-plus"></i> Tambah Anggota</a>
</div>

<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 16px;">
    @forelse($members as $m)
    <div class="card" style="padding: 20px; text-align: center; position: relative;">
        <!-- Status badge -->
        <div style="position: absolute; top: 14px; right: 14px;">
            @if($m->is_active)
                <span class="badge-success">Aktif</span>
            @else
                <span class="badge-danger">Nonaktif</span>
            @endif
        </div>

        <!-- Foto -->
        <div style="width: 70px; height: 70px; border-radius: 50%; margin: 0 auto 12px; overflow: hidden; border: 2px solid rgba(0,242,254,0.3); background: rgba(0,242,254,0.08); display: flex; align-items: center; justify-content: center;">
            @if($m->photo)
                <img src="{{ asset('storage/' . $m->photo) }}" style="width: 100%; height: 100%; object-fit: cover;">
            @else
                <i class="fas fa-user" style="color: #00f2fe; font-size: 1.5rem;"></i>
            @endif
        </div>

        <h3 style="color: white; font-weight: 600; margin-bottom: 4px;">{{ $m->name }}</h3>
        <p style="color: #00f2fe; font-size: 0.82rem; margin-bottom: 8px;">{{ $m->position ?? '-' }}</p>
        <p style="color: rgba(255,255,255,0.65); font-size: 0.8rem; margin-bottom: 10px;">
            <i class="fas fa-briefcase" style="color:#00f2fe;"></i>
            {{ $m->experience ?? 'No experience set' }}
        </p>
        <p style="color: rgba(255,255,255,0.4); font-size: 0.78rem; margin-bottom: 15px;">{{ $m->email ?? '' }}</p>
        <!-- Links -->
        <div style="display: flex; justify-content: center; gap: 8px; margin-bottom: 15px;">
            @if($m->github_url)
                <a href="{{ $m->github_url }}" target="_blank" class="navbar-btn" style="width: 32px; height: 32px;">
                    <i class="fab fa-github" style="font-size: 13px;"></i>
                </a>
            @endif
            @if($m->linkedin_url)
                <a href="{{ $m->linkedin_url }}" target="_blank" class="navbar-btn" style="width: 32px; height: 32px;">
                    <i class="fab fa-linkedin" style="font-size: 13px;"></i>
                </a>
            @endif
        </div>

        <div style="display: flex; gap: 8px; justify-content: center;">
            <a href="{{ route('admin.team.edit', $m) }}" class="btn-outline" style="padding: 7px 16px; font-size: 0.82rem;">
                <i class="fas fa-edit"></i> Edit
            </a>
            <form method="POST" action="{{ route('admin.team.destroy', $m) }}" onsubmit="return confirm('Hapus anggota ini?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn-danger" style="padding: 7px 16px;"><i class="fas fa-trash"></i></button>
            </form>
        </div>
    </div>
    @empty
    <div style="grid-column: 1/-1; text-align: center; padding: 50px; color: rgba(255,255,255,0.3);">
        <i class="fas fa-users" style="font-size: 2.5rem; display: block; margin-bottom: 12px; opacity: 0.3;"></i>
        Belum ada anggota tim
    </div>
    @endforelse
</div>
@endsection