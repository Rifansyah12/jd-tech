@extends('admin.layouts.app')
@section('title', 'Edit Layanan')
@section('page-title', 'Edit Layanan')

@section('content')

<div class="page-header">
    <h2><i class="fas fa-edit" style="color: #00f2fe; margin-right: 10px;"></i>Edit Layanan</h2>
    <a href="{{ route('admin.services.index') }}" class="btn-outline"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>

<div style="max-width: 650px;">
    <form method="POST" action="{{ route('admin.services.update', $service) }}">
        @csrf @method('PUT')
        <div class="card">
            <div class="form-group">
                <label class="form-label">Judul Layanan *</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}" required>
            </div>
            <div class="form-group">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description', $service->description) }}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Icon</label>
                <input type="text" name="icon" class="form-control" value="{{ old('icon', $service->icon) }}">
            </div>
            <div class="form-group">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_active" value="1" {{ $service->is_active ? 'checked' : '' }} style="accent-color: #00f2fe; width: 16px; height: 16px;">
                    <span class="form-label" style="margin: 0;">Aktifkan Layanan</span>
                </label>
            </div>
            <button type="submit" class="btn-cyan" style="width: 100%; justify-content: center; padding: 14px;">
                <i class="fas fa-save"></i> Update
            </button>
        </div>
    </form>
</div>
@endsection