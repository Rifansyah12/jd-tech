@php
    $tagsValue = old('tags', $blog && is_array($blog->tags) ? implode(', ', $blog->tags) : '');
    $publishedValue = old('published_at', $blog && $blog->published_at ? $blog->published_at->format('Y-m-d\TH:i') : '');
    $contentValue = old('content', $blog->content ?? '');
@endphp

<style>
    .blog-form-grid { display: grid; grid-template-columns: minmax(0, 2fr) minmax(280px, 1fr); gap: 20px; }
    .editor-shell { border: 1px solid rgba(0,242,254,0.15); border-radius: 12px; overflow: hidden; background: rgba(255,255,255,0.03); }
    .editor-toolbar { display: flex; flex-wrap: wrap; gap: 6px; padding: 10px; border-bottom: 1px solid rgba(0,242,254,0.1); background: rgba(0,0,0,0.18); }
    .editor-btn, .editor-select {
        min-width: 36px;
        height: 34px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        padding: 0 10px;
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 8px;
        color: rgba(255,255,255,0.74);
        cursor: pointer;
        font: inherit;
        font-size: 0.82rem;
        transition: all 0.18s ease;
    }
    .editor-btn:hover, .editor-select:hover { border-color: rgba(0,242,254,0.35); color: #00f2fe; }
    .editor-select { width: 130px; justify-content: flex-start; background: rgba(255,255,255,0.04); }
    .editor-select option { background: #151515; color: #fff; }
    .editor-surface {
        min-height: 390px;
        padding: 18px;
        color: rgba(255,255,255,0.88);
        line-height: 1.8;
        outline: none;
        font-size: 0.95rem;
        overflow-wrap: anywhere;
        word-break: break-word;
    }
    .editor-surface:empty::before {
        content: attr(data-placeholder);
        color: rgba(255,255,255,0.25);
        pointer-events: none;
    }
    .editor-surface h2, .editor-surface h3 { color: #fff; line-height: 1.35; margin: 18px 0 10px; }
    .editor-surface p { margin: 0 0 12px; }
    .editor-surface ul, .editor-surface ol { margin: 10px 0 16px 24px; }
    .editor-surface blockquote { margin: 14px 0; padding: 12px 16px; border-left: 3px solid #00f2fe; background: rgba(0,242,254,0.06); border-radius: 8px; color: rgba(255,255,255,0.78); }
    .editor-surface a { color: #00f2fe; }
    .editor-hint { color: rgba(255,255,255,0.32); font-size: 0.75rem; margin-top: 8px; line-height: 1.5; }
    @media (max-width: 980px) { .blog-form-grid { grid-template-columns: 1fr; } }
</style>

<div class="blog-form-grid">
    <div style="display: flex; flex-direction: column; gap: 20px;">
        <div class="card">
            <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                <i class="fas fa-pen-nib" style="color: #00f2fe; margin-right: 8px;"></i>Konten Artikel
            </h3>

            <div class="form-group">
                <label class="form-label">Judul Artikel <span style="color: #ff6b6b;">*</span></label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title ?? '') }}" placeholder="Judul artikel blog" required>
            </div>

            <div class="form-group">
                <label class="form-label">Slug <span style="color: rgba(255,255,255,0.35); font-size: 0.78rem;">(opsional)</span></label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $blog->slug ?? '') }}" placeholder="otomatis dari judul jika dikosongkan">
            </div>

            <div class="form-group">
                <label class="form-label">Ringkasan</label>
                <textarea name="excerpt" class="form-control" rows="3" maxlength="500" placeholder="Ringkasan singkat untuk kartu blog dan meta description">{{ old('excerpt', $blog->excerpt ?? '') }}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Isi Artikel <span style="color: #ff6b6b;">*</span></label>
                <textarea name="content" id="contentInput" style="display: none;">{{ $contentValue }}</textarea>
                <div class="editor-shell">
                    <div class="editor-toolbar" aria-label="Toolbar editor artikel">
                        <select class="editor-select" onchange="formatBlock(this.value); this.value='';" title="Format teks">
                            <option value="">Format</option>
                            <option value="p">Paragraf</option>
                            <option value="h2">Heading 2</option>
                            <option value="h3">Heading 3</option>
                        </select>
                        <button type="button" class="editor-btn" onclick="editorCommand('bold')" title="Bold"><i class="fas fa-bold"></i></button>
                        <button type="button" class="editor-btn" onclick="editorCommand('italic')" title="Italic"><i class="fas fa-italic"></i></button>
                        <button type="button" class="editor-btn" onclick="editorCommand('underline')" title="Underline"><i class="fas fa-underline"></i></button>
                        <button type="button" class="editor-btn" onclick="editorCommand('insertUnorderedList')" title="Bullet list"><i class="fas fa-list-ul"></i></button>
                        <button type="button" class="editor-btn" onclick="editorCommand('insertOrderedList')" title="Numbered list"><i class="fas fa-list-ol"></i></button>
                        <button type="button" class="editor-btn" onclick="editorCommand('formatBlock', 'blockquote')" title="Quote"><i class="fas fa-quote-left"></i></button>
                        <button type="button" class="editor-btn" onclick="createEditorLink()" title="Tambah link"><i class="fas fa-link"></i></button>
                        <button type="button" class="editor-btn" onclick="editorCommand('removeFormat')" title="Hapus format"><i class="fas fa-eraser"></i></button>
                        <button type="button" class="editor-btn" onclick="editorCommand('undo')" title="Undo"><i class="fas fa-undo"></i></button>
                    </div>
                    <div id="contentEditor" class="editor-surface" contenteditable="true" data-placeholder="Tulis isi artikel di sini...">{!! $contentValue !!}</div>
                </div>
                <p class="editor-hint">Gunakan toolbar untuk heading, bold, list, quote, dan link. Konten akan tampil dengan format yang sama di halaman blog.</p>
            </div>
        </div>
    </div>

    <div style="display: flex; flex-direction: column; gap: 20px;">
        <div class="card">
            <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                <i class="fas fa-image" style="color: #00f2fe; margin-right: 8px;"></i>Cover Artikel
            </h3>

            <div style="border: 2px dashed rgba(0,242,254,0.2); border-radius: 12px; padding: 18px; text-align: center; cursor: pointer; transition: all 0.2s; margin-bottom: 16px;"
                onclick="document.getElementById('coverImage').click()"
                onmouseover="this.style.borderColor='rgba(0,242,254,0.4)'"
                onmouseout="this.style.borderColor='rgba(0,242,254,0.2)'">
                <div id="coverPlaceholder" style="{{ $blog && $blog->cover_image ? 'display:none;' : '' }}">
                    <i class="fas fa-cloud-upload-alt" style="color: rgba(0,242,254,0.4); font-size: 2rem; margin-bottom: 10px;"></i>
                    <p style="color: rgba(255,255,255,0.4); font-size: 0.85rem;">Klik untuk upload cover</p>
                    <p style="color: rgba(255,255,255,0.25); font-size: 0.75rem; margin-top: 5px;">PNG, JPG max 2MB</p>
                </div>
                <img id="coverPreview"
                    src="{{ $blog && $blog->cover_image ? Storage::url($blog->cover_image) : '' }}"
                    style="{{ $blog && $blog->cover_image ? '' : 'display:none;' }} width: 100%; border-radius: 8px; max-height: 210px; object-fit: cover;">
            </div>
            <input type="file" id="coverImage" name="cover_image" accept="image/*" style="display: none;" onchange="previewCover(this)">

            @if($blog && $blog->cover_image)
            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; margin-bottom: 5px;">
                <input type="checkbox" name="remove_cover" value="1" style="accent-color: #00f2fe; width: 16px; height: 16px;">
                <span class="form-label" style="margin: 0;">Hapus cover saat update</span>
            </label>
            @endif
        </div>

        <div class="card">
            <h3 style="color: white; font-size: 0.95rem; font-weight: 600; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(0,242,254,0.08);">
                <i class="fas fa-sliders-h" style="color: #00f2fe; margin-right: 8px;"></i>Pengaturan
            </h3>

            <div class="form-group">
                <label class="form-label">Kategori</label>
                <input type="text" name="category" class="form-control" value="{{ old('category', $blog->category ?? '') }}" placeholder="Contoh: Web Development">
            </div>

            <div class="form-group">
                <label class="form-label">Tags <span style="color: rgba(255,255,255,0.3); font-size: 0.78rem;">(pisah dengan koma)</span></label>
                <input type="text" name="tags" class="form-control" value="{{ $tagsValue }}" placeholder="Laravel, Website, Bisnis">
            </div>

            <div class="form-group">
                <label class="form-label">Status <span style="color: #ff6b6b;">*</span></label>
                <select name="status" class="form-control" required>
                    <option value="draft" {{ old('status', $blog->status ?? 'draft') === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $blog->status ?? '') === 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Waktu Publish</label>
                <input type="datetime-local" name="published_at" class="form-control" value="{{ $publishedValue }}">
                <p style="color: rgba(255,255,255,0.3); font-size: 0.75rem; margin-top: 6px;">Jika status Published dan waktu kosong, sistem memakai waktu sekarang.</p>
            </div>

            <div class="form-group">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $blog->is_featured ?? false) ? 'checked' : '' }} style="accent-color: #00f2fe; width: 16px; height: 16px;">
                    <span class="form-label" style="margin: 0;">Tandai sebagai featured</span>
                </label>
            </div>
        </div>

        <button type="submit" class="btn-cyan" style="width: 100%; justify-content: center; padding: 14px;">
            <i class="fas fa-save"></i> {{ $buttonLabel }}
        </button>
    </div>
</div>

@push('scripts')
<script>
const editor = document.getElementById('contentEditor');
const contentInput = document.getElementById('contentInput');

function syncEditorContent() {
    if (!editor || !contentInput) return;
    contentInput.value = editor.innerHTML.trim();
}

function focusEditor() {
    if (editor) editor.focus();
}

function editorCommand(command, value = null) {
    focusEditor();
    document.execCommand(command, false, value);
    syncEditorContent();
}

function formatBlock(tag) {
    if (!tag) return;
    editorCommand('formatBlock', tag);
}

function createEditorLink() {
    focusEditor();
    const url = prompt('Masukkan URL link');
    if (!url) return;
    document.execCommand('createLink', false, url);
    syncEditorContent();
}

if (editor) {
    editor.addEventListener('input', syncEditorContent);
    editor.addEventListener('blur', syncEditorContent);
    editor.closest('form').addEventListener('submit', function(event) {
        syncEditorContent();
        if (!editor.textContent.trim()) {
            event.preventDefault();
            alert('Isi artikel wajib diisi.');
            editor.focus();
        }
    });
}

function previewCover(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            document.getElementById('coverPlaceholder').style.display = 'none';
            const img = document.getElementById('coverPreview');
            img.src = e.target.result;
            img.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush
