<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::whereHas('user', function ($query) {
            $query->where('email', 'admin@admin.com');
        })
        ->where('is_published', true)
        ->orderBy('created_at', 'DESC')
        ->get();

        return view('Blog.Post.index', ['posts' => $posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('Blog.Post.show', ['post' => $post]);
    }
}
