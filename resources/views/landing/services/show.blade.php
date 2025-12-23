@extends('layouts.landing')

@section('landing')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{ asset('landing/img/testimonial/test-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h2>{{ $service->title }}</h2>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- choose-area -->
    <section class="choose-area pt-120 pb-120 p-relative">
        <div class="chosse-img wow fadeInRight animated" data-animation="fadeInRight animated" data-delay=".2s"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="s-about-img p-relative">
                        <img src="{{ asset($service->image) }}" alt="img">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="choose-wrap">
                        <div class="section-title w-title left-align mb-35 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <span>Service</span>
                            <h2>{{ $service->title }}</h2>
                        </div>
                        <div class="choose-content wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <p>{!! $service->long_desc !!}</p>

{{--                            <div class="choose-list mt-20 mb-20">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <i class="fas fa-bed"></i>--}}
{{--                                        <span>3 Bedrooms.</span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="fal fa-pencil-ruler"></i>--}}
{{--                                        <span>Square Feet </span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="fas fa-bath"></i>--}}
{{--                                        <span>Bedrooms</span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="fas fa-car"></i>--}}
{{--                                        <span>Car parking</span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h3>Price:</h3>--}}
{{--                            <h2>$1,786.80</h2>--}}
                            <div class="choose-btn mt-30">
                                <a href="{{ route('contact.us') }}" class="btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- choose-area-end -->

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

    <!-- services-area -->
    <section id="services" class="services-area services-bg services-two pt-120 pb-90">
        <div class="container">
            <div class="row">
                @foreach($services as $serve)
                    <div class="col-lg-4 col-md-6">
                        <div class="s-single-services  wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <div class="second-services-content">
                                <h5>{{ $serve->title }}</h5>
                            </div>
                            <div class="services-icon">
                                <i class="far fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
    <!-- services-area-end -->
@endsection
