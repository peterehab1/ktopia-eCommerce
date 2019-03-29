<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;

class ProductController extends Controller

{

    public function allProducts()
    {
        # code...
        $products = Product::all();
        return view('Dashboard/all_products')->with(compact('products'));
    }

    public function addNewProduct()
    {
        # code...
        return view('Dashboard/add_new_product');
    }

    public function saveNewProduct(Request $request)
    {

        //IMPORTANT
        $destinationPath = public_path('Store/images/products/');
        $key = md5(uniqid(rand(), true) . time());
      
       
        # validated Data...
        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'product_body' => 'required|max:1000',
            'product_image1' => 'required|max:300000|image',
            'product_image2' => 'max:300000|image',
            'product_image3' => 'max:300000|image',
            
        ]);

        $image = $request->file('product_image1');
        $input['product_image1'] = pathinfo($_FILES['product_image1']['name'], PATHINFO_FILENAME).'.'. $key .'-1'.'.'.$image->getClientOriginalExtension();
        $image->move($destinationPath, $input['product_image1']);

        if ($request->file('product_image2') != '') {
            $image2 = $request->file('product_image2');
            $input['product_image2'] = pathinfo($_FILES['product_image2']['name'], PATHINFO_FILENAME).'.'. $key .'-2'.'.'.$image2->getClientOriginalExtension();
            $image2->move($destinationPath, $input['product_image2']);
        }else{
            $input['product_image2'] = null;
        }

        if ($request->file('product_image3') != '') {
            $image3 = $request->file('product_image3');
            $input['product_image3'] = pathinfo($_FILES['product_image3']['name'], PATHINFO_FILENAME).'.'. $key .'-3'.'.'.$image3->getClientOriginalExtension();
            $image3->move($destinationPath, $input['product_image3']);
        }else{
            $input['product_image3'] = null;
        }

        $product = new Product;
        $product->key               = $key;
        $product->name_ar          = $request->product_name;
        $product->body_ar          = $request->product_body;
        $product->gender            =$request->product_gender;  
        $product->price             = $request->product_price;
        $product->category_id       = $request->product_category;
        $product->colors            = $request->product_colors;
        $product->sizes            = $request->product_sizes;
        $product->status            = 1;
        
        $product->pic1 = $input['product_image1'];
        $product->pic2 = $input['product_image2'];
        $product->pic3 = $input['product_image3'];

        $product->save();

        echo "Done";
    }
}
