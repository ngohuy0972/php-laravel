<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FilterController extends Controller
{
    //

    public function allProduct(Request $request) {
  
        $data = $request->all();
        var_dump($data);
        
        if($data['id'] > 0){
          $products = Product::where('id', '>', $data['id'])
                            ->orderBy('id', 'ASC')
                            ->take(8)
                            ->get();
  echo ('all product => dung');
        } else {
          $products = Product::orderBy('id', 'ASC')
                            ->take(8)
                            ->get();
  echo ('all product => sai');

        }
  
        $output = '';
        if(!$products->isEmpty()){
          foreach($products as $item){
            $last_id = $item->id;
            $output .= '<div class="col-lg-3 col-md-3">
                          <div class="single-product-item">
                              <figure>
                                  <img src="/storage/'.$item->image.'" alt="product-image">
                              </figure>
                              <div class="product-text">
                                  <a href="'.route('product-detail.show', $item->id).'">
                                      <h6>' .$item->name_product. '</h6>
                                  </a>
                                  <p>'.$item->price.'</p>
                              </div>
                          </div>
                        </div>' ;
          }
        
            $output .= '<div class="more-product">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <button class="primary-btn" name="load_more_product" id="load_more_product" data-id="'.$last_id.'">Xem thêm</button>
                                </div>
                            </div>
                        </div>';
        } else {
  
         $output .= '<div class="more-product">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 text-center">
                                <button class="primary-btn" name="load_more_product">Đã tải xong sản phẩm</button>
                            </div>
                        </div>
                    </div>';
        }
        echo $output;

       }
    
       public function sortByName(Request $request){
        $data = $request->all();
        var_dump($data);

        if($data['name_product'] > 0){
            $products = Product::where('name_product', '<', $data['name_product'])
                              ->orderBy('name_product', 'DESC')
                              ->take(8)
                              ->get();
  echo ('name => dung');

          } else {
            $products = Product::orderBy('name_product', 'DESC')
                              ->take(8)
                              ->get();
  echo ('name => sai');

          }
  
          $output = '';
          if(!$products->isEmpty()){
              foreach($products as $item){
                  $last_name = $item->name_product;
                  $output .= '<div class="col-lg-3 col-md-3">
                              <div class="single-product-item">
                                  <figure>
                                      <img src="/storage/'.$item->image.'" alt="product-image">
                                  </figure>
                                  <div class="product-text">
                                      <a href="'.route('product-detail.show', $item->id).'">
                                          <h6>' .$item->name_product. '</h6>
                                      </a>
                                      <p>'.$item->price.'</p>
                                  </div>
                              </div>
                              </div>' ;
              }
              
                  $output .= '<div class="more-product">
                                  <div class="row">
                                      <div class="col-lg-12 col-md-12 text-center">
                                          <button class="primary-btn" name="load_more_product" id="load_more_product" data-id="'.$last_name.'">Xem thêm</button>
                                      </div>
                                  </div>
                              </div>';
              } else {
  
              $output .= '<div class="more-product">
                              <div class="row">
                                  <div class="col-lg-12 col-md-12 text-center">
                                      <button class="primary-btn" name="load_more_product">Đã tải xong sản phẩm</button>
                                  </div>
                              </div>
                          </div>';
          }
        //   var_dump($last_time);
        //   exit();
          echo $output;
    }

    public function sortByTime(Request $request){
        $data = $request->all();
        var_dump($data);

        if($data['created_at'] > 0){
            $products = Product::where('created_at', '<', $data['created_at'])
                              ->orderBy('created_at', 'DESC')
                              ->take(8)
                              ->get();
  echo ('time => dung');

          } else {
            $products = Product::orderBy('created_at', 'DESC')
                              ->take(8)
                              ->get();
  echo ('time => sai');

          }
          var_dump($data);
  
          $output = '';
          if(!$products->isEmpty()){
              foreach($products as $item){
                  $last_time = $item->created_at;
                  $output .= '<div class="col-lg-3 col-md-3">
                              <div class="single-product-item">
                                  <figure>
                                      <img src="/storage/'.$item->image.'" alt="product-image">
                                  </figure>
                                  <div class="product-text">
                                      <a href="'.route('product-detail.show', $item->id).'">
                                          <h6>' .$item->name_product. '</h6>
                                      </a>
                                      <p>'.$item->price.'</p>
                                  </div>
                              </div>
                              </div>' ;
              }
              
                  $output .= '<div class="more-product">
                                  <div class="row">
                                      <div class="col-lg-12 col-md-12 text-center">
                                          <button class="primary-btn" name="load_more_product" id="load_more_product" data-id="'.$last_time.'">Xem thêm</button>
                                      </div>
                                  </div>
                              </div>';
              } else {
  
              $output .= '<div class="more-product">
                              <div class="row">
                                  <div class="col-lg-12 col-md-12 text-center">
                                      <button class="primary-btn" name="load_more_product">Đã tải xong sản phẩm</button>
                                  </div>
                              </div>
                          </div>';
          }
        //   var_dump($last_time);
        //   exit();
          echo $output;
    }

    public function sortByPrice(Request $request){
        $data = $request->all();
        var_dump($data);

        if($data['price'] > 0){
            $products = Product::where('price', '<', $data['price'])
                              ->orderBy('price', 'DESC')
                              ->take(8)
                              ->get();
                              echo('price => dung');
    
          } else {
            $products = Product::orderBy('price', 'DESC')
                              ->take(8)
                              ->get();
                              echo('price => sai');
          }
  
          $output = '';
          if(!$products->isEmpty()){
              foreach($products as $item){
                  $last_price = $item->price;
                  $output .= '<div class="col-lg-3 col-md-3">
                              <div class="single-product-item">
                                  <figure>
                                      <img src="/storage/'.$item->image.'" alt="product-image">
                                  </figure>
                                  <div class="product-text">
                                      <a href="'.route('product-detail.show', $item->id).'">
                                          <h6>' .$item->name_product. '</h6>
                                      </a>
                                      <p>'.$item->price.'</p>
                                  </div>
                              </div>
                              </div>' ;
              }
              
                  $output .= '<div class="more-product">
                                  <div class="row">
                                      <div class="col-lg-12 col-md-12 text-center">
                                          <button class="primary-btn" name="load_more_product" id="load_more_product" data-id="'.$last_price.'">Xem thêm</button>
                                      </div>
                                  </div>
                              </div>';
              } else {
  
              $output .= '<div class="more-product">
                              <div class="row">
                                  <div class="col-lg-12 col-md-12 text-center">
                                      <button class="primary-btn" name="load_more_product">Đã tải xong sản phẩm</button>
                                  </div>
                              </div>
                          </div>';
          }
        //   var_dump($last_price);
        //   exit();
          echo $output;
    }
}