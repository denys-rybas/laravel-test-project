<?php


namespace App\Http\Services;


use App\Models\Category;

class CategoriesService
{

    public function getCategories()
    {
        return Category::all();
    }

}
