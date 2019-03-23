<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function show($id){
        $product = Product::find($id);
        return view('Store/product')->with(compact('product'));
    }
}
