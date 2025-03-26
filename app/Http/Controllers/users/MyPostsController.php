<?php

namespace App\Http\Controllers\users;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPostsController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->posts()->paginate(12);
        return view('users.mine',['posts' => $posts]);
    }
}
