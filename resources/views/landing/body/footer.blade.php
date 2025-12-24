@php
    $contact = \App\Models\Contact::first();
@endphp
<footer class="footer-bg footer-p pt-100 pb-80 ">

    <div class="footer-top pb-30">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="logo mb-35">
                            <a href="#"><img src="{{ asset('landing/img/logo/logo.png') }}" width="70" alt="logo"></a>
                        </div>
                        <div class="footer-text mb-20">
                            <p>Dove Livami Properties Ltd (RC NO: 1817742) is a distinguished real estate
                                and investment company in Nigeria. We specialize in developing 21st-century
                                luxury homes.</p>
                        </div>
                        <div class="footer-social">
                            <span>Follow Us</span>
                            <a href="{{ $contact->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $contact->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $contact->instagram }}"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $contact->linkedin }}"><i class="fab fa-linkedin"></i></a>
                            <a href="{{ $contact->google }}"><i class="fab fa-google-plus-g"></i></a>
                            <a href="{{ $contact->youtube }}"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Company News</h5>
                        </div>
                        <div class="footer-link">
                            <ul>
{{--                                <li><a href="#">Partners</a></li>--}}
                                <li><a href="{{ route('about.us') }}">About Us</a></li>
{{--                                <li><a href="#">Career</a></li>--}}
{{--                                <li><a href="#">Reviews</a></li>--}}
{{--                                <li><a href="#">Terms & Conditions</a></li>--}}
{{--                                <li><a href="#">Help</a></li>--}}
                                <li><a href="#">Our Team</a></li>
                                <li><a href="{{ route('blog') }}">Latest Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Useful Links</h5>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ route('about.us') }}">About Us</a></li>
                                <li><a href="{{ route('all-services.index') }}">Services</a></li>
                                <li><a href="{{ route('all-projects.index') }}">Project</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-text text-center">
                        <p>&copy; {{ date('Y') }} @ DOVE LIVAMI PROPERTIES
                            LTD.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
