<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\admin\PostsService;
use Illuminate\Http\Request;

class PostController extends Controller
{

    protected $postService;

    public function __construct(PostsService $postsService)
    {
        $this->postService = $postsService;
    }

    public function index()
    {
        $posts = $this->postService->getPosts();
        return view('admin.pages.posts', ['posts' => $posts]);
    }
}
