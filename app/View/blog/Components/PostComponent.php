<?php

namespace App\View\blog\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class PostComponent extends Component
{
    public $posts;

    /**
     * Create a new component instance.
     *
     * @param $posts
     */
    public function __construct($posts)
    {
        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('blog.components.post');
    }
}
