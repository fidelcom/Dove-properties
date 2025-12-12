@php
    $data = \App\Models\Slider::all();
@endphp
<header id="slider-area" class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        @foreach($data as $item)
        <div class="text-left item bg-img" data-overlay-dark="4" data-background="{{ asset($item->image) }}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h4>{{ $item->project }}</h4>
                            <h1>{{ $item->title }}</h1>
                            <p>{{ $item->description }}</p>
                            <a href="project-page.html" class="button-light">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="slide-num" id="snh-1"></div>
    <div class="slider__progress"><span></span></div>
</header>
