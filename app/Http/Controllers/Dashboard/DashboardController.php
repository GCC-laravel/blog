<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function getUser($id)
    {
        $user = User::with(['posts'])->find($id);
        return view('dashboard.users.show')
        ->with('user', $user);
    }
}
