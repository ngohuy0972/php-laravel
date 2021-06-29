@extends('layouts.app')

@section('checkout')
    <!-- Page Add Section Begin -->
    {{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{asset('/home_page')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Check Out</li>
        </ol>
    </nav> --}}
    <!-- Page Add Section End -->

    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <form action="#" class="checkout-form">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Thông tin của bạn</h3>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Họ Và Tên*</p>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" placeholder="First Name">
                            </div>
                            <div class="col-lg-5">
                                <input type="text" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Địa chỉ*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text">
                                <input type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Thành phố*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Post Code/ZIP*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Số điện thoại*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="order-table">
                            <div class="cart-item">
                                <span>Sản phẩm</span>
                                <p class="product-name">Áo Thun</p>
                            </div>
                            <div class="cart-item">
                                <span>Giá bán</span>
                                <p>$29</p>
                            </div>
                            <div class="cart-item">
                                <span>Số lượng</span>
                                <p>1</p>
                            </div>
                            <div class="cart-item">
                                <span>Phí vận chuyển</span>
                                <p>$10</p>
                            </div>

                            <div class="cart-total">
                                <span>Tổng thanh toán</span>
                                <p>$39</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10">
                        <div class="payment-method">
                            <h3>Phương thức thanh toán</h3>
                            <ul>
                                <li>Paypal <img src="{{asset('frontend/img/paypal.jpg')}}" alt=""></li>
                                <li>Credit / Debit card <img src="{{asset('frontend/img/mastercard.jpg')}}" alt=""></li>
                                <li>
                                    <label for="two">Pay when you get the package</label>
                                    <input type="radio" id="two">
                                </li>
                            </ul>
                            <button type="submit">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Cart Total Page End -->
@endsection