<?php

namespace App\Http\Controllers;

use App\Http\Services\blog\CategoriesService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
}
