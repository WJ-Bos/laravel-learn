<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller
{

    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:3|confirmed'
        ]);

        $user = User::create($fields);
        Auth::login($user);

        return redirect()->route('posts');
    }


    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended();
        }

        return back()->withErrors([
            'failed' => 'Provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

       $request->session()->invalidate();

       $request->session()->regenerateToken();

       return redirect('/');
    }
}
