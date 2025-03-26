<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $posts = Auth::user()->posts()->paginate(2);
        return view('users.dashboard',['posts' => $posts]);
    }
}
