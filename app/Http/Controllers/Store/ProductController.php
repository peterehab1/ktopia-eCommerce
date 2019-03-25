<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function show($key){
        $product = Product::where('key', $key)->first();
        if($product){
            return view('Store/product')->with(compact('product'));
        }else{
            return view('404');
        }
        
    }
}
