@extends('layouts.app')

@section('manage_product')
<section class="cart-total-page spad">
    <div class="container">
        <div class="categories-controls">
            <div class="row">
                <div class="col-lg-12" style="margin-bottom: 70px;
                border-bottom: 2px solid #D0D7DB;">
                    <h3 style="margin-bottom:15px;">Tất cả sản phẩm</h3>
                </div>
                <div class="col-lg-12">
                    <div class="categories-filter">
                        <div class="cf-left">
                            <div class="dropdown-filter">
                                <button onclick="myFunction()" class="dropbtn">Sort By</button>
                                <div id="myDropdown" class="dropdown-item">
                                  <a href="{{asset('/name_sort')}}">Name</a>
                                  <a href="{{asset('/newest_sort')}}">Newest</a>
                                  <a href="{{asset('/price_sort')}}">Price</a>
                                </div>
                              </div>
                        </div>
                        <div class="cf-right">
                            <div class="active">
                                <span>{{ $products->links()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                             | <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash"></i>Delete
                                </button>
                            </form>   
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection