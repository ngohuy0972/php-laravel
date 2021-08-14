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
                            <div class="dropdown-filter">
                                <button onclick="myFunction()" class="dropbtn">Sort By</button>
                                <div id="myDropdown" class="dropdown-item">
                                  <a href="{{asset('/name_sort')}}">Name</a>
                                  <a href="{{asset('/newest_sort')}}">Newest</a>
                                  <a href="{{asset('/price_sort')}}">Price</a>
                                </div>
                              </div>
                        <script>
                            /* When the user clicks on the button,
                            toggle between hiding and showing the dropdown content */
                            function myFunction() {
                            document.getElementById("myDropdown").classList.toggle("show");
                            }

                            // Close the dropdown menu if the user clicks outside of it
                            window.onclick = function(event) {
                            if (!event.target.matches('.dropbtn')) {
                                var dropdowns = document.getElementsByClassName("dropdown-item");
                                var i;
                                for (i = 0; i < dropdowns.length; i++) {
                                var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains('show')) {
                                    openDropdown.classList.remove('show');
                                }
                                }
                            }
                            }
                        </script>
                        </div>
                        <div class="cf-right">
                            <div class="active"> {{ $clothes->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">   
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    @foreach ($clothes as $item)
                        
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('/storage/'.$item->image)}}" alt="">
                                {{-- <div class="p-status sale">sale</div> --}}
                            </figure>
                            <div class="product-text">
                                <a href="{{asset('/product-detail')}}">
                                    <h6>{{ $item->name_product }}</h6>
                                </a>
                                <p>{{ $item-> price }}</p>
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