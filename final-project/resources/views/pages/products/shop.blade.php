@extends('layouts.app')

@section('all_products')
    <!-- Categories Page Section Begin -->
    {{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{asset('/home_page')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">All Products</li>
        </ol>
    </nav> --}}
<section class="categories-page spad">
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
                            <form action="#">
                                <select class="sort">
                                    <option value="">Sort by</option>
                                    <option value="">Orders</option>
                                    <option value="">Newest</option>
                                    <option value="">Price</option>
                                </select>
                            </form>
                        </div>
                        <div class="cf-right">
                            <span>20 Products</span>
                            <a href="#">2</a>
                            <a href="#" class="active">4</a>
                            <a href="#">6</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">   
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    @foreach ($items as $product)
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('/storage/'.$product -> image)}}" alt="product-image">
                                {{-- <div class="p-status sale">sale</div> --}}
                            </figure>
                            <div class="product-text">
                                <a href="{{asset('/product-detail')}}">
                                    <h6>{{$product -> name_product}}</h6>
                                </a>
                                <p>{{ $product -> price }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="more-product">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#" class="primary-btn">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection