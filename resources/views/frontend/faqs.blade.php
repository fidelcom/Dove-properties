@extends('layouts.master')

@section('main')
    <section class="section-padding">
        <div class="container">
            <div class="row mb-5 animate-box" data-animate-effect="fadeInUp">
                <div class="col-md-2">
                    <div class="sub-title border-bot-light">FAQS</div>
                </div>
                <div class="col-md-10">
                    <div class="section-title mb-5">Frequently Asked <span>Questions</span></div>
                    <ul class="accordion-box clearfix">
                        @foreach($data as $item)
                            <li class="accordion block">
                                <div class="acc-btn">{{ $item->question }}</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">{!! $item->answer !!}</div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
