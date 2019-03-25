<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;

class HomeController extends Controller
{
    public function home(){

        $products = Product::all();
        return view('Store/home')->with(compact('products'));
    }
}
