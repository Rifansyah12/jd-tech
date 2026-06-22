@extends('admin.layouts.app')
@section('title', 'Layanan')
@section('page-title', 'Layanan')

@section('content')

@if(session('success'))
    <div class="alert-success"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
@endif

<div class="page-header">
    <h2><i class="fas fa-cogs" style="color: #00f2fe; margin-right: 10px;"></i>Manajemen Layanan</h2>
    <a href="{{ route('admin.services.create') }}" class="btn-cyan"><i class="fas fa-plus"></i> Tambah Layanan</a>
</div>

<form method="GET" action="{{ route('admin.services.index') }}" style="margin-bottom: 16px; display: flex; gap: 10px;">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama layanan..." style="flex: 1; max-width: 360px; background: rgba(255,255,255,0.04); border: 1px solid rgba(0,242,254,0.15); border-radius: 10px; padding: 10px 16px; color: #fff; font-size: 0.9rem;">
    <button type="submit" class="btn-outline" style="padding: 10px 18px;"><i class="fas fa-search"></i></button>
    @if(request('search'))
    <a href="{{ route('admin.services.index') }}" class="btn-outline" style="padding: 10px 18px;"><i class="fas fa-times"></i></a>
    @endif
</form>

<div class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr><th>#</th><th>Icon</th><th>Judul</th><th>Deskripsi</th><th>Status</th><th>Aksi</th></tr>
            </thead>
            <tbody>
                @forelse($services as $s)
                <tr>
                    <td style="color: rgba(255,255,255,0.3);">{{ $loop->iteration }}</td>
                    <td><div style="width: 38px; height: 38px; background: rgba(0,242,254,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center;"><i class="{{ $s->icon }}" style="color: #00f2fe;"></i></div></td>
                    <td style="color: white; font-weight: 500;">{{ $s->title }}</td>
                    <td style="color: rgba(255,255,255,0.5);">{{ Str::limit($s->description, 60) }}</td>
                    <td>
                        @if($s->is_active)
                            <span class="badge-success">Aktif</span>
                        @else
                            <span class="badge-danger">Nonaktif</span>
                        @endif
                    </td>
                    <td>
                        <div style="display: flex; gap: 8px;">
                            <a href="{{ route('admin.services.edit', $s) }}" class="btn-outline" style="padding: 6px 12px;"><i class="fas fa-edit"></i></a>
                            <form method="POST" action="{{ route('admin.services.destroy', $s) }}" onsubmit="return confirm('Hapus layanan ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn-danger" style="padding: 6px 12px;"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" style="text-align: center; padding: 40px; color: rgba(255,255,255,0.3);">Belum ada layanan</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection