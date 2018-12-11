<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * Creates a post
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function createPost(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|unique:posts|max:255',
            'body' => 'required|string',
            'tags' => 'string|max:255|nullable',
            'rating' => 'integer|nullable'
        ]);
        $post = new Post();
        return view('admin.home');
    }


    /**
     * Updates the post with id.
     *
     * @param Request $request
     * @param int @id
     *
     * @return \Illuminate\Http\Response
     */
    public function updatePost(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|unique:posts|max:255',
            'body' => 'required|string',
            'tags' => 'string|max:255|nullable',
            'rating' => 'integer|nullable'
        ]);

        return view('admin.home');
    }

    /**
     * Deletes the post with id.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function deletePost($id)
    {

        return view('admin.home');
    }
}
