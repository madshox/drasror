<?php

namespace App\Providers;

use App\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
//use Illuminate\View\View;

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
        $services = Service::all();
        View::share('services', $services);
    }
}
