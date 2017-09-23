<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
<<<<<<< HEAD
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
=======
     public function boot()
     {
         Schema::defaultStringLength(191);
     }
>>>>>>> f08f121a0439f30a6718327d22ab34ef8afbdd17

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
