@extends('layouts.master')

@section('main')
    <!-- Services Page -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="sub-title border-bot-light">Services</div>
                </div>
                <div class="col-md-10 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-title"><span>{{ $service->title }}</span></div>
                    <p>{!! $service->long_desc !!}</p>
                    <div class="row">
                        <div class="col-md-12 gallery-item">
                            <a href="{{ asset($service->image) }}" title="Interior Design" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="{{ asset($service->image) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                                </div>
                            </a>
                        </div>
                        @foreach($service->multiImage as $img)
                        <div class="col-md-4 gallery-item">
                            <a href="{{ asset($img->image) }}" title="Interior Design" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="{{ asset($img->image) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Other Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="sub-title border-bot-light">Moreover</div>
                </div>
                <div class="col-md-8">
                    <div class="section-title"><span>Other</span> Services</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @foreach($services as $key => $item)
                            <div class="item bg-1 mb-4">
                                <div class="con">
                                    <a href="{{ route('all-services.show', $item->id) }}">
                                        <div class="numb">{{ $key+1 }}</div>
                                        <h5>{{ $item->title }}</h5>
                                        <p>{{ $item->short_desc }}</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
