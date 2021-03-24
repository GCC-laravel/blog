<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserPostsController extends Controller
{
    public function index(User $user)
    {
        $user->posts;
        //$user->load('posts');

        return view('dashboard.user_posts.index')->withUser($user);
    }
}
