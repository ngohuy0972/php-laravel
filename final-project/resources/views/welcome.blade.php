<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
            rel="stylesheet">

        <!-- Css Styles : Uu tien se o phia duoi--> 
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" type="text/css">
        {{-- <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}" type="text/css"> --}}
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" type="text/css">
    </head>
    <body>

        @include('pages.home_page')
        

        <!-- Js Plugins -->
        <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        {{-- <script src="{{asset('frontend/js/jquery.slicknav.js')}}"></script> --}}
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
        <script src="{{asset('frontend/js/main.js')}}"></script>
    </body>
</html>
