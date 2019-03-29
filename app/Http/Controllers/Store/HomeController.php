<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;

class HomeController extends Controller
{
    public function home(){

        $latest_products = Product::where('status', 1)->orderBy('created_at', 'desc')->limit('8')->get();
        $popular_products = Product::orderBy('order_times', 'desc')->limit('4')->get();

        return view('Store/home')->with(compact('latest_products', 'popular_products'));
    }
}
