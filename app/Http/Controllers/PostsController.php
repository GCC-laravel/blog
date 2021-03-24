<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($post_id = null)
    {
        return $post_id;
        return 'Hi from index';
    }
}
