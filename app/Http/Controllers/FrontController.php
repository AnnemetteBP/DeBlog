<?php

namespace App\Http\Controllers;

use App\Models\Post;

class FrontController extends Controller
{
    public function any(){
        return view('public');
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
