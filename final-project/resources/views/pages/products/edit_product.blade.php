@extends('layouts.app')

@section('edit_product')
<section class="cart-total-page spad">
    <div class="container">
        
        <form method="GET" action="{{ route('product.index') }}" class="checkout-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <h3>Tạo Sản Phẩm</h3>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    @foreach ($products as $old_value)
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Mã sản phẩm</p>
                        </div>
                        <div class="col-lg-10">   
                            {{-- @foreach ($products as $old_value)                       --}}
                            <input id="idSP" type="text" class="form-control" name="idSP" value="{{ $old_value->idSP }}" >
                            @error('idSP')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            {{-- @endforeach --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Tên sản phẩm</p>
                        </div>
                        <div class="col-lg-10">
                            <input id="name_product" type="text" class="form-control" name="name_product" value="{{ $old_value->name_product }}">
                            @error('name_product')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Số lượng</p>
                        </div>
                        <div class="col-lg-10">
                            <input id="quantity" type="text" class="form-control" name="quantity" value="{{ $old_value->quantity }}">
                            @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-lg-2">
                            <p class="in-name">Danh mục</p>
                        </div>
                        <div class="col-lg-10">
                            <select id="categories" name="categories">
                                <option value="clothes">Clothes</option>
                                <option value="shoes">Shoes</option>
                                <option value="accessories">Accessories</option>
                              </select>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-lg-2">
                            <p class="in-name">Hình ảnh</p>
                        </div>
                        <div class="col-lg-10">
                            <input id="image" type="file" class="form-control" name="image" value="{{ $old_value->image }}">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-lg-2">
                            <p class="in-name">Giá bán</p>
                        </div>
                        <div class="col-lg-10">
                            <input id="price" type="text" class="form-control" name="price" value="{{ $old_value->price }}">
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            <div class="btn-register-login">
                                <button type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection