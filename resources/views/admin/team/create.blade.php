@extends('admin.layouts.app')
@section('title', 'Tambah Anggota Tim')
@section('page-title', 'Tambah Anggota Tim')

@section('content')

<div class="page-header">
    <h2><i class="fas fa-user-plus" style="color: #00f2fe; margin-right: 10px;"></i>Tambah Anggota Tim</h2>
    <a href="{{ route('admin.team.index') }}" class="btn-outline"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 900px;">
    <form method="POST" action="{{ route('admin.team.store') }}" enctype="multipart/form-data" style="display: contents;">
        @csrf

        <div style="display: flex; flex-direction: column; gap: 20px;">
            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-user" style="color: #00f2fe; margin-right: 8px;"></i>Data Anggota
                </h3>
                <div class="form-group">
                    <label class="form-label">Nama Lengkap *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Posisi / Jabatan</label>
                    <input type="text" name="position" class="form-control" value="{{ old('position') }}" placeholder="Full Stack Developer">
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Education</label>
                    <input type="text" name="education" class="form-control" value="{{ old('education') }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Bio</label>
                    <textarea name="bio" class="form-control">{{ old('bio') }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Skills</label>
                    <input type="text" name="skills" class="form-control"
                        value="{{ old('skills') }}"
                        placeholder="Laravel, React, Docker">
                </div>
                <div class="form-group">
                    <label class="form-label">Experience</label>
                    <input 
                        type="text" 
                        name="experience" 
                        class="form-control" 
                        value="{{ old('experience') }}"
                        placeholder="5+ Years Experience"
                    >
                </div>
            </div>

            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-link" style="color: #00f2fe; margin-right: 8px;"></i>Social Links
                </h3>
                <div class="form-group">
                    <label class="form-label"><i class="fab fa-github" style="margin-right: 6px;"></i>GitHub URL</label>
                    <input type="url" name="github_url" class="form-control" value="{{ old('github_url') }}" placeholder="https://github.com/...">
                </div>
                <div class="form-group">
                    <label class="form-label"><i class="fab fa-linkedin" style="margin-right: 6px;"></i>LinkedIn URL</label>
                    <input type="url" name="linkedin_url" class="form-control" value="{{ old('linkedin_url') }}" placeholder="https://linkedin.com/in/...">
                </div>
            </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 20px;">
            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-camera" style="color: #00f2fe; margin-right: 8px;"></i>Foto Profil
                </h3>
                <div style="text-align: center; margin-bottom: 15px;">
                    <div id="photoPreviewWrapper" style="width: 100px; height: 100px; border-radius: 50%; margin: 0 auto 12px; overflow: hidden; border: 2px dashed rgba(0,242,254,0.3); background: rgba(0,242,254,0.05); display: flex; align-items: center; justify-content: center; cursor: pointer;" onclick="document.getElementById('photo').click()">
                        <img id="photoPreview" style="display:none; width:100%; height:100%; object-fit:cover;">
                        <i id="photoIcon" class="fas fa-user" style="color: rgba(0,242,254,0.4); font-size: 2rem;"></i>
                    </div>
                    <p style="color: rgba(255,255,255,0.4); font-size: 0.8rem;">Klik untuk upload foto</p>
                </div>
                <input type="file" id="photo" name="photo" accept="image/*" style="display: none;"
                    onchange="previewPhoto(this)">
            </div>

            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-toggle-on" style="color: #00f2fe; margin-right: 8px;"></i>Status
                </h3>
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_active" value="1" checked style="accent-color: #00f2fe; width: 16px; height: 16px;">
                    <span style="color: rgba(255,255,255,0.7); font-size: 0.88rem;">Tampilkan di website</span>
                </label>
            </div>

            <button type="submit" class="btn-cyan" style="width: 100%; justify-content: center; padding: 14px;">
                <i class="fas fa-save"></i> Simpan Anggota
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script>
function previewPhoto(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            document.getElementById('photoIcon').style.display = 'none';
            const img = document.getElementById('photoPreview');
            img.src = e.target.result;
            img.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush
@endsection