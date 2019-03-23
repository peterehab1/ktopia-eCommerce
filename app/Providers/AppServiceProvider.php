<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //To Solve Laravel Bug
        Schema::defaultStringLength(191);

         //To Pass Categories to top bar
         view()->composer('*', function ($view) 
         {
             $categories = Category::orderBy('id', 'desc')->get();
             $view->with(compact('categories'));
             
         });  
    }

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
