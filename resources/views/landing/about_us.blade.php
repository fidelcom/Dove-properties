@extends('layouts.landing')

@section('landing')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(landing/img/testimonial/test-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h2>About Us</h2>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- about-area -->
    <section id="about" class="about-area about-p pt-120 pb-120 p-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content s-about-content pl-30">
                        <div class="about-title second-atitle">
                            <span>About Us</span>
                            <h2>Welcome To {{ $about->title }}</h2>
                            <p><span></span>Company Overview</p>
                        </div>
                        <p>{!! $about->description !!}</p>
                        <a href="#" class="btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="s-about-img p-relative">
                        <img src="landing/img/features/about_img02.png" alt="img">
                        <div class="about-text second-about">
                            <span>35 years of <br> experience</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- about-area -->
    <section id="about" class="about-area about-p pt-120 pb-120 p-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content s-about-content pl-30">
                        <div class="about-title second-atitle">
{{--                            <span>About Us</span>--}}
                            <h2>Our Mission</h2>
{{--                            <p><span></span>Company Overview</p>--}}
                        </div>
                        <p>{!! $about->mission !!}</p>
                        <a href="#" class="btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content s-about-content pl-30">
                        <div class="about-title second-atitle">
                            {{--                            <span>About Us</span>--}}
                            <h2>Our Mission</h2>
                            {{--                            <p><span></span>Company Overview</p>--}}
                        </div>
                        <p>{!! $about->vision !!}</p>
                        <a href="#" class="btn">Get Started</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- cta-area -->
    <section class="cta-area cta-bg pt-120 pb-120" style="background-image:url({{ asset('landing/img/bg/cta_bg02.jpg') }})">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <p>Don’t hesitate to contact us</p>
                        <h2>MAKE AN APPOINTMENT NOW</h2>
                        <h3>{{ $contact->phone }}</h3>
{{--                        <p>{{ $contact->address }}</p>--}}
                        <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30" data-animation="fadeInDown animated" data-delay=".2s">
                            <a href="#" class="btn">Contact Us</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- cta-area-end -->


    <!-- counter-area -->
    <div class="counter-area pt-120 pb-90" style="background-image:url({{ asset('landing/img/bg/count-bg.jpg') }}); background-size:cover;">
        <div class="container">
            <div class="row">
                @foreach($successes as $key => $success)
                    @if($key == 0)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <i class="fal fa-pencil-ruler"></i>
                                <div class="counter p-relative">
                                    <span class="count">{{ $success->value }}</span>
                                </div>
                                <p>{{ $success->title }}</p>
                            </div>
                        </div>
                    @elseif($key == 1)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <i class="fas fa-bath"></i>
                                <div class="counter p-relative">
                                    <span class="count">{{ $success->value }}</span>
                                </div>
                                <p>{{ $success->title }}</p>
                            </div>
                        </div>
                    @elseif($key == 2)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <i class="fas fa-bed"></i>
                                <div class="counter p-relative">
                                    <span class="count">{{ $success->value }}</span>
                                </div>
                                <p>{{ $success->title }}</p>
                            </div>
                        </div>
                    @elseif($key == 3)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <i class="fas fa-car"></i>
                                <div class="counter p-relative">
                                    <span class="count">{{ $success->value }}</span>
                                </div>
                                <p>{{ $success->title }}</p>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <i class="fal fa-pencil-ruler"></i>
                                <div class="counter p-relative">
                                    <span class="count">{{ $success->value }}</span>
                                </div>
                                <p>{{ $success->title }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach




            </div>
        </div>
    </div>
    <!-- counter-area-end -->
@endsection
