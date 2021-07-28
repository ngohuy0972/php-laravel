@extends('layouts.app')

@section('shoes')
    <!-- Categories Page Section Begin -->
    {{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{asset('/home_page')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shoes</li>
        </ol>
    </nav> --}}
<section class="categories-page spad">
    <div class="container">
        <div class="categories-controls">
            <div class="row">
                <div class="col-lg-12" style="margin-bottom: 70px;
                border-bottom: 2px solid #D0D7DB;">
                    <h3 style="margin-bottom:15px;">Giày dép</h3>
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
                            <div class="active"> {{ $shoes->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">   
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    @foreach ($shoes as $item)
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('frontend/img/products/img-2.jpg')}}" alt="">
                            </figure>
                            <div class="product-text">
                                <a href="{{asset('/storage/'.$item->image)}}">
                                    <h6>{{ $item->name_product}}</h6>
                                </a>
                                <p>{{ $item->price }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- <div class="more-product">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#" class="primary-btn">Xem thêm</a>
                </div>
            </div>
        </div> --}}
    </div>
</section>
@endsection