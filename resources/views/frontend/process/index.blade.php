@extends('layouts.master')

@section('main')
    <!-- Process -->
    <section class="process section-padding">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="sub-title border-bot-light">Workflow</div>
                </div>
                <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-title"><span>Our</span> Process</div>
                </div>
            </div>
            @foreach($data as $key => $item)
                @if($key % 2 == 0)
                    <div class="row">
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="img">
                                <img src="{{ asset($item->image) }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 valign animate-box" data-animate-effect="fadeInRight">
                            <div class="wrap">
                                <div class="number">
                                    <h1>{{ $key+1 }}</h1>
                                </div>
                                <div class="cont">
                                    <h3>{{ $item->title }}</h3>
                                    <p>{!! $item->desc !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-6 order2 valign animate-box" data-animate-effect="fadeInLeft">
                            <div class="wrap">
                                <div class="number">
                                    <h1>{{ $key+1 }}</h1>
                                </div>
                                <div class="cont">
                                    <h3>{{ $item->title }}</h3>
                                    <p>{!! $item->desc !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 order1 animate-box" data-animate-effect="fadeInRight">
                            <div class="img">
                                <img src="{{ asset($item->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection
