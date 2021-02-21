<?php

namespace App\Http\Controllers;


class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
}
