<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" action="{{route('search_result')}}" method="GET" autocomplete="off">
            <input type="text" id="keyword" name="keyword" placeholder="Search here...">
            <div id="search_ajax">
            </div>
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="{{asset('/')}}"><img src="{{asset('frontend/img/logo.png')}}" alt=""></a>
            </div>
            <div class="header-right">
                <img src="{{asset('frontend/img/icons/search.png')}}" alt="" class="search-trigger">
                {{-- <a href="{{asset('/register')}}" style="margin-right: 15px;">
                    <img src="{{asset('frontend/img/icons/man.png')}}" alt="">
                </a> --}}
                <div class="dropdown">
                    <img class="dropbtn" src="{{asset('frontend/img/icons/man.png')}}" alt="">
                    <div class="dropdown-content">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Đăng ký</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>
        
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>
        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>
                <a href="{{ route('shopping-cart') }}">
                    <img src="{{asset('frontend/img/icons/bag.png')}}" alt="">
                    <span>2</span>
                </a>
            </div>
            {{-- <div class="user-access">
                <a href="{{asset('/register')}}">Register</a>
                <a href="{{asset('/login')}}" class="in">Log in</a>
            </div> --}}
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a class="active" href="{{asset('/')}}">Trang chủ</a></li>
                    <li><a href="{{route('shop.index')}}">Cửa hàng</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('clothes.index')}}">Quần áo</a></li>
                            <li><a href="{{route('shoes.index')}}">Giày dép</a></li>
                            <li><a href="{{route('accessories.index')}}">Phụ kiện</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('post.index')}}">Bài viết</a></li>
                    <li><a href="{{route('about-us.index')}}">Về chúng tôi</a></li>
                    <li><a href="{{route('contact.index')}}">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#keyword').keyup(function() {
        var keyword = $(this).val();
        // console.log(keyword);
        if(keyword != ''){
          $.ajax({
            url : "{{ route('search') }}",
            method : "GET",

            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data : {keyword:keyword},
            success : function (data) {
                $('#search_ajax').fadeIn();
                $('#search_ajax').html(data);
            }
          })
        } else {
            $('#search_ajax').fadeOut();
        }

        $(document).on('click', '.item-search-ajax', function(){
            $('#keyword').val($(this).text());
            $('#search_ajax').fadeOut();
        });
    });
</script>
<!-- Header Info Begin -->
{{-- <div class="header-info">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="header-item">
                    <img src="{{asset('frontend/img/icons/delivery.png')}}" alt="">
                    <p>Free shipping on orders over $30 in USA</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-lg-center">
                <div class="header-item">
                    <img src="{{asset('frontend/img/icons/voucher.png')}}" alt="">
                    <p>20% Student Discount</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-xl-right">
                <div class="header-item">
                <img src="{{asset('frontend/img/icons/sales.png')}}" alt="">
                <p>30% off on dresses. Use code: 30OFF</p>
            </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Header Info End -->
<!-- Header End -->