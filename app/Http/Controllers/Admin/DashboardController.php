<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Message;
use App\Models\BlogPost;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalPortfolio'  => Portfolio::count(),
            'totalServices'   => Service::count(),
            'totalBlogs'      => BlogPost::count(),
            'totalTeam'       => TeamMember::count(),
            'totalMessages'   => Message::count(),
            'unreadMessages'  => Message::where('is_read', false)->count(),
            'recentMessages'  => Message::latest()->take(5)->get(),
            'recentPortfolio' => Portfolio::latest()->take(5)->get(),
        ]);
    }
}
