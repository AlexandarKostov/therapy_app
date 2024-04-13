<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $postCount = (new \App\Models\Blog)->countPostsLast24Hours();

        return view('dashboard.index', [
            'users' => User::all(),
            'blogs' => Blog::all(),
            'postCount' => $postCount,
        ]);
    }
}
