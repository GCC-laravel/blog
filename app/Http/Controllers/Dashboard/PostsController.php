<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\UpdatePostRequest;

class PostsController extends Controller
{
    public function index()
    {
        session(['mysession' => 'myvalue']);
        session()->put('newsession', 'newvalue');
        //session()->forget('newsession');
        //session()->invalidate();
        //dd(session('newsession'));
        $posts = Post::with('user')->paginate(20);
        return view('dashboard.posts.index')
        ->withPosts($posts);
    }

    public function edit(Post $post)
    {
        return view('dashboard.posts.edit')
        ->withPost($post);
    }

    public function update(Post $post, UpdatePostRequest $request)
    {
        $imageName = $post->image;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $request->validate([
                'image' => 'required|mimes:png,jpg'
            ]);

            $imageName = $image->hashName();
            $request->file('image')->move('images/', $imageName);
        }
    
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imageName
        ]);

        return redirect()
        ->back()
        ->with('message','Updated Successfully!');
    }
}
