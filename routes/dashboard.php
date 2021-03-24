<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PostsController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\UserPostsController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/users', [UsersController::class, 'index'])->name('dashboard.users.index');
Route::get('/users/{id}', [DashboardController::class, 'getUser'])->name('dashboard.users.show');
Route::get('/posts', [PostsController::class, 'index'])->name('dashboard.posts.index'); 
Route::get('/users/{user}/posts', [UserPostsController::class,'index'])->name('dashboard.users.posts');   