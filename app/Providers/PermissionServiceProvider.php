<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
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
        try {
            Permission::get()->map(function ($permission) {
                Gate::define($permission->slug, function ($user) use($permission) {
                    return $user->hasPermissionTo($permission);
                });
            });
        } catch (\Exception $exception) {
            report($exception);
            return;
        }
    }
}