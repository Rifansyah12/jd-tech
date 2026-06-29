@extends('layouts.app')

@section('title', 'Blog - Jannah Digital Teknologi')
@section('meta_description', 'Artikel dan insight dari Jannah Digital Teknologi seputar website, aplikasi, otomasi, dan strategi digital untuk bisnis.')
@section('meta_keywords', 'blog teknologi, artikel website, tips aplikasi, strategi digital, Jannah Digital Teknologi')

@section('content')
<section class="blog-hero">
    <div class="blog-hero-inner">
        <div class="jd-eyebrow"><span class="jd-eyebrow-dot"></span> Insights</div>
        <h1>Blog & Insight Digital</h1>
        <p>Catatan praktis tentang website, aplikasi, automasi, dan cara membangun produk digital yang lebih siap dipakai bisnis.</p>

        <form method="GET" action="{{ route('blog.index') }}" class="blog-filter">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari artikel...">
            <select name="category">
                <option value="">Semua kategori</option>
                @foreach($categories as $category)
                    <option value="{{ $category }}" {{ request('category') === $category ? 'selected' : '' }}>{{ $category }}</option>
                @endforeach
            </select>
            <button type="submit"><i class="fas fa-search"></i> Cari</button>
            @if(request('search') || request('category'))
                <a href="{{ route('blog.index') }}">Reset</a>
            @endif
        </form>
    </div>
</section>

@if($featuredBlog && !request('search') && !request('category'))
@php
    $featuredExcerpt = $featuredBlog->excerpt ?: Str::limit(strip_tags($featuredBlog->content), 180);
@endphp
<section class="blog-featured-wrap">
    <a href="{{ route('blog.show', $featuredBlog) }}" class="blog-featured">
        <div class="blog-featured-cover" style="{{ $featuredBlog->cover_image ? 'background-image: url(' . Storage::url($featuredBlog->cover_image) . ');' : '' }}">
            @if(!$featuredBlog->cover_image)
                <i class="fas fa-newspaper"></i>
            @endif
        </div>
        <div class="blog-featured-copy">
            <span class="blog-label">Featured Article</span>
            <h2>{{ $featuredBlog->title }}</h2>
            <p>{{ $featuredExcerpt }}</p>
            <div class="blog-meta">
                <span><i class="far fa-calendar"></i> {{ $featuredBlog->published_at->format('d M Y') }}</span>
                <span><i class="far fa-clock"></i> {{ $featuredBlog->reading_time }} min read</span>
            </div>
        </div>
    </a>
</section>
@endif

<section class="blog-list-section">
    <div class="blog-grid">
        @forelse($blogs as $blog)
        @php
            $excerpt = $blog->excerpt ?: Str::limit(strip_tags($blog->content), 130);
        @endphp
        <a href="{{ route('blog.show', $blog) }}" class="blog-card">
            <div class="blog-card-cover" style="{{ $blog->cover_image ? 'background-image: url(' . Storage::url($blog->cover_image) . ');' : '' }}">
                @if(!$blog->cover_image)
                    <i class="fas fa-file-lines"></i>
                @endif
            </div>
            <div class="blog-card-body">
                <div class="blog-card-top">
                    <span>{{ $blog->category ?? 'Insight' }}</span>
                    <span>{{ $blog->reading_time }} min</span>
                </div>
                <h2>{{ $blog->title }}</h2>
                <p>{{ $excerpt }}</p>
                <div class="blog-card-foot">
                    <span>{{ $blog->published_at->format('d M Y') }}</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </a>
        @empty
        <div class="blog-empty">
            <i class="fas fa-newspaper"></i>
            <h2>Belum ada artikel</h2>
            <p>Artikel blog akan tampil di sini setelah admin mem-publish konten.</p>
        </div>
        @endforelse
    </div>

    @if($blogs->hasPages())
        <div class="blog-pagination">
            {{ $blogs->links() }}
        </div>
    @endif
</section>
@endsection

