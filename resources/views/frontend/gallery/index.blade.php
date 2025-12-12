@extends('layouts.master')

@section('main')
    <!-- Image Gallery -->
    <section class="section-padding">
        <div class="container">
            <div class="row mb-5 animate-box" data-animate-effect="fadeInUp">
                <div class="col-md-4">
                    <div class="sub-title border-bot-light">Images</div>
                </div>
                <div class="col-md-8">
                    <div class="section-title"><span>Image</span> Gallery</div>
                    <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artines ariianu the ateliten finibus viverra nec lacus in the nedana mis erodino. Design nila iman the finise viverra nec a lacus miss viventa in the setlien suscipe no curabit tristue the seneoice misuscipit non sagie the fermen.</p>
                </div>
            </div>
            <div class="row">
                @foreach($data as $item)
                    <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                        <a href="{{ asset($item->image) }}" title="{{ $item->name }}" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset($item->image) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
