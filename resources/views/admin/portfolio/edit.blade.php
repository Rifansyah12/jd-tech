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
                <!-- Demo File dari public/demos -->
                <div class="form-group">
                    <label class="form-label">Demo File (dari public/demos)</label>
                    @php
                    $demoFiles = glob(public_path('demos/*.html')) ?: [];
                    $currentDemoFile = old('demo_file', $portfolio->demo_file);
                    @endphp
                    <select name="demo_file" class="form-control" id="demoFileSelect" onchange="onDemoFileChange(this)">
                        <option value="">— Tidak menggunakan file demo —</option>
                        @foreach($demoFiles as $df)
                        <option value="{{ basename($df) }}" {{ $currentDemoFile == basename($df) ? 'selected' : '' }}>
                            {{ basename($df) }}
                        </option>
                        @endforeach
                    </select>
                    <p style="color: rgba(255,255,255,0.35); font-size: 0.78rem; margin-top: 6px;">
                        Pilih file HTML dari folder <code style="color:#8B8CF8;">public/demos</code> — demo_url otomatis terisi
                    </p>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div class="form-group">
                        <label class="form-label">Link Demo</label>
                        <input type="text" name="demo_url" id="demoUrlInput" class="form-control" value="{{ old('demo_url', $portfolio->demo_url) }}" placeholder="https://... atau otomatis dari file demo">
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
                    <i class="fas fa-image" style="color: #00f2fe; margin-right: 8px;"></i>Tampilan Card
                </h3>
                <p style="color: rgba(255,255,255,0.35); font-size: 0.78rem; margin-bottom: 14px;">
                    <b style="color:#8B8CF8;">Gambar + Gradient:</b> foto tampil proporsional di tengah (cocok untuk screenshot mobile/portrait) &nbsp;|&nbsp;
                    <b style="color:#8B8CF8;">Gambar saja:</b> foto mengisi penuh card &nbsp;|&nbsp;
                    <b style="color:#8B8CF8;">Gradient saja:</b> warna + icon
                </p>

                <!-- Upload Thumbnail -->
                @if($portfolio->thumbnail)
                    <img src="{{ Storage::url($portfolio->thumbnail) }}" style="width: 100%; border-radius: 10px; margin-bottom: 12px; max-height: 160px; object-fit: cover;">
                @endif
                <input type="file" name="thumbnail" class="form-control" accept="image/*" style="margin-bottom: 6px;">
                <p style="color: rgba(255,255,255,0.3); font-size: 0.75rem; margin-bottom: 16px;">Kosongkan jika tidak ingin mengubah</p>

                <!-- Gradient Picker -->
                <p style="color: rgba(255,255,255,0.4); font-size: 0.78rem; margin-bottom: 10px; text-align:center;">— atau pilih gradient —</p>
                @php
                    $gradients = \App\Models\Portfolio::gradients();
                    $currentGrad = old('card_gradient', $portfolio->card_gradient);
                @endphp
                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 8px;">
                    <label style="cursor:pointer; text-align:center;">
                        <input type="radio" name="card_gradient" value="" class="grad-radio" style="display:none;" {{ !$currentGrad ? 'checked' : '' }}>
                        <div class="grad-swatch" style="background:linear-gradient(135deg,#1a1a2e,#16213e); border:2px solid transparent; border-radius: 10px; height: 44px; transition: all 0.2s; display:flex; align-items:center; justify-content:center;">
                            <i class="fas fa-ban" style="color:rgba(255,255,255,0.25); font-size:14px;"></i>
                        </div>
                        <span style="color:rgba(255,255,255,0.35); font-size:0.68rem;">Tidak ada</span>
                    </label>
                    @foreach($gradients as $key => $g)
                    <label style="cursor:pointer; text-align:center;">
                        <input type="radio" name="card_gradient" value="{{ $key }}" class="grad-radio" style="display:none;" {{ $currentGrad == $key ? 'checked' : '' }}>
                        <div class="grad-swatch" style="background:{{ $g['css'] }}; border:2px solid transparent; border-radius: 10px; height: 44px; transition: all 0.2s;"></div>
                        <span style="color:rgba(255,255,255,0.35); font-size:0.68rem;">{{ $g['label'] }}</span>
                    </label>
                    @endforeach
                </div>
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

@push('scripts')
<script>
function initGradientPicker() {
    document.querySelectorAll('.grad-radio').forEach(function(radio) {
        radio.addEventListener('change', function() {
            document.querySelectorAll('.grad-swatch').forEach(function(s) {
                s.style.borderColor = 'transparent';
                s.style.transform = 'scale(1)';
            });
            this.parentElement.querySelector('.grad-swatch').style.borderColor = '#00f2fe';
            this.parentElement.querySelector('.grad-swatch').style.transform = 'scale(1.08)';
        });
        if (radio.checked) {
            radio.parentElement.querySelector('.grad-swatch').style.borderColor = '#00f2fe';
            radio.parentElement.querySelector('.grad-swatch').style.transform = 'scale(1.08)';
        }
    });
}
document.addEventListener('DOMContentLoaded', initGradientPicker);

function onDemoFileChange(select) {
    const urlInput = document.getElementById('demoUrlInput');
    if (select.value) {
        urlInput.value = '/demos/' + select.value;
        urlInput.readOnly = true;
        urlInput.style.opacity = '0.5';
    } else {
        urlInput.readOnly = false;
        urlInput.style.opacity = '1';
        if (urlInput.value.startsWith('/demos/')) urlInput.value = '';
    }
}
document.addEventListener('DOMContentLoaded', function() {
    onDemoFileChange(document.getElementById('demoFileSelect'));
});
</script>
@endpush
@endsection