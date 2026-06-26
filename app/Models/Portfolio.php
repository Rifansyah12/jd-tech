<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'thumbnail', 'demo_url', 'demo_file', 'card_gradient',
        'github_url', 'category', 'tags', 'status', 'team_members',
    ];

    public static function gradients(): array {
        return [
            'purple'  => ['label' => 'Purple',   'css' => 'linear-gradient(135deg, #1a0a2e 0%, #200d3e 50%, #0f3460 100%)'],
            'indigo'  => ['label' => 'Indigo',   'css' => 'linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4338ca 100%)'],
            'violet'  => ['label' => 'Violet',   'css' => 'linear-gradient(135deg, #2e1065 0%, #4c1d95 50%, #6d28d9 100%)'],
            'emerald' => ['label' => 'Emerald',  'css' => 'linear-gradient(135deg, #022c22 0%, #064e3b 50%, #065f46 100%)'],
            'rose'    => ['label' => 'Rose',     'css' => 'linear-gradient(135deg, #4c0519 0%, #881337 50%, #be123c 100%)'],
            'sky'     => ['label' => 'Sky',      'css' => 'linear-gradient(135deg, #0c4a6e 0%, #075985 50%, #0369a1 100%)'],
            'amber'   => ['label' => 'Amber',    'css' => 'linear-gradient(135deg, #451a03 0%, #78350f 50%, #92400e 100%)'],
            'slate'   => ['label' => 'Slate',    'css' => 'linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%)'],
        ];
    }

    protected $casts = [
        'tags' => 'array',
        'team_members' => 'array',
    ];
}