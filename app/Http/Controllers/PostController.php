<?php

namespace App\Http\Controllers;

use App\Http\Services\PostsService;


class PostController extends Controller
{
    public function index(PostsService $postsService)
    {
        $posts = $postsService->getPosts();

        return view('pages.posts', ['posts' => $posts]);
    }
}
