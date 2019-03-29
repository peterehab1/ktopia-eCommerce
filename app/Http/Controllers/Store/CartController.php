<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\ShoppingCart;
use App\ShoppingCartItems;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Check if the user already have un-ordered shopping cart
        $shopping_cart = ShoppingCart::where('user_id', Auth::id())->where('status', 0)->first();
        
        //If there is one , we will add the selected items to it;
        if ($shopping_cart) {

           $shopping_cart_items = new ShoppingCartItems;
           $shopping_cart_items->cart_id = $shopping_cart->id;
           $shopping_cart_items->product_id = $request->product_id;
           $shopping_cart_items->product_color = $request->product_color;
           $shopping_cart_items->product_size = $request->product_size;
           $shopping_cart_items->product_quantity = $request->product_quantity;
           $shopping_cart_items->total_price = $request->product_quantity * $request->product_price;
           $shopping_cart_items->save();
           echo "Done added new items";
        }
        
        //If not then create one and add products to it
        else{
            $new_shopping_cart = new ShoppingCart;
            $new_shopping_cart->user_id = Auth::id();
            $new_shopping_cart->save();

            $last_added_shopping_cart_id = $new_shopping_cart->id;

            $shopping_cart_items = new ShoppingCartItems;
            $shopping_cart_items->cart_id = $last_added_shopping_cart_id;
            $shopping_cart_items->product_id = $request->product_id;
            $shopping_cart_items->product_color = $request->product_color;
            $shopping_cart_items->product_size = $request->product_size;
            $shopping_cart_items->product_quantity = $request->product_quantity;
            $shopping_cart_items->total_price = $request->product_quantity * $request->product_price;
            $shopping_cart_items->save();
            echo "Done added new cart and items";

        }
    }
}