@push('styles')
<style>
    .blog-hero { padding: 72px 5% 48px; background: linear-gradient(180deg, #fff 0%, var(--s1) 100%); border-bottom: 1px solid var(--b-subtle); }
    .blog-hero-inner { max-width: 960px; margin: 0 auto; text-align: center; }
    .blog-hero h1 { font-family: var(--font-d); font-size: clamp(2.15rem, 5vw, 4rem); line-height: 1.04; letter-spacing: -1.5px; margin-bottom: 16px; color: var(--t1); }
    .blog-hero p { max-width: 720px; margin: 0 auto 30px; color: var(--t2); line-height: 1.75; font-size: 1.05rem; }
    .blog-filter { display: grid; grid-template-columns: minmax(0, 1fr) 190px auto auto; gap: 10px; max-width: 840px; margin: 0 auto; padding: 10px; background: #fff; border: 1px solid var(--b-subtle); border-radius: 16px; box-shadow: 0 14px 42px rgba(15,23,42,0.08); }
    .blog-filter input, .blog-filter select { width: 100%; border: 1px solid var(--b-subtle); border-radius: 10px; padding: 12px 14px; font: inherit; color: var(--t1); background: var(--s1); }
    .blog-filter button, .blog-filter a { border: none; border-radius: 10px; padding: 12px 18px; display: inline-flex; align-items: center; justify-content: center; gap: 8px; font-weight: 700; text-decoration: none; cursor: pointer; white-space: nowrap; }
    .blog-filter button { background: var(--t1); color: #fff; }
    .blog-filter a { color: var(--accent); background: rgba(99,102,241,0.08); }
    .blog-featured-wrap { padding: 44px 5% 0; background: var(--canvas); }
    .blog-featured { max-width: 1120px; margin: 0 auto; display: grid; grid-template-columns: 1.08fr 0.92fr; min-height: 340px; overflow: hidden; border: 1px solid var(--b-subtle); border-radius: var(--r-card); text-decoration: none; color: inherit; background: #fff; box-shadow: 0 18px 54px rgba(15,23,42,0.09); }
    .blog-featured-cover { background: var(--s2); background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; color: var(--accent); font-size: 4rem; min-height: 320px; }
    .blog-featured-copy { padding: clamp(28px, 4vw, 44px); display: flex; flex-direction: column; justify-content: center; }
    .blog-label { width: fit-content; padding: 6px 12px; border-radius: 999px; background: rgba(99,102,241,0.08); color: var(--accent); font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px; }
    .blog-featured h2 { font-family: var(--font-d); font-size: clamp(1.65rem, 3vw, 2.55rem); line-height: 1.12; letter-spacing: -0.8px; color: var(--t1); margin-bottom: 16px; }
    .blog-featured p { color: var(--t2); line-height: 1.75; margin-bottom: 22px; }
    .blog-meta { display: flex; gap: 16px; flex-wrap: wrap; color: var(--t3); font-size: 0.88rem; }
    .blog-list-section { padding: 52px 5% 96px; background: var(--canvas); }
    .blog-grid { max-width: 1120px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 22px; align-items: stretch; }
    .blog-card { min-height: 100%; overflow: hidden; border: 1px solid var(--b-subtle); border-radius: var(--r-card); background: #fff; color: inherit; text-decoration: none; transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease; display: flex; flex-direction: column; }
    .blog-card:hover { transform: translateY(-4px); border-color: var(--b-normal); box-shadow: 0 14px 34px rgba(15,23,42,0.09); }
    .blog-card-cover { aspect-ratio: 16 / 9; min-height: 178px; background: linear-gradient(135deg, var(--s2), var(--s3)); background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; color: var(--accent); font-size: 2.4rem; }
    .blog-card-body { padding: 22px; display: flex; flex-direction: column; flex: 1; }
    .blog-card-top, .blog-card-foot { display: flex; justify-content: space-between; gap: 14px; align-items: center; color: var(--t3); font-size: 0.78rem; font-weight: 700; }
    .blog-card-top span:first-child { color: var(--accent); text-transform: uppercase; letter-spacing: 0.8px; }
    .blog-card h2 { font-family: var(--font-d); color: var(--t1); font-size: 1.18rem; line-height: 1.28; margin: 14px 0 10px; overflow-wrap: anywhere; }
    .blog-card p { color: var(--t2); line-height: 1.65; font-size: 0.92rem; margin-bottom: 20px; overflow-wrap: anywhere; }
    .blog-card-foot { margin-top: auto; padding-top: 4px; }
    .blog-card-foot i { color: var(--accent); }
    .blog-empty { grid-column: 1 / -1; text-align: center; padding: 80px 20px; color: var(--t2); }
    .blog-empty i { display: block; font-size: 3rem; color: var(--accent); opacity: 0.35; margin-bottom: 18px; }
    .blog-empty h2 { color: var(--t1); font-family: var(--font-d); margin-bottom: 8px; }
    .blog-pagination { max-width: 1180px; margin: 36px auto 0; display: flex; justify-content: center; }
    @media (max-width: 860px) {
        .blog-filter { grid-template-columns: 1fr; }
        .blog-featured { grid-template-columns: 1fr; }
        .blog-featured-copy { padding: 28px; }
    }
</style>
@endpush
