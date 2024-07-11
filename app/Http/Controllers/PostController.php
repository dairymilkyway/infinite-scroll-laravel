<?php

// app/Http/Controllers/PostController.php
// app/Http/Controllers/PostController.php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function fetchPosts(Request $request)
    {
        if ($request->ajax()) {
            $posts = Post::paginate(10);
            return view('posts.partials.posts', compact('posts'))->render();
        }
    }
}
