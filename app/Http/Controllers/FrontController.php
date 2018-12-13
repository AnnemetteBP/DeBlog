<?php

namespace App\Http\Controllers;

use App\Models\Post;

class FrontController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function read($id)
    {
        return view('post', ['post' => Post::findOrFail($id)]);
    }

    public function index()
    {
        $posts = Post::paginate(6);
        return ['posts' => $posts];
    }

    public function show($id)
    {
        return ['post' => Post::findOrFail($id)];
    }
}
