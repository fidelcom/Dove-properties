@php
    $data = \App\Models\Testimonial::where('approved', 1)->latest()->get();
@endphp

<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding" data-background="images/slider/a.jpg" data-overlay-dark="6">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">
                    <h3 class="sub-title border-bot-dark">Testiominals</h3>
                </div>
                <div class="col-md-8">
                    <div class="section-title">What Client's Say?</div>
                    <div class="wrap">
                        <div class="owl-carousel owl-theme">
                            @foreach($data as $item)
                                <div class="item"> <span class="quote"><img src="{{ asset('frontend/images/quot.png') }}" alt=""></span>
                                    <p>{!! $item->desc !!}</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset($item->image) }}" alt=""> </div>
                                        <div class="cont">
                                            <h6>{{ $item->name }}</h6> <span>{{ $item->location }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
