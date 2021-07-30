@extends('layouts.app')

@section('create_product')
<section class="cart-total-page spad">
    <div class="container">
        <form id="form-create-product" method="POST" action="{{ route('product.index') }}" class="checkout-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <h3>Tạo Sản Phẩm</h3>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Mã sản phẩm</p>
                        </div>
                        <div class="col-lg-10">
                            <input id="idSP" type="text" class="form-control @error('idSP') is-invalid @enderror" name="idSP">
                            <div>
                                @error('idSP')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Tên sản phẩm</p>
                        </div>
                        <div class="col-lg-10">
                            <input id="name_product" type="text" class="form-control @error('name_product') is-invalid @enderror" name="name_product">
                            <div>
                                @error('name_product')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Số lượng</p>
                        </div>
                        <div class="col-lg-10">
                            <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity">
                            <div>
                                @error('quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-lg-2">
                            <p class="in-name">Danh mục</p>
                        </div>
                        <div class="col-lg-10">
                            <select id="categories" class="form-control @error('categories') is-invalid @enderror" name="categories">
                                <option value="clothes">Clothes</option>
                                <option value="shoes">Shoes</option>
                                <option value="accessories">Accessories</option>
                              </select>
                              <div>
                                @error('categories')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-lg-2">
                            <p class="in-name">Hình ảnh</p>
                        </div>
                        <div class="col-lg-10">
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            <div>
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-lg-2">
                            <p class="in-name">Giá bán</p>
                        </div>
                        <div class="col-lg-10">
                            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price">
                            <div>
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            <div class="btn-register-login">
                                <button type="submit">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- <script type="text/javascript">
            $().ready(function(){
                $("#form-create-product").validate({
                    rules: {
                        idSP: {
                            required: true,
                            minlength: 3,
                            maxlength: 20,
                        },
                        name_product: {
                            required: true,
                            minlength: 5,
                            maxlength: 100,
                        },
                        quantity: {
                            required: true,
                            maxlength: 5,
                        },
                        categories: {
                            required: true,
                        },
                        image: {
                            required: true,
                        },
                        price: {
                            required: true,
                            maxlength: 20,
                        },
                    },

                    messages: {
                        idSP: {
                            required: 'Please fill out this field',
                            // 'idSP.unique' => 'This idSP is already exists',
                            minlength: 'This field must be least 3 characters',
                            maxlength: 'This field cannot exceed 20 characters',
                        },
                        name_product: {
                            required: 'Please fill out this field',
                            minlength: 'This field must be least 5 characters',
                            maxlength: 'This field cannot exceed 100 characters',
                        },
                        quantity: {
                            required: 'Please fill out this field',
                            maxlength: 'This field cannot exceed 5 characters',
                        },
                        categories: {
                            required: 'Please fill out this field',
                        },
                        image: {
                            required: 'Please fill out this field',
                        },
                        price: {
                            required: 'Please fill out this field',
                            maxlength: 'This field cannot exceed 20 characters',
                        },
                    },
                    submitHandler: function(form) {
                        // some other code
                        // maybe disabling submit button
                        // then:
                        $(form).submit();
                    }
                });
            });
        </script> --}}
    </div>
</section>
@endsection