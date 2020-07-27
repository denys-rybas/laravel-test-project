<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoriesService;
use App\Http\Services\PostsService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoriesService;

    public function __construct(CategoriesService $categoriesService)
    {
        $this->middleware('auth');
        $this->categoriesService = $categoriesService;
    }
}
