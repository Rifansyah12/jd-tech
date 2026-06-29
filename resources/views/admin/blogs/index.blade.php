@extends('admin.layouts.app')
@section('title', 'Blog')
@section('page-title', 'Blog')

@section('content')

@if(session('success'))
    <div class="alert-success"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
@endif

<div class="page-header">
    <h2><i class="fas fa-newspaper" style="color: #00f2fe; margin-right: 10px;"></i>Manajemen Blog</h2>
    <a href="{{ route('admin.blogs.create') }}" class="btn-cyan">
        <i class="fas fa-plus"></i> Tambah Artikel
    </a>
</div>

<form method="GET" action="{{ route('admin.blogs.index') }}" style="margin-bottom: 16px; display: flex; gap: 10px; flex-wrap: wrap;">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari judul, kategori, atau ringkasan..." style="flex: 1; min-width: 240px; max-width: 420px; background: rgba(255,255,255,0.04); border: 1px solid rgba(0,242,254,0.15); border-radius: 10px; padding: 10px 16px; color: #fff; font-size: 0.9rem;">
    <select name="status" class="form-control" style="width: 160px; padding: 10px 14px;">
        <option value="all" {{ request('status', 'all') === 'all' ? 'selected' : '' }}>Semua Status</option>
        <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
        <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
    </select>
    <button type="submit" class="btn-outline" style="padding: 10px 18px;"><i class="fas fa-search"></i></button>
    @if(request('search') || request('status'))
    <a href="{{ route('admin.blogs.index') }}" class="btn-outline" style="padding: 10px 18px;"><i class="fas fa-times"></i></a>
    @endif
</form>

<div class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cover</th>
                    <th>Artikel</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Publish</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $blog)
                <tr>
                    <td style="color: rgba(255,255,255,0.3);">{{ $loop->iteration }}</td>
                    <td>
                        @if($blog->cover_image)
                            <img src="{{ Storage::url($blog->cover_image) }}" alt="{{ $blog->title }}" style="width: 58px; height: 42px; object-fit: cover; border-radius: 8px;">
                        @else
                            <div style="width: 58px; height: 42px; background: rgba(0,242,254,0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-image" style="color: rgba(255,255,255,0.22);"></i>
                            </div>
                        @endif
                    </td>
                    <td>
                        <p style="font-weight: 600; color: white;">{{ $blog->title }}</p>
                        <p style="font-size: 0.75rem; color: rgba(255,255,255,0.35);">{{ Str::limit($blog->excerpt ?: $blog->content, 70) }}</p>
                    </td>
                    <td><span style="color: rgba(255,255,255,0.55);">{{ $blog->category ?? '-' }}</span></td>
                    <td>
                        @if($blog->status === 'published')
                            <span class="badge-success">Published</span>
                        @else
                            <span class="badge-warning">Draft</span>
                        @endif
                        @if($blog->is_featured)
                            <span class="badge-success" style="margin-left: 6px;">Featured</span>
                        @endif
                    </td>
                    <td style="color: rgba(255,255,255,0.5);">
                        {{ $blog->published_at ? $blog->published_at->format('d M Y H:i') : '-' }}
                    </td>
                    <td>
                        <div style="display: flex; gap: 8px;">
                            @if($blog->status === 'published' && $blog->published_at && $blog->published_at->lte(now()))
                                <a href="{{ route('blog.show', $blog) }}" target="_blank" class="btn-outline" style="padding: 6px 12px; font-size: 0.8rem;">
                                    <i class="fas fa-eye"></i>
                                </a>
                            @endif
                            <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn-outline" style="padding: 6px 12px; font-size: 0.8rem;">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form method="POST" action="{{ route('admin.blogs.destroy', $blog) }}" onsubmit="return confirm('Hapus artikel blog ini?')">
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
                        <i class="fas fa-newspaper" style="font-size: 2rem; margin-bottom: 10px; display: block; opacity: 0.3;"></i>
                        Belum ada artikel blog
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($blogs->hasPages())
        <div style="margin-top: 20px; display: flex; justify-content: center;">
            {{ $blogs->links() }}
        </div>
    @endif
</div>

@endsection
