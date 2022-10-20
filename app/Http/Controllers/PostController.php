<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use tidy;

class PostController
{
    public function index()
    {
        $posts = Post::get();

        return view('blog', ['posts' => $posts]);
    }

    public function show(Post $id)
    {
        return view('posts.show', ['post' => $id]);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return to_route('posts.index');
    }
}