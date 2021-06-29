@extends('layouts.app')

@section('shopping_cart')
    <!-- Cart Page Section Begin -->
    {{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{asset('/home_page')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
        </ol>
    </nav> --}}
    <div class="cart-page">
        <div class="container">
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th class="product-h">Sản phẩm</th>
                            <th>Giá bán</th>
                            <th class="quan">Số lượng</th>
                            <th>Tổng thanh toán</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-col">
                                <img src="{{asset('frontend/img/product/product-1.jpg')}}" alt="">
                                <div class="p-title">
                                    <h5>Áo Thun</h5>
                                </div>
                            </td>
                            <td class="price-col">$29</td>
                            <td class="quantity-col">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </td>
                            <td class="total">$29</td>
                            <td class="product-close">x</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart-btn">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="coupon-input">
                            <input type="text" placeholder="Mã giảm giá">
                        </div>
                    </div>
                    <div class="col-lg-10 offset-lg-1 text-left text-lg-right" style="margin-top: -30px; margin-left:15%;">
                        <div class="site-btn clear-btn">Xóa giỏ hàng</div>
                        <div class="site-btn update-btn">Cập nhật giỏ hàng</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shopping-method">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shipping-info">
                            <h5>Phí vân chuyển : 10$</h5>
                        </div>
                        <div class="total-info">
                            <div class="total-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Tổng cộng</th>
                                            <th>Phí vân chuyển</th>
                                            <th class="total-cart">Tổng giỏ hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="total">$29</td>
                                            <td class="shipping">$10</td>
                                            <td class="total-cart-p">$39</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <a href="{{asset('/checkout')}}" class="primary-btn chechout-btn">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page Section End -->
@endsection