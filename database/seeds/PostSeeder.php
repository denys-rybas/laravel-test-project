<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*get array of category ids*/
        $categoryIds = Category::pluck('id')->toArray();
        /*create posts with random category_id // make don't save this to db*/
        $posts = factory(Post::class, 25)->make()->each(function ($post) use ($categoryIds) {
            $randKey = array_rand($categoryIds);
            $post->category_id = $categoryIds[$randKey];
        });
        /*save*/
        Post::insert($posts->toArray());
    }
}
