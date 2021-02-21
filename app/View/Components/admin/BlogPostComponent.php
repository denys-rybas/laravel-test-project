<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;
use Illuminate\View\View;

class BlogPostComponent extends Component
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
        return view('components.blog.blog-post-component');
    }
}
