<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use App\ShoppingCart;
use App\ShoppingCartItems;
use Auth;

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
             $shopping_cart = ShoppingCart::where('user_id', Auth::id())->where('status', 0)->first();
             if ($shopping_cart) {
                 $shopping_cart_items = ShoppingCartItems::where('cart_id', $shopping_cart->id)->get();
                 $view->with(compact('categories', 'shopping_cart', 'shopping_cart_items'));
             }else{
                $view->with(compact('categories'));
            }
             
             
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
