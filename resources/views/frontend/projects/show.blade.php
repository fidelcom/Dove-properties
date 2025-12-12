@extends('layouts.master')

@section('main')
    <!-- Project Page  -->
    <section class="project-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $project->title }}</h2>
                    <p>{!! $project->short_desc !!}</p><br>
                </div>
            </div>
            <!-- project slider -->
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="portfolio-item"> <img class="img-fluid" src="{{ asset($project->image) }}" alt=""> </div>
                        @foreach($project->multiImage as $img)
                            <div class="portfolio-item"> <img class="img-fluid" src="{{ asset($img->image) }}" alt=""> </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="project-bar">
                                <div class="row justify-content-between align-items-center text-left text-lg-start">
                                    <div class="col-md-3 mb-15">
                                        <h5>Year</h5>
                                        <h6>{{ $project->year }}</h6>
                                    </div>
                                    <div class="col-md-3 mb-15">
                                        <h5>Company</h5>
                                        <h6>{{ $project->client }}</h6>
                                    </div>
                                    <div class="col-md-3 mb-15">
                                        <h5>Category</h5>
                                        <h6>{{ $project->project_category->name }}</h6>
                                    </div>
                                    <div class="col-md-3 mb-15">
                                        <h5>Location</h5>
                                        <h6>{{ $project->location }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>{!! $project->long_desc !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Other Projects -->
    <section class="projects section-padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="sub-title border-bot-light">Discover</div>
                </div>
                <div class="col-md-8">
                    <div class="section-title"><span>Other</span> Projects</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @foreach($latest as $item)
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset($item->image) }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">{{ $item->project_category->name }}</span>
                                        <h6><a href="{{ route('all-projects.show', $item->id) }}">{{ $item->title }}</a></h6>
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
