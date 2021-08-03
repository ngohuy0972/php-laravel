@extends('layouts.app')

@section('all_posts')
<section class="cart-total-page spad">
    <div class="container">
        <div class="categories-controls">
            <div class="row">
                <div class="col-lg-12" style="margin-bottom: 70px;
                border-bottom: 2px solid #D0D7DB;">
                    <h3 style="margin-bottom:15px;">Tất cả bài viết</h3>
                </div>
                <div class="col-lg-12">
                    <div class="categories-filter">
                        <div class="cf-left">
                            <form id="form_filter" method="GET">
                                <select class="sort" name="filter">
                                    <option value="">Sort by</option>
                                    <option value="name_sort">Name</option>
                                    <option value="newest_sort">Newest</option>
                                    <option value="price_sort">Price Lowest</option>
                                </select>
                            </form>
                            
                        </div>
                        <div class="cf-right">
                            <div class="active">
                                {{-- <span>{{ $products->links()}}</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="features-section spad">
            <!-- Features Box -->
            <div class="features-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single-box-item first-box">
                                        <img src="http://127.0.0.1:8000/frontend/img/f-box-1.jpg" alt="">
                                        <div class="box-text">
                                            <span class="trend-year">2019 Party</span>
                                            <h2>Jewelry</h2>
                                            <span class="trend-alert">Trend Allert</span>
                                            <div><a href="#" class="primary-btn">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-box-item second-box">
                                        <img src="http://127.0.0.1:8000/frontend/img/f-box-2.jpg" alt="">
                                        <div class="box-text">
                                            <span class="trend-year">2019 Trend</span>
                                            <h2>Footwear</h2>
                                            <span class="trend-alert">Bold &amp; Black</span>
                                            <div><a href="#" class="primary-btn">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-box-item large-box">
                                <img src="http://127.0.0.1:8000/frontend/img/f-box-3.jpg" alt="">
                                <div class="box-text">
                                    <span class="trend-year">2019 Party</span>
                                    <h2>Collection</h2>
                                    <div class="trend-alert">Trend Allert</div>
                                    <div><a href="#" class="primary-btn">See More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection