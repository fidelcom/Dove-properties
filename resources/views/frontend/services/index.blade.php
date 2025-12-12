@extends('layouts.master')

@section('main')
    <section class="services section-padding">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-2 animate-box" data-animate-effect="fadeInUp">
                    <div class="sub-title border-bot-light">What We Do</div>
                </div>
                <div class="col-md-10 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-title"><span>Our</span> Services</div>
                    <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artines ariianu the ateliten finibus viverra nec lacus in the nedana mis erodino. Design nila iman the finise viverra nec a lacus miss viventa in the setlien suscipe no curabit tristue the seneoice misuscipit non sagie the fermen.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <div class="row">
                        @foreach($services as $key => $service)
                            <div class="col-md-6 mb-5 animate-box" data-animate-effect="fadeInUp">
                                <div class="item bg-1">
                                    <div class="con">
                                        <a href="{{ route('all-services.show', $service->id) }}">
                                            <div class="numb">{{ $key+1 }}</div>
                                            <h5>{{ $service->title }}</h5>
                                            <p>{!! $service->short_desc !!}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
