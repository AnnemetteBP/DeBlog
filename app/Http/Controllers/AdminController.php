<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


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
    //Returns home view
    public function home() {
        return view('admin.home');
    }

    /**
     * Show the admin dashboard.
     *
     * @return array
     */
    public function index()
    {
        $posts = Post::paginate(6);
        return ['posts' => $posts];
    }

    /**
     * @param int $id
     *
     * @return array
     */
    public function read($id)
    {
        $post = Post::findOrFail($id);
        return ['post' => $post];
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.read', ['post' => $post]);
    }

    public function write()
    {
        return view('admin.write');
    }

    /**
     * Creates a post
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function createPost(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|unique:posts|max:255',
            'body' => 'required|string',
            'tags' => 'string|max:255|nullable',
            'rating' => 'integer|nullable'
        ]);
        $post = new Post([
            'title' => $validatedData['title'],
            'body' => $validatedData['body'],
            'tags' => $validatedData['tags'],
            'rating' => $validatedData['rating'],
        ]);
        $post->save();
        return view('admin.read', ['post' => $post]);
    }


    /**
     * Updates the post with id.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return array
     */
    public function updatePost(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|unique:posts|max:255',
            'body' => 'required|string',
            'tags' => 'string|max:255|nullable',
            'rating' => 'integer|nullable'
        ]);
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $validatedData['title'],
            'body' => $validatedData['body'],
            'tags' => $validatedData['tags'],
            'rating' => $validatedData['rating'],
        ]);
        $post->save();
        return view('admin.read', ['post' => $post]);
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function change($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.change', ['post' => $post]);
    }

    /**
     * Deletes the post with id.
     *
     * @param int $id
     * @throws
     *
     * @return \Illuminate\Http\Response
     */
    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        $title = $post->title;
        $post->delete();
        return route('home');
    }
}
