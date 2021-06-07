<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function __invoke(): View
    {
        return view('admin.pages.index.index');
    }
}
