@php
    $contact = \App\Models\Contact::first();
@endphp
<header class="header-area">
    <div class="header-top second-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="wellcome-text text-center text-lg-left">
                        <p>Welcome to DOVE LIVAMI PROPERTIES.</p>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="header-cta text-right">
                        <ul>
                            <li>
                                <i class="icon dripicons-phone"></i>
                                <span>{{ $contact->phone }}</span>
                            </li>
                            <li>
                                <i class="icon dripicons-mail"></i>
                                <span>{{ $contact->email }}</span>
                            </li>
                            <li>
                                <i class="icon dripicons-clock"></i>
                                <span>Mon-Fri: 8am - 7pm</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="/"><img src="{{ asset('landing/img/logo/logo.png') }}" width="70" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-9">
                        <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                        <div class="main-menu text-right <text-xl-right></text-xl-right>">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-sub">
                                        <a href="/">Home</a>
{{--                                        <ul>--}}
{{--                                            <li><a href="index.html">Home Page 01</a></li>--}}
{{--                                            <li><a href="index-2.html">Home Page 02</a></li>--}}
{{--                                        </ul>--}}
                                    </li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Projects </a></li>
{{--                                    <li><a href="#">Apartments </a></li>--}}
{{--                                    <li class="has-sub"><a href="#">Other Page</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="pricing.html">Pricing</a></li>--}}
{{--                                            <li><a href="team.html">Team</a></li>--}}
{{--                                            <li><a href="gallery.html">Gallery</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#" class="top-btn">Contact</a></li>
{{--                                    <li><a href="#" class="top-btn">SINGUP</a></li>--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
