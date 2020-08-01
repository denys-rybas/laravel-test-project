<?php

namespace App\Providers;

use App\View\Components\blog\AdminPostComponent;
use App\View\Components\admin\BlogPostComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeComponentsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /* BLOG */
        Blade::component('blog-post', BlogPostComponent::class);
        /* ADMIN */
        Blade::component('admin-post', AdminPostComponent::class);
    }
}
