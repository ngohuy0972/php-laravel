@extends('layouts.app')

@section('edit_product')
<section class="cart-total-page spad">
    <div class="container">
        @foreach ($products as $old_value)
        <form method="POST" action="{{ route('product.update',$old_value->id) }}" class="checkout-form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-12">
                    <h3>Chỉnh Sửa Sản Phẩm</h3>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Mã sản phẩm</p>
                        </div>
                        <div class="col-lg-10">
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
                            {{-- <input type="text" class="form-control" id="categories" value="{{$old_value->categories}}"> --}}
                            <select id="categories" name="categories"> 
                                <option value="clothes" {{$old_value->categories == "clothes" ? 'selected' : ''}}>clothes</option>
                                <option value="shoes" {{$old_value->categories == "shoes" ? 'selected' : ''}}>shoes</option>
                                <option value="accessories" {{$old_value->categories == "accessories" ? 'selected' : ''}}>accessories</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-lg-2">
                            <p class="in-name">Hình ảnh</p>
                        </div>
                        <div class="col-lg-10">
                            <input id="image" type="file" class="form-control" name="image">
                            <img src="{{asset('/storage/'.$old_value -> image)}}" alt="product-image">
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
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            <div class="btn-register-login">
                                <button type="submit" onclick="return confirm('Update?')">Update</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </form>
    </div>
</section>
@endsection