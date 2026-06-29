<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = BlogPost::when($request->search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                        ->orWhere('category', 'like', "%{$search}%")
                        ->orWhere('excerpt', 'like', "%{$search}%");
                });
            })
            ->when($request->status && $request->status !== 'all', fn($query) => $query->where('status', $request->status))
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $data = $this->validatedData($request);

        $data['admin_id'] = Auth::guard('filament')->id();
        $data['slug'] = $this->uniqueSlug($data['slug'] ?? $data['title']);
        $data['tags'] = $this->parseTags($request->tags);
        $data['is_featured'] = $request->boolean('is_featured');
        $data['published_at'] = $this->resolvePublishedAt($data['status'], $data['published_at'] ?? null);

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('blog', 'public');
        }

        BlogPost::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Artikel blog berhasil ditambahkan!');
    }

    public function edit(BlogPost $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, BlogPost $blog)
    {
        $data = $this->validatedData($request);

        $data['slug'] = $this->uniqueSlug($data['slug'] ?? $data['title'], $blog);
        $data['tags'] = $this->parseTags($request->tags);
        $data['is_featured'] = $request->boolean('is_featured');
        $data['published_at'] = $this->resolvePublishedAt($data['status'], $data['published_at'] ?? null);

        if ($request->boolean('remove_cover') && $blog->cover_image) {
            Storage::disk('public')->delete($blog->cover_image);
            $data['cover_image'] = null;
        }

        if ($request->hasFile('cover_image')) {
            if ($blog->cover_image) {
                Storage::disk('public')->delete($blog->cover_image);
            }

            $data['cover_image'] = $request->file('cover_image')->store('blog', 'public');
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Artikel blog berhasil diupdate!');
    }

    public function destroy(BlogPost $blog)
    {
        if ($blog->cover_image) {
            Storage::disk('public')->delete($blog->cover_image);
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Artikel blog berhasil dihapus!');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'cover_image' => 'nullable|image|max:2048',
            'category' => 'nullable|string|max:100',
            'tags' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'is_featured' => 'boolean',
            'published_at' => 'nullable|date',
            'remove_cover' => 'boolean',
        ]);
    }

    private function uniqueSlug(string $value, ?BlogPost $ignore = null): string
    {
        $baseSlug = Str::slug($value) ?: 'artikel';
        $slug = $baseSlug;
        $counter = 2;

        while (
            BlogPost::where('slug', $slug)
                ->when($ignore, fn($query) => $query->whereKey('!=', $ignore->getKey()))
                ->exists()
        ) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    private function parseTags(?string $tags): array
    {
        if (!$tags) {
            return [];
        }

        return array_values(array_filter(array_map('trim', explode(',', $tags))));
    }

    private function resolvePublishedAt(string $status, ?string $publishedAt)
    {
        if ($status === 'draft') {
            return null;
        }

        return $publishedAt ?: now();
    }
}
