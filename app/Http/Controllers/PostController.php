<?php

namespace App\Http\Controllers;

use App\Http\Services\PostsService;
use App\Models\Post;
use function GuzzleHttp\Psr7\str;

class PostController extends Controller
{
    public function getAll(PostsService $postsService)
    {
        $posts = $postsService->getPosts();

        return view('pages.posts', ['posts' => $posts]);
    }
}
