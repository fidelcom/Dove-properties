<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DOVE LIVAMI PROPERTIES</title>
    <meta name="description" content="Real Estate Company">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/dripicons.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>
<body>
<!-- header -->
@include('landing.body.header')
<!-- header-end -->
<!-- main-area -->
<main>
    @yield('landing')
</main>
<!-- main-area-end -->
<!-- footer -->
@include('landing.body.footer')
<!-- footer-end -->


<!-- JS here -->
<script src="{{ asset('landing/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('landing/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('landing/js/popper.min.js') }}"></script>
<script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('landing/js/one-page-nav-min.js') }}"></script>
<script src="{{ asset('landing/js/slick.min.js') }}"></script>
<script src="{{ asset('landing/js/ajax-form.js') }}"></script>
<script src="{{ asset('landing/js/paroller.js') }}"></script>
<script src="{{ asset('landing/js/wow.min.js') }}"></script>
<script src="{{ asset('landing/js/js_isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('landing/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('landing/js/parallax.min.js') }}"></script>
<script src="{{ asset('landing/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('landing/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('landing/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('landing/js/parallax-scroll.html') }}"></script>
<script src="{{ asset('landing/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('landing/js/element-in-view.js') }}"></script>
<script src="{{ asset('landing/js/main.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>
</body>

</html>
