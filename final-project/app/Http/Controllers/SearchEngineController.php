<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchEngineController extends Controller
{
    //

    function searchIndex(Request $request){
    
        $data = $request->keyword;
        // echo $data;
        $search_key = Product::where('name_product', 'LIKE', '%'.$data.'%')->take(10)->get();
    
        return view('pages.products.search_product')->with('items', $search_key);

    }


    function searchEngine(Request $request){
        
        // $keyword = $_GET['keyword'];
        $output = '';

        $data = $request->all();
        $search_key = Product::where('name_product', 'LIKE', '%'.$data['keyword'].'%')->take(10)->get();
        $output = '<ul class="dropdown-menu">';
        // var_dump($search_key->isEmpty());
        if(!$search_key->isEmpty()){
            foreach ($search_key as $item ){
                $output .='<li class="item-search-ajax"><a href="#">'.$item->name_product.'</a></li>';
            }
            $output .='</ul>';

            echo $output;
        } else {
            $output .= '<ul class="dropdown-menu">
                            <li>
                                <a>Không tim thấy sản phẩm cần tìm</a>
                            </li>
                        ';
            echo $output;    
        }
    }
}
