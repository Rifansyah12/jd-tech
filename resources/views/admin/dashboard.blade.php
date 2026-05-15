@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

{{-- Alert --}}
@if(session('success'))
    <div style="background: rgba(0,242,254,0.1); border: 1px solid rgba(0,242,254,0.3); border-radius: 12px; padding: 14px 20px; margin-bottom: 25px; color: #00f2fe; display: flex; align-items: center; gap: 10px;">
        <i class="fas fa-check-circle"></i> {{ session('success') }}
    </div>
@endif

<!-- Stats Cards -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 30px;">

    <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.15); border-radius: 20px; padding: 25px;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
            <div style="width: 45px; height: 45px; background: rgba(0,242,254,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-envelope" style="color: #00f2fe;"></i>
            </div>
            @if($unreadMessages > 0)
                <span style="color: #00f2fe; font-size: 0.8rem; background: rgba(0,242,254,0.1); padding: 4px 10px; border-radius: 20px;">{{ $unreadMessages }} baru</span>
            @endif
        </div>
        <h3 style="color: white; font-size: 2rem; font-weight: 700; margin-bottom: 5px;">{{ $totalMessages }}</h3>
        <p style="color: rgba(255,255,255,0.5); font-size: 0.85rem;">Total Pesan Masuk</p>
    </div>

    <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(79,172,254,0.15); border-radius: 20px; padding: 25px;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
            <div style="width: 45px; height: 45px; background: rgba(79,172,254,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-briefcase" style="color: #4facfe;"></i>
            </div>
        </div>
        <h3 style="color: white; font-size: 2rem; font-weight: 700; margin-bottom: 5px;">{{ $totalPortfolio }}</h3>
        <p style="color: rgba(255,255,255,0.5); font-size: 0.85rem;">Total Portfolio</p>
    </div>

    <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.15); border-radius: 20px; padding: 25px;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
            <div style="width: 45px; height: 45px; background: rgba(0,242,254,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-cogs" style="color: #00f2fe;"></i>
            </div>
        </div>
        <h3 style="color: white; font-size: 2rem; font-weight: 700; margin-bottom: 5px;">{{ $totalServices }}</h3>
        <p style="color: rgba(255,255,255,0.5); font-size: 0.85rem;">Total Layanan</p>
    </div>

    <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(79,172,254,0.15); border-radius: 20px; padding: 25px;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
            <div style="width: 45px; height: 45px; background: rgba(79,172,254,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-users" style="color: #4facfe;"></i>
            </div>
        </div>
        <h3 style="color: white; font-size: 2rem; font-weight: 700; margin-bottom: 5px;">{{ $totalTeam }}</h3>
        <p style="color: rgba(255,255,255,0.5); font-size: 0.85rem;">Anggota Tim</p>
    </div>
</div>

<!-- Recent Activity (2 kolom) -->
<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;">

    <!-- Pesan Terbaru -->
    <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; padding: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h3 style="color: white; font-size: 1rem; font-weight: 600;"><i class="fas fa-envelope" style="color: #00f2fe; margin-right: 8px;"></i>Pesan Terbaru</h3>
            <a href="{{ route('admin.messages.index') }}" style="color: #00f2fe; font-size: 0.8rem; text-decoration: none;">Lihat semua</a>
        </div>
        @forelse($recentMessages as $msg)
        <div style="padding: 12px; border-radius: 10px; background: rgba(255,255,255,0.02); margin-bottom: 8px; display: flex; align-items: center; gap: 12px;">
            <div style="width: 36px; height: 36px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fas fa-user" style="color: #00f2fe; font-size: 13px;"></i>
            </div>
            <div style="flex: 1; min-width: 0;">
                <p style="color: white; font-size: 0.85rem; font-weight: 500; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $msg->name }}</p>
                <p style="color: rgba(255,255,255,0.4); font-size: 0.75rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $msg->subject ?? $msg->message }}</p>
            </div>
            @if(!$msg->is_read)
                <span style="width: 8px; height: 8px; background: #00f2fe; border-radius: 50%; flex-shrink: 0;"></span>
            @endif
        </div>
        @empty
        <p style="color: rgba(255,255,255,0.3); font-size: 0.85rem; text-align: center; padding: 20px 0;">Belum ada pesan</p>
        @endforelse
    </div>

    <!-- Portfolio Terbaru -->
    <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; padding: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h3 style="color: white; font-size: 1rem; font-weight: 600;"><i class="fas fa-briefcase" style="color: #4facfe; margin-right: 8px;"></i>Portfolio Terbaru</h3>
            <a href="{{ route('admin.portfolio.index') }}" style="color: #00f2fe; font-size: 0.8rem; text-decoration: none;">Lihat semua</a>
        </div>
        @forelse($recentPortfolio as $p)
        <div style="padding: 12px; border-radius: 10px; background: rgba(255,255,255,0.02); margin-bottom: 8px; display: flex; align-items: center; gap: 12px;">
            <div style="width: 36px; height: 36px; border-radius: 8px; overflow: hidden; flex-shrink: 0; background: rgba(79,172,254,0.1); display: flex; align-items: center; justify-content: center;">
                @if($p->thumbnail)
                    <img src="{{ Storage::url($p->thumbnail) }}" style="width: 100%; height: 100%; object-fit: cover;">
                @else
                    <i class="fas fa-image" style="color: #4facfe; font-size: 13px;"></i>
                @endif
            </div>
            <div style="flex: 1; min-width: 0;">
                <p style="color: white; font-size: 0.85rem; font-weight: 500; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $p->title }}</p>
                <p style="color: rgba(255,255,255,0.4); font-size: 0.75rem;">{{ $p->category ?? '-' }}</p>
            </div>
            <span style="font-size: 0.7rem; padding: 3px 8px; border-radius: 20px; {{ $p->status === 'completed' ? 'background: rgba(0,242,254,0.1); color: #00f2fe;' : 'background: rgba(255,200,0,0.1); color: #ffc800;' }}">
                {{ $p->status === 'completed' ? 'Selesai' : 'Ongoing' }}
            </span>
        </div>
        @empty
        <p style="color: rgba(255,255,255,0.3); font-size: 0.85rem; text-align: center; padding: 20px 0;">Belum ada portfolio</p>
        @endforelse
    </div>
</div>

<!-- Quick Actions -->
<div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; padding: 25px;">
    <h3 style="color: white; font-size: 1rem; font-weight: 600; margin-bottom: 20px;"><i class="fas fa-bolt" style="color: #00f2fe; margin-right: 8px;"></i>Aksi Cepat</h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px;">
        <a href="{{ route('admin.portfolio.create') }}" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 18px; background: rgba(0,242,254,0.05); border: 1px solid rgba(0,242,254,0.15); border-radius: 14px; text-decoration: none; transition: all 0.2s;"
            onmouseover="this.style.background='rgba(0,242,254,0.1)'" onmouseout="this.style.background='rgba(0,242,254,0.05)'">
            <i class="fas fa-plus-circle" style="color: #00f2fe; font-size: 22px;"></i>
            <span style="color: rgba(255,255,255,0.8); font-size: 0.82rem; text-align: center;">Tambah Portfolio</span>
        </a>
        <a href="{{ route('admin.team.create') }}" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 18px; background: rgba(79,172,254,0.05); border: 1px solid rgba(79,172,254,0.15); border-radius: 14px; text-decoration: none; transition: all 0.2s;"
            onmouseover="this.style.background='rgba(79,172,254,0.1)'" onmouseout="this.style.background='rgba(79,172,254,0.05)'">
            <i class="fas fa-user-plus" style="color: #4facfe; font-size: 22px;"></i>
            <span style="color: rgba(255,255,255,0.8); font-size: 0.82rem; text-align: center;">Tambah Anggota</span>
        </a>
        <a href="{{ route('admin.services.create') }}" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 18px; background: rgba(0,242,254,0.05); border: 1px solid rgba(0,242,254,0.15); border-radius: 14px; text-decoration: none; transition: all 0.2s;"
            onmouseover="this.style.background='rgba(0,242,254,0.1)'" onmouseout="this.style.background='rgba(0,242,254,0.05)'">
            <i class="fas fa-plus" style="color: #00f2fe; font-size: 22px;"></i>
            <span style="color: rgba(255,255,255,0.8); font-size: 0.82rem; text-align: center;">Tambah Layanan</span>
        </a>
        <a href="{{ route('admin.messages.index') }}" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 18px; background: rgba(79,172,254,0.05); border: 1px solid rgba(79,172,254,0.15); border-radius: 14px; text-decoration: none; transition: all 0.2s;"
            onmouseover="this.style.background='rgba(79,172,254,0.1)'" onmouseout="this.style.background='rgba(79,172,254,0.05)'">
            <i class="fas fa-inbox" style="color: #4facfe; font-size: 22px;"></i>
            <span style="color: rgba(255,255,255,0.8); font-size: 0.82rem; text-align: center;">Lihat Pesan</span>
        </a>
    </div>
</div>

@endsection