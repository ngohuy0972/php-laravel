@extends('layouts.app')

@section('clothes')
    <!-- Categories Page Section Begin -->
    {{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{asset('/home_page')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Clothes</li>
        </ol>
    </nav> --}}
<section class="categories-page spad">
    <div class="container">
        <div class="categories-controls">
            <div class="row">
                <div class="col-lg-12" style="margin-bottom: 70px;
                border-bottom: 2px solid #D0D7DB;">
                    <h3 style="margin-bottom:15px;">Quần áo</h3>
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
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('frontend/img/products/img-2.jpg')}}" alt="">
                                <div class="p-status sale">sale</div>
                            </figure>
                            <div class="product-text">
                                <a href="{{asset('/product-detail')}}">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>$25.90</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('frontend/img/products/img-2.jpg')}}" alt="">
                                <div class="p-status sale">sale</div>
                            </figure>
                            <div class="product-text">
                                <a href="{{asset('/product-detail')}}">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>$25.90</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('frontend/img/products/img-2.jpg')}}" alt="">
                                <div class="p-status sale">sale</div>
                            </figure>
                            <div class="product-text">
                                <a href="{{asset('/product-detail')}}">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>$25.90</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('frontend/img/products/img-2.jpg')}}" alt="">
                                <div class="p-status sale">sale</div>
                            </figure>
                            <div class="product-text">
                                <a href="{{asset('/product-detail')}}">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>$25.90</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('frontend/img/products/img-2.jpg')}}" alt="">
                                <div class="p-status sale">sale</div>
                            </figure>
                            <div class="product-text">
                                <a href="{{asset('/product-detail')}}">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>$25.90</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('frontend/img/products/img-2.jpg')}}" alt="">
                                <div class="p-status sale">sale</div>
                            </figure>
                            <div class="product-text">
                                <a href="{{asset('/product-detail')}}">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>$25.90</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('frontend/img/products/img-2.jpg')}}" alt="">
                                <div class="p-status sale">sale</div>
                            </figure>
                            <div class="product-text">
                                <a href="{{asset('/product-detail')}}">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>$25.90</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('frontend/img/products/img-2.jpg')}}" alt="">
                                <div class="p-status sale">sale</div>
                            </figure>
                            <div class="product-text">
                                <a href="{{asset('/product-detail')}}">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>$25.90</p>
                            </div>
                        </div>
                    </div> 
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