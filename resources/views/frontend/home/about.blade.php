@php
    $data = \App\Models\About::find(1);
@endphp
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="sub-title border-bot-light">Who are we?</div>
            </div>
            <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                <div class="section-title"><span>About</span> {{ $data->title }}</div>
                <p>{{ $data->description }}</p>
                <div class="row">
                    <div class="col col-md-4">
                        <div class="about-box">
                            <img src="{{ asset('frontend/images/icon-1.png') }}" class="icon" alt="">
                            <h5>Architecture</h5>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="about-box">
                            <img src="{{ asset('frontend/images/icon-2.png') }}" class="icon" alt="">
                            <h5>Interior</h5>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="about-box">
                            <img src="{{ asset('frontend/images/icon-3.png') }}" class="icon" alt="">
                            <h5>Planing</h5>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
