<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'experience',
        'photo',
        'email',
        'phone',
        'education',
        'location',
        'bio',
        'skills',
        'github_url',
        'linkedin_url',
        'twitter_url',
        'is_active',
    ];

    protected $casts = [
        'skills' => 'array',
    ];
}