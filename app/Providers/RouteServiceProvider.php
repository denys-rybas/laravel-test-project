<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/';
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapAuthRoutes();

        $this->mapFrontRoutes();

        $this->mapAdminRoutes();

        $this->mapWebRoutes();

    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    /**
     * Auth routes with correct namespace. ( Auth::routes() )
     *
     * @return void
     */
    protected function mapAuthRoutes(): void
    {
        Route::middleware(['web'])
            ->namespace($this->namespace)
            ->group(base_path('routes/auth.php'));
    }

    /**
     * Define the "front" routes for the application.
     *
     * @return void
     */
    protected function mapFrontRoutes(): void
    {
        Route::middleware(['web'])
            ->domain(config('app.front_domain'))
            ->namespace($this->namespace)
            ->group(base_path('routes/front.php'));
    }

    /**\
     * Define the "admin" routes for the application.
     *
     * @return void
     */
    protected function mapAdminRoutes(): void
    {
        Route::middleware(['web'])
            ->domain(config('app.admin_domain'))
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }
}
