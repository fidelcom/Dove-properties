@extends('layouts.landing')

@section('landing')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{ asset('landing/img/testimonial/test-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h2>Contact Us</h2>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- contact-area -->
    <section id="contact" class="contact-area contact-bg pt-120 pb-120 p-relative fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <div class="f-cta-icon">
                                <i class="far fa-map"></i>
                            </div>
                            <h5>Office Address</h5>
                            <p>{{ $contact->address }}</p>
                        </div>
                        <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <div class="f-cta-icon">
                                <i class="far fa-phone"></i>
                            </div>
                            <h5>Call Us</h5>
                            <p>{{ $contact->phone }}</p>
                        </div>
                        <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <div class="f-cta-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <h5>Working Hours</h5>
                            <p>Monday to Friday 09:00 to 18:30 and <br>
                                Saturday we work until 15:30</p>
                        </div>
                        <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <div class="f-cta-icon">
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <h5>Message Us</h5>
                            <p>We are always with you to solve your problem
                                mail us : <a href="{{ $contact->email }}">{{ $contact->email }}</a></p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <form action="{{ route('contact.us.store') }}" method="POST" class="contact-form wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-40">
                                    <input type="text" name="name" placeholder="Write here  Jhonathan Doe">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-email mb-40">
                                    <input type="text" name="email" placeholder="Write here youremail">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-email mb-40">
                                    <input type="text" name="phone" placeholder="Write here your mobile number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-subject mb-40">
                                    <input type="text" name="subject" placeholder="I would like to discuss">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-45">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                </div>
                                <button class="btn">Send Message</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </section>
    <!-- contact-area-end -->
    <!-- brand-area -->
    <div class="brand-area pt-60 pb-60" style="background-color:#d29751">
        <div class="container">
            <div class="row brand-active">
                @foreach($brands as $brand)
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="{{ asset($brand->image) }}" alt="img">
                        </div>
                    </div>
                @endforeach

                {{--                <div class="col-xl-2">--}}
                {{--                    <div class="single-brand">--}}
                {{--                        <img src="{{ asset('landing/img/brand/c-logo2.png') }}" alt="img">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-xl-2">--}}
                {{--                    <div class="single-brand">--}}
                {{--                        <img src="{{ asset('landing/img/brand/c-logo3.png') }}" alt="img">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-xl-2">--}}
                {{--                    <div class="single-brand">--}}
                {{--                        <img src="{{ asset('landing/img/brand/c-logo4.png') }}" alt="img">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-xl-2">--}}
                {{--                    <div class="single-brand">--}}
                {{--                        <img src="{{ asset('landing/img/brand/c-logo5.png') }}" alt="img">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-xl-2">--}}
                {{--                    <div class="single-brand">--}}
                {{--                        <img src="{{ asset('landing/img/brand/c-logo6.png') }}" alt="img">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-xl-2">--}}
                {{--                    <div class="single-brand">--}}
                {{--                        <img src="{{ asset('landing/img/brand/c-logo1.png') }}" alt="img">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- brand-area-end -->
@endsection
