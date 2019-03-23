<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function addNewProduct()
    {
        # code...
        return view('Dashboard/add_new_product');
    }

    public function saveNewProduct(Request $request)
    {
        # code...
        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'product_body' => 'required|max:1000',
            
        ]);
    }
}
