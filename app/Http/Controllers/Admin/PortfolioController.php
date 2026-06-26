<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $portfolios = Portfolio::when($request->search, fn($q) => $q->where('title', 'like', "%{$request->search}%"))
            ->latest()->paginate(10)->withQueryString();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        $teamMembers = TeamMember::where('is_active', true)->get();
        return view('admin.portfolio.create', compact('teamMembers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'nullable|string',
            'thumbnail'    => 'nullable|image|max:2048',
            'demo_file'     => 'nullable|string',
            'demo_url'      => 'nullable|string',
            'card_gradient' => 'nullable|string|in:' . implode(',', array_keys(\App\Models\Portfolio::gradients())),
            'github_url'    => 'nullable|url',
            'category'      => 'nullable|string',
            'tags'          => 'nullable|string',
            'status'        => 'required|in:ongoing,completed',
            'team_members'  => 'nullable|array',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('portfolio', 'public');
        }

        if (!empty($data['demo_file'])) {
            $data['demo_url'] = '/demos/' . $data['demo_file'];
        }

        $data['tags'] = $request->tags ? array_map('trim', explode(',', $request->tags)) : [];

        Portfolio::create($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio berhasil ditambahkan!');
    }

    public function edit(Portfolio $portfolio)
    {
        $teamMembers = TeamMember::where('is_active', true)->get();
        return view('admin.portfolio.edit', compact('portfolio', 'teamMembers'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'nullable|string',
            'thumbnail'    => 'nullable|image|max:2048',
            'demo_file'     => 'nullable|string',
            'demo_url'      => 'nullable|string',
            'card_gradient' => 'nullable|string|in:' . implode(',', array_keys(\App\Models\Portfolio::gradients())),
            'github_url'    => 'nullable|url',
            'category'      => 'nullable|string',
            'tags'          => 'nullable|string',
            'status'        => 'required|in:ongoing,completed',
            'team_members'  => 'nullable|array',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($portfolio->thumbnail) Storage::disk('public')->delete($portfolio->thumbnail);
            $data['thumbnail'] = $request->file('thumbnail')->store('portfolio', 'public');
        }

        if (!empty($data['demo_file'])) {
            $data['demo_url'] = '/demos/' . $data['demo_file'];
        } elseif (array_key_exists('demo_file', $data)) {
            $data['demo_file'] = null;
        }

        $data['tags'] = $request->tags ? array_map('trim', explode(',', $request->tags)) : [];

        $portfolio->update($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio berhasil diupdate!');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->thumbnail) Storage::disk('public')->delete($portfolio->thumbnail);
        $portfolio->delete();
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio berhasil dihapus!');
    }
}