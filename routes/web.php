<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\users\MyPostsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\users\DashboardController;
use App\Http\Controllers\users\ProfileController;

Route::redirect('/', 'posts')->name('posts');

Route::resource('posts', PostController::class);

Route::middleware('guest')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::view('/register', 'auth.register')->name('register');
    Route::view('/login', 'auth.login')->name('login');
});



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.edit');
    Route::get('/my-posts', [MyPostsController::class, 'index'])->name('myPosts');
});
