<?php

namespace App\Http\Controllers;

use App\Http\Services\blog\CategoriesService;
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
