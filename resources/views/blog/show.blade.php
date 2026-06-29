@extends('layouts.app')

@section('title', $blogPost->title . ' - Jannah Digital Teknologi')
@section('meta_description', $blogPost->excerpt ?: Str::limit($blogPost->content, 150))
@section('meta_keywords', $blogPost->category ? $blogPost->category . ', blog teknologi, Jannah Digital Teknologi' : 'blog teknologi, Jannah Digital Teknologi')

@section('content')
@php
    $hasHtmlContent = $blogPost->content !== strip_tags($blogPost->content);
@endphp

<article class="blog-detail">
    <header class="blog-detail-header">
        <a href="{{ route('blog.index') }}" class="blog-back"><i class="fas fa-arrow-left"></i> Blog</a>
        <div class="blog-detail-meta">
            <span>{{ $blogPost->category ?? 'Insight' }}</span>
            <span>{{ $blogPost->published_at->format('d M Y') }}</span>
            <span>{{ $blogPost->reading_time }} min read</span>
        </div>
        <h1>{{ $blogPost->title }}</h1>
        @if($blogPost->excerpt)
            <p>{{ $blogPost->excerpt }}</p>
        @endif
    </header>

    <div class="blog-detail-cover" style="{{ $blogPost->cover_image ? 'background-image: url(' . Storage::url($blogPost->cover_image) . ');' : '' }}">
        @if(!$blogPost->cover_image)
            <i class="fas fa-newspaper"></i>
        @endif
    </div>

    <div class="blog-detail-body">
        <div class="blog-content">
            @if($hasHtmlContent)
                {!! $blogPost->content !!}
            @else
                {!! nl2br(e($blogPost->content)) !!}
            @endif
        </div>

        @if(is_array($blogPost->tags) && count($blogPost->tags) > 0)
        <div class="blog-tags">
            @foreach($blogPost->tags as $tag)
                <span>{{ $tag }}</span>
            @endforeach
        </div>
        @endif
    </div>
</article>

@if($relatedBlogs->count() > 0)
<section class="related-blog">
    <div class="related-head">
        <div class="jd-eyebrow"><span class="jd-eyebrow-dot"></span> Related</div>
        <h2>Artikel Terkait</h2>
    </div>
    <div class="related-grid">
        @foreach($relatedBlogs as $blog)
        <a href="{{ route('blog.show', $blog) }}" class="related-card">
            <div class="related-cover" style="{{ $blog->cover_image ? 'background-image: url(' . Storage::url($blog->cover_image) . ');' : '' }}">
                @if(!$blog->cover_image)
                    <i class="fas fa-file-lines"></i>
                @endif
            </div>
            <div>
                <span>{{ $blog->published_at->format('d M Y') }}</span>
                <h3>{{ $blog->title }}</h3>
            </div>
        </a>
        @endforeach
    </div>
</section>
@endif
@endsection

