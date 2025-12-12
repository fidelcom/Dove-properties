@extends('layouts.master')

@section('main')
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-1 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="sub-title border-bot-light">About</div>
                </div>
                <div class="col-md-7 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-title">{{ $about->title }} <span>About</span></div>
                    <p>{{ $about->description }}</p>
                    <div class="section-title">Our <span>Mission</span></div>
                    <p>{{ $about->mission }}</p>
                    <div class="section-title">Our <span>Vision</span></div>
                    <p>{{ $about->vision }}</p>
                    <div class="states">
                        <ul class="flex">
                            <li class="flex">
                                <div class="numb valign">
                                    <h1>24</h1>
                                </div>
                                <div class="text valign">
                                    <p>Years
                                        <br> Of Experience
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="wrap">
                        <div class="con"> <img src="{{ asset($about->image) }}" class="img-fluid" alt="">
                            <div class="info">
                                <h4 class="name">Stella Athena</h4>
                            </div>
                        </div>
                    </div>
                    <div class="wrap">
                        <div class="con"> <img src="{{ asset('frontend/images/about2.jpg') }}" class="img-fluid" alt="">
                            <div class="info">
                                <h4 class="name">Martin Dan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-4 mt-5 animate-box" data-animate-effect="fadeInUp">
                    <div class="row">
                        <div class="col-md-12 skills">
                            @foreach($success as $item)
                                <div class="skill-item">
                                    <h6>{{ $item->title }} <i>({{ $item->value }}%)</i></h6>
                                    <div class="skill-progress">
                                        <div class="progres" data-value="{{ $item->value }}%"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team section-padding">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="sub-title border-bot-light">Creative Thinkers</div>
                </div>
                <div class="col-md-8">
                    <div class="section-title">Team <span>Members</span></div>
                    <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artines ariianu the ateliten finibus viverra nec lacus in the nedana mis erodino.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    @foreach($team as $mem)
                        <div class="wrap">
                            <div class="con"> <img src="{{ asset($mem->image) }}" class="img-fluid" alt="">
                                <div class="info">
                                    <h4 class="name">{{ $mem->name }}</h4>
                                </div>
                            </div>
                            <ul class="social">
                                <li><a href="#"><i class="ti-dribbble"></i></a></li>
                                <li><a href="{{ $mem->twitter }}"><i class="ti-twitter"></i></a></li>
                                <li><a href="{{ $mem->instagram }}"><i class="ti-instagram"></i></a></li>
                                <li><a href="{{ $mem->linkedin }}"><i class="ti-linkedin"></i></a></li>
                            </ul>
                            <p>{{ $mem->position }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
