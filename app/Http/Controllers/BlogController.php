<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $featuredBlog = BlogPost::published()
            ->where('is_featured', true)
            ->latest('published_at')
            ->first();

        $blogs = BlogPost::published()
            ->when($request->search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                        ->orWhere('excerpt', 'like', "%{$search}%")
                        ->orWhere('content', 'like', "%{$search}%");
                });
            })
            ->when($request->category, fn($query, $category) => $query->where('category', $category))
            ->latest('published_at')
            ->paginate(9)
            ->withQueryString();

        $categories = BlogPost::published()
            ->whereNotNull('category')
            ->select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('blog.index', compact('blogs', 'featuredBlog', 'categories'));
    }

    public function show(BlogPost $blogPost)
    {
        abort_unless(
            $blogPost->status === 'published'
            && $blogPost->published_at
            && $blogPost->published_at->lte(now()),
            404
        );

        $relatedBlogs = BlogPost::published()
            ->where('id', '!=', $blogPost->id)
            ->when($blogPost->category, fn($query) => $query->where('category', $blogPost->category))
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('blog.show', compact('blogPost', 'relatedBlogs'));
    }
}
