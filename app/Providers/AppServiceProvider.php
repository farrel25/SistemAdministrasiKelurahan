<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // make the asset() can run on both http or https
        // asset() generate http
        // secure_asset() generate https

        // if (env('APP_ENV') != 'local') {
        //     // take scheme as a parameter
        //     URL::forceScheme('https');
        // }
    }
}
