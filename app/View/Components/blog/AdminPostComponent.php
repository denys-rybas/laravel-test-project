<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\View\Component;
use Throwable;

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
     * @return Closure
     */
    public function render(): Closure
    {
        // return view('components.admin.admin-post-component');

        /**
         * return callback to access the component name, attributes, and slot..
         * just for test now
         *
         * @param array $data
         *
         * @return array|string
         * @throws Throwable
         */
        return static function (array $data) {
            return view('components.admin.admin-post-component', [
                'posts' => $data['posts'],
            ])->render();
        };
    }
}
