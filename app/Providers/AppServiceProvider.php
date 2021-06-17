<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\manufacturer;
use Illuminate\Support\Facades\Session;

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
        view()->composer('frontend/layout/layout',function($view){
            $manufacturer = manufacturer::all();
            $view->with('manufacturer',$manufacturer);
        });
        view()->composer('frontend/layout/home',function($view){
            $manufacturer = manufacturer::all();
            $view->with('manufacturer',$manufacturer);
        });
        view()->composer('frontend/layout/search',function($view){
            $manufacturer = manufacturer::all();
            $view->with('manufacturer',$manufacturer);
        });
        view()->composer('frontend/layout/cart',function($view){
            $manufacturer = manufacturer::all();
            $view->with('manufacturer',$manufacturer);
        });

    }
}
