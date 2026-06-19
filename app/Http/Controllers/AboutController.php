<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;

class AboutController extends Controller
{
    public function index()
    {
        $members = TeamMember::where('is_active', true)->get();

        $teamMembers = $members->keyBy('id')->map(function ($m) {
            return [
                'id' => $m->id,
                'initials' => strtoupper(substr($m->name, 0, 2)),
                'name' => $m->name,
                'position' => $m->position,
                'experience' => $m->experience ?? $m->years_experience ?? 'Experience not specified',
                'email' => $m->email,
                'phone' => $m->phone,
                'education' => $m->education,
                'location' => $m->location,
                'bio' => $m->bio,
                'skills' => $m->skills,
                'photo' => $m->photo, // TAMBAHKAN INI
                'linkedin' => $m->linkedin_url,
                'twitter' => $m->twitter_url,
                'github' => $m->github_url,
            ];
        });

        return view('about', compact('members', 'teamMembers'));
    }
}