<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::redirect('/','posts')->name('posts');

Route::resource('posts', PostController::class);

Route::middleware('guest')->group(function(){
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::view('/register', 'auth.register')->name('register');
    Route::view('/login', 'auth.login')->name('login');
});

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'users.dashboard')->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
});

