@extends('admin.layouts.app')
@section('title', 'Portfolio')
@section('page-title', 'Portfolio')

@section('content')

@if(session('success'))
    <div class="alert-success"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
@endif

<div class="page-header">
    <h2><i class="fas fa-briefcase" style="color: #00f2fe; margin-right: 10px;"></i>Manajemen Portfolio</h2>
    <a href="{{ route('admin.portfolio.create') }}" class="btn-cyan">
        <i class="fas fa-plus"></i> Tambah Portfolio
    </a>
</div>

<div class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Thumbnail</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Tim</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($portfolios as $p)
                <tr>
                    <td style="color: rgba(255,255,255,0.3);">{{ $loop->iteration }}</td>
                    <td>
                        @if($p->thumbnail)
                            <img src="{{ Storage::url($p->thumbnail) }}" style="width: 50px; height: 40px; object-fit: cover; border-radius: 8px;">
                        @else
                            <div style="width: 50px; height: 40px; background: rgba(0,242,254,0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-image" style="color: rgba(255,255,255,0.2);"></i>
                            </div>
                        @endif
                    </td>
                    <td>
                        <p style="font-weight: 500; color: white;">{{ $p->title }}</p>
                        <p style="font-size: 0.75rem; color: rgba(255,255,255,0.3);">{{ Str::limit($p->description, 50) }}</p>
                    </td>
                    <td><span style="color: rgba(255,255,255,0.5);">{{ $p->category ?? '-' }}</span></td>
                    <td>
                        @if($p->status === 'completed')
                            <span class="badge-success">Selesai</span>
                        @else
                            <span class="badge-warning">Ongoing</span>
                        @endif
                    </td>
                    <td style="color: rgba(255,255,255,0.5);">{{ count($p->team_members ?? []) }} orang</td>
                    <td>
                        <div style="display: flex; gap: 8px;">
                            <a href="{{ route('admin.portfolio.edit', $p) }}" class="btn-outline" style="padding: 6px 12px; font-size: 0.8rem;">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form method="POST" action="{{ route('admin.portfolio.destroy', $p) }}" onsubmit="return confirm('Hapus portfolio ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn-danger" style="padding: 6px 12px;">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center; padding: 40px; color: rgba(255,255,255,0.3);">
                        <i class="fas fa-briefcase" style="font-size: 2rem; margin-bottom: 10px; display: block; opacity: 0.3;"></i>
                        Belum ada portfolio
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($portfolios->hasPages())
        <div style="margin-top: 20px; display: flex; justify-content: center;">
            {{ $portfolios->links() }}
        </div>
    @endif
</div>

@endsection