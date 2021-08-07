<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FilterController extends Controller
{
    //
    public function sortByName() {
        $products = Product::orderBy('name_product', 'DESC')->paginate(5);
        
        return view('pages.filters.name_product')->with('products', $products);
    }

    public function sortByTime() {
        $products = Product::orderBy('created_at', 'DESC')->paginate(5);
        
        return view('pages.filters.newest')->with('products', $products);
    }

    public function sortByPrice() {
        $products = Product::orderBy('price', 'DESC')->paginate(5);
        
        return view('pages.filters.price')->with('products', $products);
    }

}
