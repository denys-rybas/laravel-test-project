<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::query()
            ->select('title', 'slug', 'content', 'created_at', 'category_id')
            ->with('category')
            ->paginate(9);

        return view('blog.pages.posts', ['posts' => $posts]);
    }

    public function getPostBySlug(string $slug)
    {
        $post = Post::query()
            ->where('slug', $slug)
            ->first();

        return view('blog.pages.post', ['post' => $post]);

    }
}
