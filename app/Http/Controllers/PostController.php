<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('posts.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $fields = $request->validate([
        'title' => ['required','string'],
        'body' => ['required','max:255'],
            'hashtag' => [
                'nullable',
                'string',
                'max:20',
                'regex:/^[^#].*/'
            ]
       ], [
            'hashtag.regex' => 'The hashtag must not start with a # symbol.'
        ]);

       Auth::user()->posts()->create($fields);
       return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
