<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::with('posts')->paginate(20);
        return view('dashboard.users.index')
        ->with('users', $users);
    }
}
