@extends('layouts.app')

@section('dashboard')
<section class="cart-total-page spad">
    <div class="container">
        <div class="categories-controls">
            <div class="row">
                <div class="col-lg-12" style="margin-bottom: 70px;
                border-bottom: 2px solid #D0D7DB;">
                    <h3 style="margin-bottom:15px;">Bảng điều khiển</h3>
                </div>
            <div class="container-fluid display-table">
                <div class="row display-table-row">
                    <div class="col-lg-12 display-table-cell v-align box" id="navigation">
                        <div class="tabs">
                            <button class="tablinks active"><a href="{{asset('/')}}"><i class="fa fa-home" aria-hidden="true"></i>Home</a></button>
                            <button class="tablinks"><a href="{{route('product.index')}}"><i class="fa fa-archive" aria-hidden="true"></i>Products</a></button>
                            <button class="tablinks"><a href="{{asset('/dashboard')}}"><i class="fa fa-paste" aria-hidden="true"></i>Posts</a></button>
                            <button class="tablinks"><a href="{{asset('/dashboard')}}"><i class="fa fa-user" aria-hidden="true"></i>Users</a></button>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
