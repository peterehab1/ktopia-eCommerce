<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;
use App\Category;

class CategoryController extends Controller
{
    public function index($id)
    {
        # code...
        $category = Category::find($id);

        if ($category){

            $category_products = Product::where('category_id', $id)->paginate(12);
            return view('Store/category')->with(compact('category_products', 'category'));

        }else{
            
            return view('404');
            
        }
        
    }
}
