@extends('admin.layouts.app')
@section('title', 'Detail Pesan')
@section('page-title', 'Detail Pesan')

@section('content')

<div class="page-header">
    <h2><i class="fas fa-envelope-open" style="color: #00f2fe; margin-right: 10px;"></i>Detail Pesan</h2>
    <a href="{{ route('admin.messages.index') }}" class="btn-outline">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div style="max-width: 700px;">
    <div class="card">
        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px; padding-bottom: 20px; border-bottom: 1px solid rgba(0,242,254,0.08);">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; font-weight: 700; color: #0a0a0a;">
                {{ strtoupper(substr($message->name, 0, 1)) }}
            </div>
            <div>
                <h3 style="color: white; font-weight: 600;">{{ $message->name }}</h3>
                <p style="color: #00f2fe; font-size: 0.85rem;">{{ $message->email }}</p>
            </div>
            <div style="margin-left: auto; text-align: right;">
                <p style="color: rgba(255,255,255,0.4); font-size: 0.8rem;">{{ $message->created_at->format('d M Y, H:i') }}</p>
            </div>
        </div>

        @if($message->subject)
        <div style="margin-bottom: 15px;">
            <p style="color: rgba(255,255,255,0.4); font-size: 0.78rem; margin-bottom: 4px;">SUBJECT</p>
            <p style="color: white; font-weight: 500;">{{ $message->subject }}</p>
        </div>
        @endif

        <div>
            <p style="color: rgba(255,255,255,0.4); font-size: 0.78rem; margin-bottom: 8px;">PESAN</p>
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.08); border-radius: 12px; padding: 20px; color: rgba(255,255,255,0.8); line-height: 1.7;">
                {{ $message->message }}
            </div>
        </div>

        <div style="margin-top: 25px; padding-top: 20px; border-top: 1px solid rgba(0,242,254,0.08); display: flex; gap: 10px;">
            <a href="mailto:{{ $message->email }}" class="btn-cyan">
                <i class="fas fa-reply"></i> Balas via Email
            </a>
            <form method="POST" action="{{ route('admin.messages.destroy', $message) }}" onsubmit="return confirm('Hapus pesan ini?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn-danger" style="padding: 10px 18px;">
                    <i class="fas fa-trash"></i> Hapus
                </button>
            </form>
        </div>
    </div>
</div>

@endsection