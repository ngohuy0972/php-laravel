@extends('layouts.app')

@section('manage_product')
<section class="cart-total-page spad">
    <div class="container">
        <div class="col-lg-12">
            <div>
                <button type="button" class="btn btn-success"><a href="{{asset('/product/create')}}">Create new Product</a></button>
                <button type="button" class="btn btn-success"><a href="{{asset('/dashboard')}}">Dashboard</a></button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Stt</th>
                        <th>idSP</th>
                        <th>Name Product</th>
                        <th>So luong</th>
                        <th>Danh muc</th>
                        <th>Hinh anh</th>
                        <th>Gia ban</th>
                        <th>Lua chon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->idSP }}</td>
                        <td>{{ $product->name_product }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->categories }}</td>
                        <td><img src="{{asset('/storage/'.$product -> image)}}" alt="product-image"></td>
                        <td>{{ $product->price }}</td>
                        <td><button type="button" class="btn btn-success"><a href="{{ route('product.edit', $product->id)}}">Edit</a></button>
                             | <button type="button" class="btn btn-danger"><a href="{{ route('product.destroy', $product->id)}}">Delete</a></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection