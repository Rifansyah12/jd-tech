<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index(Request $request)
        {
            $members = TeamMember::when($request->search, fn($q) => $q->where('name', 'like', "%{$request->search}%")->orWhere('position', 'like', "%{$request->search}%"))
                ->latest()->paginate(10)->withQueryString();
            return view('admin.team.index', compact('members'));
        }

    public function create()
        {
            return view('admin.team.create');
        }

    public function store(Request $request)
        {
            $data = $request->validate([
                'name'         => 'required|string|max:255',
                'position'     => 'nullable|string|max:255',
                'experience'   => 'nullable|string|max:255',
                'photo'        => 'nullable|image|max:2048',
                'email'        => 'nullable|email',
                'github_url'   => 'nullable|url',
                'linkedin_url' => 'nullable|url',
                'twitter_url'  => 'nullable|url',
                'phone'        => 'nullable|string|max:30',
                'education'    => 'nullable|string|max:255',
                'location'     => 'nullable|string|max:255',
                'bio'          => 'nullable|string',
                'skills'       => 'nullable|string', 
                'is_active'    => 'boolean',
            ]);

            if ($request->hasFile('photo')) {
                $data['photo'] = $request->file('photo')->store('team', 'public');
            }

            $data['is_active'] = $request->boolean('is_active', true);
            $data['skills'] = $this->parseSkills($request->skills);

            TeamMember::create($data);

            return redirect()->route('admin.team.index')->with('success', 'Anggota tim berhasil ditambahkan!');
        }

    public function edit(TeamMember $team)
        {
            return view('admin.team.edit', compact('team'));
        }

    public function update(Request $request, TeamMember $team)
        {
            $data = $request->validate([
                'name'         => 'required|string|max:255',
                'position'     => 'nullable|string|max:255',
                'photo'        => 'nullable|image|max:2048',
                'experience'   => 'nullable|string|max:255',
                'email'        => 'nullable|email',
                'github_url'   => 'nullable|url',
                'linkedin_url' => 'nullable|url',
                'twitter_url'  => 'nullable|url',
                'phone'        => 'nullable|string|max:30',
                'education'    => 'nullable|string|max:255',
                'location'     => 'nullable|string|max:255',
                'bio'          => 'nullable|string',
                'skills'       => 'nullable|string',
                'is_active'    => 'boolean',
            ]);

            if ($request->hasFile('photo')) {
                if ($team->photo) Storage::disk('public')->delete($team->photo);
                $data['photo'] = $request->file('photo')->store('team', 'public');
            }

            $data['is_active'] = $request->boolean('is_active', $team->is_active);

            $data['skills'] = $this->parseSkills($request->skills);

            $team->update($data);

            return redirect()->route('admin.team.index')->with('success', 'Anggota tim berhasil diupdate!');
        }

    public function destroy(TeamMember $team)
        {
            if ($team->photo) Storage::disk('public')->delete($team->photo);
            $team->delete();
            return redirect()->route('admin.team.index')->with('success', 'Anggota tim berhasil dihapus!');
        }

    private function parseSkills($skills)
        {
            return $skills
                ? array_map('trim', explode(',', $skills))
                : null;
        }
}