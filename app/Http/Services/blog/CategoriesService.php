<?php


namespace App\Http\Services\blog;


use App\Models\Category;

class CategoriesService
{

    public function getCategories()
    {
        return Category::all();
    }

}
