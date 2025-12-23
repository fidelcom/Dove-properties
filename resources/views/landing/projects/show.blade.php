@extends('layouts.landing')

@section('landing')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{ asset('landing/img/testimonial/test-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h2>{{ $project->title }}</h2>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $project->title }} Details</li>
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
                        <img src="{{ asset($project->image) }}" alt="img">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="choose-wrap">
                        <div class="section-title w-title left-align mb-35 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <span>Best Place</span>
                            <h2>{{ $project->title }}</h2>
                        </div>
                        <div class="choose-content wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <p>{!! $project->long_desc !!}</p>

                            <div class="choose-list mt-20 mb-20">
                                <ul>
                                    <li>
                                        <i class="fas fa-bed"></i>
                                        <span>{{ $project->client }}</span>
                                    </li>
                                    <li>
                                        <i class="fal fa-pencil-ruler"></i>
                                        <span>{{ $project->location }} </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-bath"></i>
                                        <span>{{ $project->year }}</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-car"></i>
                                        <span>{{ $project->project_category->name }}</span>
                                    </li>
                                </ul>
                            </div>
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

    <!-- gallery-area -->
    <section id="work" class="pt-120 pb-120">
        <div class="container">
            <div class="portfolio wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                <div class="my-masonry mb-30 ">
                    <div class="button-group filter-button-group text-center">
                        <button class="active" data-filter="*">All</button>
{{--                        <button data-filter=".applications">Applications</button>--}}
{{--                        <button data-filter=".development">Development</button>--}}
{{--                        <button data-filter=".logo">Logo</button>--}}
{{--                        <button data-filter=".web-design">Web Design</button>--}}
                    </div>
                </div>

                <div class="grid col3">
                    @foreach($project->multiImage as $img)
                        <div class="grid-item applications">
                            <a class="gallery-link popup-image" href="{{ asset($img->image) }}">
                                <figure class="gallery-image">
                                    <img src="{{ asset($img->image) }}" alt="{{ $project->title }}">
                                    <figcaption>{{ $project->title }}</figcaption>
                                </figure>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>
    <!-- gallery-area-end -->

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
