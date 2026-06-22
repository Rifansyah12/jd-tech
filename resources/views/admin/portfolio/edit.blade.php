@extends('admin.layouts.app')
@section('title', 'Edit Portfolio')
@section('page-title', 'Edit Portfolio')

@section('content')

<div class="page-header">
    <h2><i class="fas fa-edit" style="color: #00f2fe; margin-right: 10px;"></i>Edit Portfolio</h2>
    <a href="{{ route('admin.portfolio.index') }}" class="btn-outline">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

@if($errors->any())
    <div class="alert-error">
        <ul style="margin: 0 0 0 15px;">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.portfolio.update', $portfolio) }}" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">
        <div style="display: flex; flex-direction: column; gap: 20px;">
            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-info-circle" style="color: #00f2fe; margin-right: 8px;"></i>Informasi Project
                </h3>
                <div class="form-group">
                    <label class="form-label">Judul Project *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $portfolio->title) }}" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="5">{{ old('description', $portfolio->description) }}</textarea>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div class="form-group">
                        <label class="form-label">Link Demo</label>
                        <input type="url" name="demo_url" class="form-control" value="{{ old('demo_url', $portfolio->demo_url) }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Link GitHub</label>
                        <input type="url" name="github_url" class="form-control" value="{{ old('github_url', $portfolio->github_url) }}">
                    </div>
                </div>
            </div>

            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-users" style="color: #00f2fe; margin-right: 8px;"></i>Anggota Tim
                </h3>
                @if($teamMembers->count() > 0)
                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); gap: 10px;">
                        @foreach($teamMembers as $member)
                        <label style="display: flex; align-items: center; gap: 10px; padding: 12px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.08); border-radius: 10px; cursor: pointer;">
                            <input type="checkbox" name="team_members[]" value="{{ $member->id }}"
                                {{ in_array($member->id, old('team_members', $portfolio->team_members ?? [])) ? 'checked' : '' }}
                                style="accent-color: #00f2fe;">
                            <div>
                                <p style="color: white; font-size: 0.8rem; font-weight: 500;">{{ $member->name }}</p>
                                <p style="color: rgba(255,255,255,0.4); font-size: 0.72rem;">{{ $member->position }}</p>
                            </div>
                        </label>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 20px;">
            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-image" style="color: #00f2fe; margin-right: 8px;"></i>Thumbnail
                </h3>
                @if($portfolio->thumbnail)
                    <img src="{{ Storage::url($portfolio->thumbnail) }}" style="width: 100%; border-radius: 10px; margin-bottom: 12px; max-height: 160px; object-fit: cover;">
                @endif
                <input type="file" name="thumbnail" class="form-control" accept="image/*">
                <p style="color: rgba(255,255,255,0.3); font-size: 0.75rem; margin-top: 6px;">Kosongkan jika tidak ingin mengubah</p>
            </div>

            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-tag" style="color: #00f2fe; margin-right: 8px;"></i>Kategori & Tag
                </h3>
                <div class="form-group">
                    <label class="form-label">Kategori</label>
                    <select name="category" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach(['Web Development','Mobile App','Bot Telegram','UI/UX Design','Data Science','Other'] as $cat)
                            <option value="{{ $cat }}" {{ old('category', $portfolio->category) == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Tags</label>
                    <input type="text" name="tags" class="form-control" value="{{ old('tags', implode(', ', $portfolio->tags ?? [])) }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Status *</label>
                    <select name="status" class="form-control" required>
                        <option value="ongoing" {{ old('status', $portfolio->status) == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                        <option value="completed" {{ old('status', $portfolio->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn-cyan" style="width: 100%; justify-content: center; padding: 14px;">
                <i class="fas fa-save"></i> Update Portfolio
            </button>
        </div>
    </div>
</form>
@endsection