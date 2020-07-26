<?php

namespace App\Http\Controllers;

use App\Http\Services\PostsService;
use App\Models\Post;


class PostController extends Controller
{
    protected $postsService;

    public function __construct(PostsService $postsService)
    {
        $this->postsService = $postsService;
    }

    public function index()
    {
        $posts = $this->postsService->getPosts();

        return view('pages.posts', ['posts' => $posts]);
    }

    public function getPostBySlug(string $slug)
    {
        if (!$slug) {
            return abort(404);
        }

        $post = $this->postsService->getPostBySlug($slug);

        if (!$post) {
            return abort(404);
        }

        return view('pages.post', ['post' => $post]);

    }
}
