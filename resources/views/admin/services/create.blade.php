@extends('admin.layouts.app')
@section('title', 'Tambah Layanan')
@section('page-title', 'Tambah Layanan')

@section('content')

<div class="page-header">
    <h2><i class="fas fa-plus" style="color: #00f2fe; margin-right: 10px;"></i>Tambah Layanan</h2>
    <a href="{{ route('admin.services.index') }}" class="btn-outline"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>

<div style="max-width: 650px;">
    <form method="POST" action="{{ route('admin.services.store') }}">
        @csrf
        <div class="card">
            <div class="form-group">
                <label class="form-label">Judul Layanan *</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            <div class="form-group">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Icon <span style="color: rgba(255,255,255,0.4); font-size: 0.78rem;">(Font Awesome class)</span></label>
                <input type="text" name="icon" class="form-control" value="{{ old('icon', 'fas fa-cog') }}" placeholder="fas fa-cog">
                <p style="color: rgba(255,255,255,0.3); font-size: 0.75rem; margin-top: 5px;">Cari icon di <a href="https://fontawesome.com/icons" target="_blank" style="color: #00f2fe;">fontawesome.com</a></p>
            </div>
            <div class="form-group">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_active" value="1" checked style="accent-color: #00f2fe; width: 16px; height: 16px;">
                    <span class="form-label" style="margin: 0;">Aktifkan Layanan</span>
                </label>
            </div>
            <button type="submit" class="btn-cyan" style="width: 100%; justify-content: center; padding: 14px;">
                <i class="fas fa-save"></i> Simpan
            </button>
        </div>
    </form>
</div>
@endsection