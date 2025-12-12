@extends('layouts.master')

@section('main')
    <section class="blog section-padding">
        <div class="container">
            <div class="row mb-5 animate-box" data-animate-effect="fadeInUp">
                <div class="col-md-4">
                    <div class="sub-title border-bot-light">Blog</div>
                </div>
                <div class="col-md-8">
                    <div class="section-title"><span>Latest</span> News</div>
                </div>
            </div>
            <div class="row">
                <!-- content -->
                <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                    @foreach($posts as $item)
                        <div class="wrap"> <img src="{{ asset($item->image) }}" alt="">
                            <div class="con">
                                <div class="date"> <span class="ti-time"></span> {{ $item->created_at->diffForHumans() }} <span class="ti-tag"></span>
                                    {{ $item->blog_category->name }} </div>
                                <div class="title">{{ $item->title }}</div>
                                <p>{{ $item->short_desc }}</p>
                            <div class="more"><a href="{{ route('blog.show', $item->id) }}" class="link-btn" tabindex="0">Read more <i class="ti-arrow-right"></i></a></div>
                            </div>
                        </div>
                    @endforeach

                    <!-- navigation -->
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12 text-center animate-box" data-animate-effect="fadeInUp">--}}
{{--                            <ul class="pagination-wrap align-center mt-30">--}}
{{--                                <li><a href="blog.html#"><i class="ti-angle-left"></i></a></li>--}}
{{--                                <li><a href="blog.html#">1</a></li>--}}
{{--                                <li><a href="blog.html#" class="active">2</a></li>--}}
{{--                                <li><a href="blog.html#">3</a></li>--}}
{{--                                <li><a href="blog.html#"><i class="ti-angle-right"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <!-- sidebar -->
                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="sidebar">
{{--                        <div class="search-box">--}}
{{--                            <input type="text" name="search-post" placeholder="Search"> <span class="icon ti-search"></span>--}}
{{--                        </div>--}}
                        <div class="widget category">
                            <h6 class="title-widget">Categories</h6>
                            <ul class="rest">
                                @foreach($categories as $cat)
                                    <li> <span><a href="{{ route('blog.categories', $cat->id) }}">{{ $cat->name }}</a></span> <span class="ml-auto">{{ $cat->post->count() }}</span> </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget last-post-thum">
                            <h6 class="title-widget">Latest Posts</h6>
                            @foreach($latest as $post)
                                <div class="item">
                                    <div class="valign">
                                        <div class="img">
                                            <a href="{{ route('blog.show', $post->id) }}"><img src="{{ asset($post->image) }}" alt="{{ $post->title }}"></a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <h6><a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a></h6> <span><a href="{{ route('blog.show', $post->id) }}">{{ $post->created_at->diffForHumans() }}</a></span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
{{--                        <div class="widget tags">--}}
{{--                            <h6 class="title-widget">Tags</h6>--}}
{{--                            <div class="bt"> <a href="post.html">Architecture</a> <a href="post.html">3D Modelling</a> <a href="post.html">Building</a> <a href="post.html">Interior</a> <a href="post.html">Exterior</a> <a href="post.html">Residental</a> </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
