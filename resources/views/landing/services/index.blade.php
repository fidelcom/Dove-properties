@extends('layouts.landing')

@section('landing')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{ asset('landing/img/testimonial/test-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h2>Services</h2>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- services-area -->
    @php
        $icons = ["fad fa-megaphone", "far fa-building", "fad fa-home", "fas fa-search-location", "far fa-car-garage", "fas fa-comments-alt"];
    @endphp
    <section id="services" class="services-area services-bg services-two pt-120 pb-90">
        <div class="container">
            <div class="row">

                @foreach($services as $key => $service)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="s-single-services wow fadeInUp  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="services-ico2">
                                <i class="{{ $icons[$key] }}"></i>
                            </div>
                            <div class="second-services-content2">
                                <h5>{{ $service->title }} </h5>
                                <p>{!! $service->short_desc !!} </p>
                                <a href="{{ route('all-services.show', $service->id) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
    <!-- services-area-end -->

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


@endsection
