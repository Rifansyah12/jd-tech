<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $members = TeamMember::latest()->paginate(10);
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
            'photo'        => 'nullable|image|max:2048',
            'email'        => 'nullable|email',
            'github_url'   => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'is_active'    => 'boolean',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('team', 'public');
        }

        $data['is_active'] = $request->boolean('is_active', true);

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
            'email'        => 'nullable|email',
            'github_url'   => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'is_active'    => 'boolean',
        ]);

        if ($request->hasFile('photo')) {
            if ($team->photo) Storage::disk('public')->delete($team->photo);
            $data['photo'] = $request->file('photo')->store('team', 'public');
        }

        $data['is_active'] = $request->boolean('is_active');

        $team->update($data);

        return redirect()->route('admin.team.index')->with('success', 'Anggota tim berhasil diupdate!');
    }

    public function destroy(TeamMember $team)
    {
        if ($team->photo) Storage::disk('public')->delete($team->photo);
        $team->delete();
        return redirect()->route('admin.team.index')->with('success', 'Anggota tim berhasil dihapus!');
    }
}