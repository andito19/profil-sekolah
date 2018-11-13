<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
    public function boot()
<<<<<<< HEAD
    {
        Schema::defaultStringLength(191);
    }
=======
{
    Schema::defaultStringLength(191);
}
>>>>>>> 554259824d9798e4b4e94ec6d5c4d8f316fba79c

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
