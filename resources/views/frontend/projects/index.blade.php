@extends('layouts.master')

@section('main')
    <!-- Projects 3 -->
    <section class="projects3 section-padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="sub-title border-bot-light">Discover</div>
                </div>
                <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-title"><span>Creative</span> Projects</div>
                    <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artines ariianu the ateliten finibus viverra nec lacus in the nedana mis erodino. Design nila iman the finise viverra nec a lacus miss viventa in the setlien suscipe no curabit tristue the seneoice misuscipit non sagie the fermen.</p>
                </div>
            </div>
            @foreach($projects as $key => $project)
                @if($key % 2 == 0)
                    @if($key == 0)
                        <div class="row">
                            <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                                <div class="img">
                                    <a href="{{ route('all-projects.show', $project->id) }}"><img src="{{ asset($project->image) }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-4 valign animate-box" data-animate-effect="fadeInUp">
                                <div class="content">
                                    <div class="cont">
                                        <h6>{{ $project->project_category->name }}</h6>
                                        <h3>{{ $project->title }}</h3>
                                        <div class="more"><a href="{{ route('all-projects.show', $project->id) }}" class="link-btn" tabindex="0">View Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row mt-120">
                            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                                <div class="img">
                                    <a href="{{ route('all-projects.show', $project->id) }}"><img src="{{ asset($project->image) }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-4 valign animate-box" data-animate-effect="fadeInUp">
                                <div class="content">
                                    <div class="cont">
                                        <h6>{{ $project->project_category->name }}</h6>
                                        <h3>{{ $project->title }}</h3>
                                        <div class="more"><a href="{{ route('all-projects.show', $project->id) }}" class="link-btn" tabindex="0">View Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="row mt-120">
                        <div class="col-md-4 order2 valign animate-box" data-animate-effect="fadeInUp">
                            <div class="content">
                                <div class="cont">
                                    <h6>{{ $project->project_category->name }}</h6>
                                    <h3>{{ $project->title }}</h3>
                                    <div class="more"><a href="{{ route('all-projects.show', $project->id) }}" class="link-btn" tabindex="0">View Project</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 order1 animate-box" data-animate-effect="fadeInUp">
                            <div class="img">
                                <a href="#0"><img src="{{ asset($project->image) }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach


        </div>
    </section>
@endsection
