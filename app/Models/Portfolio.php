<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'thumbnail', 'demo_url', 'github_url',
        'category', 'tags', 'status', 'team_members',
    ];

    protected $casts = [
        'tags' => 'array',
        'team_members' => 'array',
    ];
}