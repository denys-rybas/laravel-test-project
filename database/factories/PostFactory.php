<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(5);
    return [
        'title' => $title,
        'slug' => Str::slug($title, '-'),
        'content' => $faker->realText(300),
        /*'category_id' => function() {
            return factory(Category::class)->create()->id;
        },*/
        'is_published' => $faker->boolean(60)
    ];
});