@push('styles')
<style>
    .blog-detail { padding: 76px 5% 80px; background: var(--canvas); }
    .blog-detail-header { max-width: 860px; margin: 0 auto 34px; text-align: center; }
    .blog-back { display: inline-flex; align-items: center; gap: 8px; color: var(--accent); text-decoration: none; font-weight: 700; margin-bottom: 24px; }
    .blog-detail-meta { display: flex; justify-content: center; gap: 12px; flex-wrap: wrap; color: var(--t3); font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 18px; }
    .blog-detail-meta span:first-child { color: var(--accent); }
    .blog-detail-header h1 { font-family: var(--font-d); font-size: clamp(2.05rem, 5vw, 4.1rem); line-height: 1.06; letter-spacing: -1.4px; color: var(--t1); margin-bottom: 18px; overflow-wrap: anywhere; }
    .blog-detail-header p { color: var(--t2); font-size: 1.12rem; line-height: 1.75; max-width: 760px; margin: 0 auto; overflow-wrap: anywhere; }
    .blog-detail-cover { max-width: 1040px; min-height: 380px; margin: 0 auto 48px; border-radius: var(--r-card); border: 1px solid var(--b-subtle); background: linear-gradient(135deg, var(--s2), var(--s3)); background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; color: var(--accent); font-size: 4rem; overflow: hidden; box-shadow: 0 18px 54px rgba(15,23,42,0.08); }
    .blog-detail-body { width: min(100%, 780px); max-width: 780px; margin: 0 auto; overflow: hidden; }
    .blog-content { color: var(--t1); font-size: 1.05rem; line-height: 1.9; max-width: 100%; overflow-wrap: anywhere; word-break: break-word; }
    .blog-content * { max-width: 100%; overflow-wrap: anywhere; word-break: break-word; }
    .blog-content > *:first-child { margin-top: 0; }
    .blog-content > *:last-child { margin-bottom: 0; }
    .blog-content p { margin: 0 0 18px; color: var(--t2); }
    .blog-content h2, .blog-content h3 {
        font-family: var(--font-d);
        color: var(--t1);
        line-height: 1.22;
        letter-spacing: -0.4px;
        margin: 34px 0 14px;
    }
    .blog-content h2 { font-size: clamp(1.55rem, 3vw, 2.05rem); }
    .blog-content h3 { font-size: clamp(1.25rem, 2.4vw, 1.55rem); }
    .blog-content ul, .blog-content ol { margin: 0 0 22px 24px; color: var(--t2); }
    .blog-content li { margin: 7px 0; padding-left: 4px; }
    .blog-content blockquote {
        margin: 28px 0;
        padding: 18px 22px;
        border-left: 4px solid var(--accent);
        background: rgba(99,102,241,0.07);
        border-radius: 12px;
        color: var(--t1);
        font-family: var(--font-d);
        font-size: 1.08rem;
        line-height: 1.7;
    }
    .blog-content a { color: var(--accent); font-weight: 700; text-decoration: none; border-bottom: 1px solid rgba(99,102,241,0.25); }
    .blog-content img { max-width: 100%; border-radius: 12px; margin: 18px 0; }
    .blog-content pre { white-space: pre-wrap; overflow-x: auto; padding: 16px; border-radius: 12px; background: var(--s2); }
    .blog-content table { display: block; width: 100%; overflow-x: auto; border-collapse: collapse; }
    .blog-content strong, .blog-content b { color: var(--t1); }
    .blog-tags { display: flex; gap: 10px; flex-wrap: wrap; margin-top: 40px; padding-top: 28px; border-top: 1px solid var(--b-subtle); }
    .blog-tags span { padding: 8px 12px; border-radius: 999px; background: var(--s2); color: var(--t2); font-size: 0.84rem; font-weight: 700; }
    .related-blog { padding: 72px 5% 100px; background: var(--s1); border-top: 1px solid var(--b-subtle); }
    .related-head { max-width: 1180px; margin: 0 auto 28px; }
    .related-head h2 { font-family: var(--font-d); font-size: 2rem; color: var(--t1); }
    .related-grid { max-width: 1180px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; }
    .related-card { display: grid; grid-template-columns: 110px 1fr; gap: 16px; align-items: center; padding: 16px; border: 1px solid var(--b-subtle); border-radius: var(--r-card); background: #fff; color: inherit; text-decoration: none; transition: all 0.25s ease; }
    .related-card:hover { transform: translateY(-3px); box-shadow: 0 12px 30px rgba(0,0,0,0.07); border-color: var(--b-normal); }
    .related-cover { width: 110px; height: 86px; border-radius: 12px; background: var(--s2); background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; color: var(--accent); }
    .related-card span { color: var(--t3); font-size: 0.78rem; font-weight: 700; }
    .related-card h3 { font-family: var(--font-d); color: var(--t1); font-size: 1rem; line-height: 1.35; margin-top: 6px; }
    @media (max-width: 720px) {
        .blog-detail-cover { min-height: 260px; }
        .related-card { grid-template-columns: 1fr; }
        .related-cover { width: 100%; height: 160px; }
    }
</style>
@endpush
