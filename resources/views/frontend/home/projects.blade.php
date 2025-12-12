@php
    $categories = \App\Models\ProjectCategory::all();
    $project = \App\Models\Project::latest()->get();
@endphp
<div class="projects2 section-padding">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                <div class="sub-title border-bot-light">Discover</div>
            </div>
            <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                <div class="section-title">Creative <span>Projects</span></div>
                <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artines ariianu the ateliten finibus viverra nec lacus in the nedana mis erodino. Design nila iman the finise viverra nec a lacus miss viventa in the setlien suscipe no curabit tristue the seneoice misuscipit non sagie the fermen.</p>
            </div>
        </div>
        <div class="row text-center animate-box" data-animate-effect="fadeInUp">
            <ul class="projects2-filter">
                <li class="active" data-filter="*">All</li>
                @foreach($categories as $cat)
                    <li data-filter=".{{ strtolower($cat->name) }}">{{ $cat->name }}</li>
                @endforeach
{{--                <li data-filter=".completed">Completed Projects</li>--}}
            </ul>
        </div>
        <div class="row projects2-items animate-box" data-animate-effect="fadeInUp">
            @foreach($project as $item)
                <div class="col-md-6 single-item {{ strtolower($item->project_category->name) }}">
                    <div class="projects2-wrap">
                        <a href="project-page.html"><img src="{{ asset($item->image) }}" alt=""></a>
                        <div class="projects2-con">
                            <p>Project P.01</p>
                            <h3><a href="project-page.html">{{ $item->title }}</a></h3>
                            <a href="project-page.html" class="project2-link"></a>
                        </div>
                    </div>
                </div>
            @endforeach
{{--            <div class="col-md-6 single-item completed">--}}
{{--                <div class="projects2-wrap">--}}
{{--                    <a href="project-page.html"><img src="images/projects/02.jpg" alt=""></a>--}}
{{--                    <div class="projects2-con">--}}
{{--                        <p>Project P.02</p>--}}
{{--                        <h3><a href="project-page.html">Luxurious Villa</a></h3>--}}
{{--                        <a href="project-page.html" class="project2-link"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 single-item ongoing">--}}
{{--                <div class="projects2-wrap">--}}
{{--                    <a href="project-page.html"><img src="images/projects/03.jpg" alt=""></a>--}}
{{--                    <div class="projects2-con">--}}
{{--                        <p>Project P.03</p>--}}
{{--                        <h3><a href="project-page.html">Ultra BlackHome</a></h3>--}}
{{--                        <a href="project-page.html" class="project2-link"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 single-item ongoing">--}}
{{--                <div class="projects2-wrap">--}}
{{--                    <a href="project-page.html"><img src="images/projects/04.jpg" alt=""></a>--}}
{{--                    <div class="projects2-con">--}}
{{--                        <p>Project P.04</p>--}}
{{--                        <h3><a href="project-page.html">Modern Bedrooom</a></h3>--}}
{{--                        <a href="project-page.html" class="project2-link"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 single-item completed">--}}
{{--                <div class="projects2-wrap">--}}
{{--                    <a href="project-page.html"><img src="images/projects/01.jpg" alt=""></a>--}}
{{--                    <div class="projects2-con">--}}
{{--                        <p>Project P.05</p>--}}
{{--                        <h3><a href="project-page.html">Mountain House</a></h3>--}}
{{--                        <a href="project-page.html" class="project2-link"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 single-item completed">--}}
{{--                <div class="projects2-wrap">--}}
{{--                    <a href="project-page.html"><img src="images/projects/05.jpg" alt=""></a>--}}
{{--                    <div class="projects2-con">--}}
{{--                        <p>Project P.06</p>--}}
{{--                        <h3><a href="project-page.html">Modern Food Table</a></h3>--}}
{{--                        <a href="project-page.html" class="project2-link"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

    </div>
</div>
