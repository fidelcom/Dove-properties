@extends('layouts.landing')

@section('landing')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{ asset('landing/img/testimonial/test-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h2>Projects</h2>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Projects</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- gallery-area-->
    <section id="services" class="services-area pt-120 pb-90">

        <div class="container">
            <div class="row services-active2">
                @foreach($projects as $project)
                    <div class="col-xl-4">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a class="gallery-link popup-image" href="{{ asset($project->image) }}">
                                    <img src="{{ asset($project->image) }}" alt="img">
                                </a>
                            </div>
                            <div class="services-content">
                                <small>Explore Now</small>
                                <h4><a href="{{ route('all-projects.show', $project->id) }}">{{ $project->title }}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- gallery-area-end -->
@endsection
