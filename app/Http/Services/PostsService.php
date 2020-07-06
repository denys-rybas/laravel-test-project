<?php


namespace App\Http\Services;


use App\Models\Post;

class PostsService
{
    public function getPosts()
    {
       return Post::all();
    }

}
