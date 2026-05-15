@extends('admin.layouts.app')
@section('title', 'Edit Anggota Tim')
@section('page-title', 'Edit Anggota Tim')

@section('content')

<div class="page-header">
    <h2><i class="fas fa-user-edit" style="color: #00f2fe; margin-right: 10px;"></i>Edit Anggota Tim</h2>
    <a href="{{ route('admin.team.index') }}" class="btn-outline"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 900px;">
    <form method="POST" action="{{ route('admin.team.update', $team) }}" enctype="multipart/form-data" style="display: contents;">
        @csrf @method('PUT')

        <div style="display: flex; flex-direction: column; gap: 20px;">
            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-user" style="color: #00f2fe; margin-right: 8px;"></i>Data Anggota
                </h3>
                <div class="form-group">
                    <label class="form-label">Nama Lengkap *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $team->name) }}" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Posisi / Jabatan</label>
                    <input type="text" name="position" class="form-control" value="{{ old('position', $team->position) }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $team->email) }}">
                </div>
            </div>
            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-link" style="color: #00f2fe; margin-right: 8px;"></i>Social Links
                </h3>
                <div class="form-group">
                    <label class="form-label"><i class="fab fa-github" style="margin-right: 6px;"></i>GitHub URL</label>
                    <input type="url" name="github_url" class="form-control" value="{{ old('github_url', $team->github_url) }}">
                </div>
                <div class="form-group">
                    <label class="form-label"><i class="fab fa-linkedin" style="margin-right: 6px;"></i>LinkedIn URL</label>
                    <input type="url" name="linkedin_url" class="form-control" value="{{ old('linkedin_url', $team->linkedin_url) }}">
                </div>
            </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 20px;">
            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-camera" style="color: #00f2fe; margin-right: 8px;"></i>Foto Profil
                </h3>
                @if($team->photo)
                    <img src="{{ Storage::url($team->photo) }}" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 12px; display: block; border: 2px solid rgba(0,242,254,0.3);">
                @endif
                <input type="file" name="photo" class="form-control" accept="image/*">
                <p style="color: rgba(255,255,255,0.3); font-size: 0.75rem; margin-top: 6px;">Kosongkan jika tidak ingin mengubah</p>
            </div>

            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-toggle-on" style="color: #00f2fe; margin-right: 8px;"></i>Status
                </h3>
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_active" value="1" {{ $team->is_active ? 'checked' : '' }} style="accent-color: #00f2fe; width: 16px; height: 16px;">
                    <span style="color: rgba(255,255,255,0.7); font-size: 0.88rem;">Tampilkan di website</span>
                </label>
            </div>

            <button type="submit" class="btn-cyan" style="width: 100%; justify-content: center; padding: 14px;">
                <i class="fas fa-save"></i> Update Anggota
            </button>
        </div>
    </form>
</div>
@endsection