<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->paginate(20);
        return view('dashboard.posts.index')
        ->withPosts($posts);
    }
}
