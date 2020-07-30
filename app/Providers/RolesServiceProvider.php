<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class RolesServiceProvider extends ServiceProvider
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
        Blade::if('role', function ($role) {
            if (auth()->check() && auth()->user()->hasRole($role)) {
                return true;
            }
            return false;
        });

//        Blade::if('endrole', function ($role) {
        /*            return "<?php endif; ?>";*/
//        });
    }
}
