<?php

namespace App\View\Components\blog;

use Illuminate\View\Component;
use Illuminate\View\View;

class AdminPostComponent extends Component
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
        // return view('components.admin.admin-post-component');

        /**
         * return callback to access the component name, attributes, and slot..
         * just for test now
         *
         * @param array $data
         * @return array|string
         */
        return function (array $data) {
            return view('components.admin.admin-post-component', [
                'posts' => $data['posts'],
            ])->render();
        };

    }
}
