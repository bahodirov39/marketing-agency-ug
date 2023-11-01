<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <meta name="description" content="@yield('meta_description')" />
    <meta name="keywords" content="@yield('meta_keywords')" />
    <meta name="robots" content="@yield('meta_robot')" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/uniontitle.png') }}" type="image/x-icon">
    <!-- swipper css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <!-- lightcase css links -->
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <!-- odometer css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- aos.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <!-- nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>



<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="preloader">
    <div class="drawing" id="loading">
        <div class="loading-dot"></div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<div class="cursor"></div>
<div class="cursor-follower"></div>

@yield('header')

@yield('content')

@include('layouts.footer')

@yield('scripts')
<!-- jquery -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- swipper js -->
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<!-- lightcase js-->
<script src="{{ asset('assets/js/lightcase.js') }}"></script>
<!-- odometer js -->
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<!-- viewport js -->
<script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
<!-- aos js file -->
<script src="{{ asset('assets/js/aos.js') }}"></script>
<!-- nice select js -->
<script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
<!-- isotope js -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- tweenMax js -->
<script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
<!-- main -->
<script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>
