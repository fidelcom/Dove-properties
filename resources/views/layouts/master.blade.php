<!DOCTYPE html>
<html lang="xyz">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/logo5.png') }}">
    <title>OneIX Consult</title>
    <link rel="stylesheet" href="../../../../css2?family=Barlow:ital,wght@0,300;0,400;1,300;1,400&family=Oswald:wght@300;400&display=swap">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/modules/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/modules/YouTubePopUp/YouTubePopUp.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body>
<div class="content-wrapper">
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- Lines -->
    <div class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </div>
    <!-- Menu -->
    @include('frontend.body.header')

    @yield('main')

    <!-- Footer -->
    @include('frontend.body.footer')
</div>
<!-- jQuery -->
<script src="{{ asset('frontend/js/plugins/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/jquery.isotope.v3.0.2.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/scrollIt.min.js') }}"></script>
<script src="{{ asset('frontend/modules/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('frontend/modules/masonry/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/modules/YouTubePopUp/YouTubePopUp.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
</body>
</html>
