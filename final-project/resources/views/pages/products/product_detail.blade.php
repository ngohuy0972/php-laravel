@extends('layouts.app')

@section('product_detail')
    <!-- Page Add Section Begin -->
    {{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{asset('/home_page')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
        </ol>
    </nav> --}}
    {{-- <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Detail<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Detail</a>
                        <a class="active" href="#">Name Product</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Page Add Section End -->

    <!-- Product Page Section Beign -->
    <section class="product-page">
        <div class="container">
            <div class="col-lg-12" style="margin-bottom: 70px;
            border-bottom: 2px solid #D0D7DB;">
                <h3 style="margin-bottom:15px;">Chi tiết sản phẩm</h3>
            </div>
            {{-- <div class="product-control">
                <a href="#">Previous</a>
                <a href="#">Next</a>
            </div> --}}
            @foreach ($items as $item)
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-slider owl-carousel">
                        <div class="product-img">
                            <figure>
                                <img src="{{asset('/storage/'.$item->image)}}" alt="">
                                <div class="p-status">new</div>
                            </figure>
                        </div>
                        <div class="product-img">
                            <figure>
                                <img src="{{asset('/storage/'.$item->image)}}" alt="">
                                <div class="p-status">new</div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="product-content">
                        <h2>{{ $item->name_product }}</h2>
                        <div class="pc-meta">
                            <h5>{{ $item->price }}</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <p>Day la chi tiet mau cua san pham.</p>
                        <ul class="tags">
                            <li><span>Category :</span> {{ $item->categories}}</li>
                            <li><span>Tags :</span> man, shirt, dotted, elegant, cool</li>
                        </ul>
                        <form action="{{ route('add_to_cart') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" id="product_id" name="product_id" value="{{ $item->id }}">
                            <div class="product-quantity">
                                <div class="pro-qty">
                                    <input type="text" id="pro_qty" name="pro_qty" value="1">
                                </div>
                            </div>
                            <input type="submit" class="primary-btn pc-btn" value="Add to cart"/>
                        </form>
                        <ul class="p-info">
                            <li>Product Information</li>
                            <li>Reviews</li>
                            <li>Product Care</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Product Page Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="product-slider owl-carousel">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product-item">
                            <figure>
                                <a href="#"><img src="{{asset('frontend/img/products/img-1.jpg')}}" alt=""></a>
                                <div class="p-status">new</div>
                            </figure>
                            <div class="product-text">
                                <h6>Green Dress with details</h6>
                                <p>$22.90</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product-item">
                            <figure>
                                <a href="#"><img src="{{asset('frontend/img/products/img-2.jpg')}}" alt=""></a>
                                <div class="p-status sale">sale</div>
                            </figure>
                            <div class="product-text">
                                <h6>Yellow Maxi Dress</h6>
                                <p>$25.90</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product-item">
                            <figure>
                                <a href="#"><img src="{{asset('frontend/img/products/img-3.jpg')}}" alt=""></a>
                                <div class="p-status">new</div>
                            </figure>
                            <div class="product-text">
                                <h6>One piece bodysuit</h6>
                                <p>$19.90</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product-item">
                            <figure>
                                <a href="#"><img src="{{asset('frontend/img/products/img-4.jpg')}}" alt=""></a>
                                <div class="p-status popular">popular</div>
                            </figure>
                            <div class="product-text">
                                <h6>Blue Dress with details</h6>
                                <p>$35.50</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
@endsection