@extends('admin.layouts.app')
@section('title', 'Pesan Masuk')
@section('page-title', 'Pesan Masuk')

@section('content')

@if(session('success'))
    <div class="alert-success"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
@endif

<div class="page-header">
    <h2><i class="fas fa-envelope" style="color: #00f2fe; margin-right: 10px;"></i>Pesan Masuk</h2>
</div>

<form method="GET" action="{{ route('admin.messages.index') }}" style="margin-bottom: 16px; display: flex; gap: 10px;">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama, email, atau subject..." style="flex: 1; max-width: 360px; background: rgba(255,255,255,0.04); border: 1px solid rgba(0,242,254,0.15); border-radius: 10px; padding: 10px 16px; color: #fff; font-size: 0.9rem;">
    <button type="submit" class="btn-outline" style="padding: 10px 18px;"><i class="fas fa-search"></i></button>
    @if(request('search'))
    <a href="{{ route('admin.messages.index') }}" class="btn-outline" style="padding: 10px 18px;"><i class="fas fa-times"></i></a>
    @endif
</form>

<div class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Pengirim</th>
                    <th>Subject</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $msg)
                <tr style="{{ !$msg->is_read ? 'background: rgba(0,242,254,0.02);' : '' }}">
                    <td style="color: rgba(255,255,255,0.3);">{{ $loop->iteration }}</td>
                    <td>
                        <p style="font-weight: {{ !$msg->is_read ? '600' : '400' }}; color: white;">{{ $msg->name }}</p>
                        <p style="font-size: 0.75rem; color: rgba(255,255,255,0.4);">{{ $msg->email }}</p>
                    </td>
                    <td style="color: rgba(255,255,255,0.7);">{{ $msg->subject ?? '-' }}</td>
                    <td style="color: rgba(255,255,255,0.5); max-width: 200px;">{{ Str::limit($msg->message, 60) }}</td>
                    <td style="color: rgba(255,255,255,0.4); font-size: 0.8rem; white-space: nowrap;">{{ $msg->created_at->format('d M Y H:i') }}</td>
                    <td>
                        @if(!$msg->is_read)
                            <span class="badge-success">Baru</span>
                        @else
                            <span style="color: rgba(255,255,255,0.3); font-size: 0.8rem;">Dibaca</span>
                        @endif
                    </td>
                    <td>
                        <div style="display: flex; gap: 8px;">
                            <a href="{{ route('admin.messages.show', $msg) }}" class="btn-outline" style="padding: 6px 12px; font-size: 0.8rem;">
                                <i class="fas fa-eye"></i>
                            </a>
                            <form method="POST" action="{{ route('admin.messages.destroy', $msg) }}" onsubmit="return confirm('Hapus pesan ini?')">
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
                        <i class="fas fa-inbox" style="font-size: 2rem; display: block; margin-bottom: 10px; opacity: 0.3;"></i>
                        Belum ada pesan masuk
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($messages->hasPages())
        <div style="margin-top: 20px;">{{ $messages->links() }}</div>
    @endif
</div>
@endsection