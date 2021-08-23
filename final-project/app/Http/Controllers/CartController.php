<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
session_start();

class CartController extends Controller
{
    //
    public function index(){

        // $product_data = Product::where('id', '=', $product_id)->get();
        // return view('pages.cart.shopping_cart');
    }

    public function addToCart(Request $request) {
        $pro_qty = $request->pro_qty;
        $product_id = $request->product_id;

        $product_data = Product::where('id', '=', $product_id)->get();
    
        return view('pages.cart.shopping_cart')->with('product_data', $product_data)
                                                ->with('product_quatity', $pro_qty);
    }
}
