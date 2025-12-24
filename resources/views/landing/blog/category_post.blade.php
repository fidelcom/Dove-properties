@extends('layouts.landing')

@section('landing')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{ asset('landing/img/testimonial/test-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h2>News Feeds</h2>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- inner-blog -->
    <section class="inner-blog pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($posts as $post)
                        <div class="bsingle__post mb-50">
                            <div class="bsingle__post-thumb">
                                <img src="{{ asset($post->image) }}" alt="">
                            </div>
                            <div class="bsingle__content">
                                <div class="meta-info">
                                    <ul>
                                        <li><a href="{{ route('blog.show', $post->id) }}"><i class="far fa-user"></i>by {{ $post->author }}</a></li>
                                        <li><i class="far fa-comments"></i>{{ $post->comment->count() }} Comments</li>
                                    </ul>
                                </div>
                                <h2><a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a></h2>
                                <p>{!! Str::limit($post->short_desc, 100) !!}</p>
                                <div class="blog__btn">
                                    <a href="{{ route('blog.show', $post->id) }}" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="pagination-wrap mb-50">
                        <nav>
                            {{--                            <ul class="pagination">--}}
                            {{--                                <li class="page-item"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>--}}
                            {{--                                <li class="page-item active"><a href="#">1</a></li>--}}
                            {{--                                <li class="page-item"><a href="#">2</a></li>--}}
                            {{--                                <li class="page-item"><a href="#">3</a></li>--}}
                            {{--                                <li class="page-item"><a href="#">...</a></li>--}}
                            {{--                                <li class="page-item"><a href="#">10</a></li>--}}
                            {{--                                <li class="page-item"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>--}}
                            {{--                            </ul>--}}
{{--                            @if ($posts->hasPages())--}}
{{--                                <ul class="pagination">--}}
{{--                                    --}}{{-- Previous Page --}}
{{--                                    <li class="page-item {{ $posts->onFirstPage() ? 'disabled' : '' }}">--}}
{{--                                        <a class="page-link" href="{{ $posts->previousPageUrl() }}">--}}
{{--                                            <i class="fas fa-angle-double-left"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}

{{--                                    --}}{{-- Page Numbers --}}
{{--                                    @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)--}}
{{--                                        <li class="page-item {{ $page == $posts->currentPage() ? 'active' : '' }}">--}}
{{--                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}

{{--                                    --}}{{-- Next Page --}}
{{--                                    <li class="page-item {{ $posts->hasMorePages() ? '' : 'disabled' }}">--}}
{{--                                        <a class="page-link" href="{{ $posts->nextPageUrl() }}">--}}
{{--                                            <i class="fas fa-angle-double-right"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            @endif--}}

                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside>
                        {{--                        <div class="widget mb-40">--}}
                        {{--                            <div class="widget-title text-center">--}}
                        {{--                                <h4>Search</h4>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="slidebar__form">--}}
                        {{--                                <form action="#">--}}
                        {{--                                    <input type="text" placeholder="Search your keyword...">--}}
                        {{--                                    <button><i class="fas fa-search"></i></button>--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="widget mb-40">--}}
                        {{--                            <div class="widget-title text-center">--}}
                        {{--                                <h4>Instagram</h4>--}}
                        {{--                            </div>--}}
                        {{--                            <ul class="widget-insta-post">--}}
                        {{--                                <li><a href="#"><img src="img/blog/aside/insta_01.jpg" alt="img"></a></li>--}}
                        {{--                                <li><a href="#"><img src="img/blog/aside/insta_02.jpg" alt="img"></a></li>--}}
                        {{--                                <li><a href="#"><img src="img/blog/aside/insta_03.jpg" alt="img"></a></li>--}}
                        {{--                                <li><a href="#"><img src="img/blog/aside/insta_04.jpg" alt="img"></a></li>--}}
                        {{--                                <li><a href="#"><img src="img/blog/aside/insta_05.jpg" alt="img"></a></li>--}}
                        {{--                                <li><a href="#"><img src="img/blog/aside/insta_06.jpg" alt="img"></a></li>--}}
                        {{--                                <li><a href="#"><img src="img/blog/aside/insta_07.jpg" alt="img"></a></li>--}}
                        {{--                                <li><a href="#"><img src="img/blog/aside/insta_08.jpg" alt="img"></a></li>--}}
                        {{--                                <li><a href="#"><img src="img/blog/aside/insta_09.jpg" alt="img"></a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                        <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Follow Us</h4>
                            </div>
                            <div class="widget-social text-center">
                                <a href="{{ $contact->twitter }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $contact->pinterest }}"><i class="fab fa-pinterest-p"></i></a>
                                <a href="{{ $contact->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $contact->instagram }}"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $contact->youtube }}"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Categories</h4>
                            </div>
                            <ul class="cat__list">
                                @foreach($categories as $cat)
                                    <li><a href="{{ route('blog.categories', $cat->id) }}">{{ $cat->name }} <span>({{ $cat->post->count() }})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Feeds</h4>
                            </div>
                            <div class="widget__post">
                                <ul>
                                    @foreach($latest as $post)
                                        <li>
                                            <div class="widget__post-thumb">
                                                <img src="{{ asset($post->image) }}" width="70" alt="">
                                            </div>
                                            <div class="widget__post-content">
                                                <h6><a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a></h6>
                                                <span><i class="far fa-clock"></i>{{ $post->created_at->diffForHumans() }}</span>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-blog-end -->
@endsection
