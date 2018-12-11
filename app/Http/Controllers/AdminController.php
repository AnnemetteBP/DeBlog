<?php

namespace App\Http\Controllers;

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

    }
}
