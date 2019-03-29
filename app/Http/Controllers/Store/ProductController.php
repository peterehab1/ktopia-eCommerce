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
            $similar_products = Product::where('category_id', $product->category_id)->limit(4)->get();
            return view('Store/product')->with(compact('product', 'similar_products'));
        }else{
            return view('404');
        }
        
    }
}
