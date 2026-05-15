@extends('admin.layouts.app')
@section('title', 'Tambah Portfolio')
@section('page-title', 'Tambah Portfolio')

@section('content')

<div class="page-header">
    <h2><i class="fas fa-plus-circle" style="color: #00f2fe; margin-right: 10px;"></i>Tambah Portfolio</h2>
    <a href="{{ route('admin.portfolio.index') }}" class="btn-outline">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

@if($errors->any())
    <div class="alert-error">
        <i class="fas fa-exclamation-circle"></i>
        <ul style="margin: 5px 0 0 15px;">
            @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.portfolio.store') }}" enctype="multipart/form-data">
    @csrf

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">

        <!-- Kiri -->
        <div style="display: flex; flex-direction: column; gap: 20px;">

            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-info-circle" style="color: #00f2fe; margin-right: 8px;"></i>Informasi Project
                </h3>

                <div class="form-group">
                    <label class="form-label">Judul Project <span style="color: #ff6b6b;">*</span></label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Nama project" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="5" placeholder="Deskripsi lengkap project...">{{ old('description') }}</textarea>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div class="form-group">
                        <label class="form-label">Link Demo</label>
                        <input type="url" name="demo_url" class="form-control" value="{{ old('demo_url') }}" placeholder="https://...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Link GitHub</label>
                        <input type="url" name="github_url" class="form-control" value="{{ old('github_url') }}" placeholder="https://github.com/...">
                    </div>
                </div>
            </div>

            <!-- Anggota Tim -->
            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-users" style="color: #00f2fe; margin-right: 8px;"></i>Anggota Tim
                </h3>
                @if($teamMembers->count() > 0)
                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); gap: 10px;">
                        @foreach($teamMembers as $member)
                        <label style="display: flex; align-items: center; gap: 10px; padding: 12px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.08); border-radius: 10px; cursor: pointer; transition: all 0.2s;"
                            onmouseover="this.style.borderColor='rgba(0,242,254,0.25)'" onmouseout="this.style.borderColor='rgba(0,242,254,0.08)'">
                            <input type="checkbox" name="team_members[]" value="{{ $member->id }}"
                                {{ in_array($member->id, old('team_members', [])) ? 'checked' : '' }}
                                style="accent-color: #00f2fe;">
                            <div>
                                @if($member->photo)
                                    <img src="{{ Storage::url($member->photo) }}" style="width: 30px; height: 30px; border-radius: 50%; object-fit: cover; margin-bottom: 4px;">
                                @else
                                    <div style="width: 30px; height: 30px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 4px;">
                                        <i class="fas fa-user" style="color: #00f2fe; font-size: 12px;"></i>
                                    </div>
                                @endif
                                <p style="color: white; font-size: 0.8rem; font-weight: 500;">{{ $member->name }}</p>
                                <p style="color: rgba(255,255,255,0.4); font-size: 0.72rem;">{{ $member->position }}</p>
                            </div>
                        </label>
                        @endforeach
                    </div>
                @else
                    <p style="color: rgba(255,255,255,0.3); font-size: 0.85rem;">Belum ada anggota tim. <a href="{{ route('admin.team.create') }}" style="color: #00f2fe;">Tambah anggota</a></p>
                @endif
            </div>
        </div>

        <!-- Kanan -->
        <div style="display: flex; flex-direction: column; gap: 20px;">

            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-image" style="color: #00f2fe; margin-right: 8px;"></i>Thumbnail
                </h3>
                <div style="border: 2px dashed rgba(0,242,254,0.2); border-radius: 12px; padding: 25px; text-align: center; cursor: pointer; transition: all 0.2s;"
                    onclick="document.getElementById('thumbnail').click()"
                    onmouseover="this.style.borderColor='rgba(0,242,254,0.4)'" onmouseout="this.style.borderColor='rgba(0,242,254,0.2)'">
                    <div id="thumbnailPreview">
                        <i class="fas fa-cloud-upload-alt" style="color: rgba(0,242,254,0.4); font-size: 2rem; margin-bottom: 10px;"></i>
                        <p style="color: rgba(255,255,255,0.4); font-size: 0.85rem;">Klik untuk upload</p>
                        <p style="color: rgba(255,255,255,0.25); font-size: 0.75rem; margin-top: 5px;">PNG, JPG max 2MB</p>
                    </div>
                    <img id="imgPreview" style="display: none; width: 100%; border-radius: 8px; max-height: 180px; object-fit: cover;">
                </div>
                <input type="file" id="thumbnail" name="thumbnail" accept="image/*" style="display: none;"
                    onchange="previewImage(this)">
            </div>

            <div class="card">
                <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                    <i class="fas fa-tag" style="color: #00f2fe; margin-right: 8px;"></i>Kategori & Tag
                </h3>

                <div class="form-group">
                    <label class="form-label">Kategori</label>
                    <select name="category" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Web Development" {{ old('category') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                        <option value="Mobile App" {{ old('category') == 'Mobile App' ? 'selected' : '' }}>Mobile App</option>
                        <option value="UI/UX Design" {{ old('category') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                        <option value="Data Science" {{ old('category') == 'Data Science' ? 'selected' : '' }}>Data Science</option>
                        <option value="Other" {{ old('category') == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Tags <span style="color: rgba(255,255,255,0.3); font-size: 0.78rem;">(pisah dengan koma)</span></label>
                    <input type="text" name="tags" class="form-control" value="{{ old('tags') }}" placeholder="Laravel, Vue.js, MySQL">
                </div>

                <div class="form-group">
                    <label class="form-label">Status <span style="color: #ff6b6b;">*</span></label>
                    <select name="status" class="form-control" required>
                        <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn-cyan" style="width: 100%; justify-content: center; padding: 14px;">
                <i class="fas fa-save"></i> Simpan Portfolio
            </button>
        </div>
    </div>
</form>

@push('scripts')
<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            document.getElementById('thumbnailPreview').style.display = 'none';
            const img = document.getElementById('imgPreview');
            img.src = e.target.result;
            img.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush

@endsection