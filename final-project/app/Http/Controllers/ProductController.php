<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductValidateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::paginate(5);

        return view('pages.products.manage_product')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.products.create_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductValidateRequest $request)
    {
        //
        $products = new Product();
        $products->idSP = $request->idSP;
        $products->name_product = $request->name_product;
        $products->quantity = $request->quantity;
        $products->categories = $request->categories;
        // Chay cau lenh php artisan storage:link de tao storage luu tru file.
        $products->image = $request->file('image')->store('/uploads/image', 'public');
        $products->price = $request->price;

        $products->save();

        return redirect()->route('product.index')->with('Them san pham thanh cong');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $products = Product::where('id', '=', $id)->get();
        // var_dump($products);
        return view('pages.products.edit_product', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 

        $products = Product::find($id);
        $image = request('image');

        if ($products->image == null) {
            $imagePath = request('image')->store('/uploads/image', 'public');
            $products->idSP = $request->idSP;
            $products->name_product = $request->name_product;
            $products->quantity = $request->quantity;
            $products->categories = $request->categories;
            $products->image = $imagePath;
            $products->price = $request->price;
        } else {
            if ($image) {
                $detinationPath = '/uploads/image' . $products->image;
                if (file_exists($detinationPath)) {
                    unlink($detinationPath);
                }
                $imagePath = request('image')->store('/uploads/image', 'public');
                $products->idSP = $request->idSP;
                $products->name_product = $request->name_product;
                $products->quantity = $request->quantity;
                $products->categories = $request->categories;
                $products->image = $imagePath;
                $products->price = $request->price;
            } 
            $products->save();
        }
        $products->save();

        return redirect()->route('product.index')->with('update', 'Update Data Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products = Product::find($id);
        // $detinationPath = 'storage/' . $products->image;
        // if (file_exists($detinationPath)) {
        //     unlink($detinationPath);
        // }
        $products->delete();

        return redirect()->route('product.index')->with('delete', 'Delete Data Successfully');
    }
}
