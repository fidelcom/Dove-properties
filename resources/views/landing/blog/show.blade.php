@extends('layouts.landing')

@section('landing')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{ asset('landing/img/testimonial/test-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h2>News Details</h2>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }} Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- inner-blog -->
    <section class="inner-blog b-details-p pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrap">
                        <div class="bsingle__post-thumb mb-30">
                            <img src="{{ asset($post->image) }}" alt="">
                        </div>
                        <div class="meta__info">
                            <ul>
                                <li><a href="#"><i class="far fa-user"></i>by {{ $post->author }}</a></li>
                                <li><i class="far fa-comments"></i>{{ $post->comment->count() }} Comments</li>
                            </ul>
                        </div>
                        <div class="details__content pb-50">
                            <h2>{{ $post->title }}</h2>
                            <p>{!! $post->long_desc !!}</p>
                        </div>
                        <div class="related__post mt-45 mb-85">
                            <div class="post-title">
                                <h4>Related Post</h4>
                            </div>
                            <div class="row">
                                @foreach($latest as $blog)
                                    <div class="col-md-6">
                                        <div class="related-post-wrap mb-30">
                                            <div class="post-thumb">
                                                <img src="{{ asset($blog->image) }}" alt="">
                                            </div>
                                            <div class="rp__content">
                                                <h3><a href="#">{{ $blog->title }}</a></h3>
                                                <p>{!! Str::limit($post->short_desc, 100) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="comment__wrap pb-45 mb-45">
                            <div class="comment__wrap-title">
                                <h5>Comments</h5>
                            </div>
                            @foreach($post->comment as $comment)
                                <div class="single__comment">
                                    <div class="comments-avatar">
                                        <img src="{{ asset($comment->image) }}" width="70" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <div class="avatar-name mb-15">
                                            <h6>{{ $comment->name }}</h6>
                                            <span>{{ $comment->created_at->diffForHumans() }}</span>
{{--                                            <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>--}}
                                        </div>
                                        <p>{!! $comment->message !!}</p>
                                    </div>
                                </div>
                            @endforeach
                            @if($post->comment->isEmpty())
                                <div class="single__comment">
                                    <div class="comments-avatar">
{{--                                        <img src="{{ asset($comment->image) }}" width="70" alt="">--}}
                                    </div>
                                    <div class="comment-text">
                                        <div class="avatar-name mb-15">
                                            <h6>No comment</h6>
                                            <span></span>
                                            {{--                                            <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>--}}
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            @endif

                        </div>
                        <div class="post-comments-form mb-50">
                            <div class="comment__wrap-title">
                                <h5>Post Comment</h5>
                            </div>
                            <div class="comment-box">
                                <form action="{{ route('comment.store') }}" method="POST" class="comment__form" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <div class="comment-field text-area mb-20">
                                        <i class="fas fa-pencil-alt"></i>
                                        <textarea name="message" id="message" cols="30" rows="10"
                                                  placeholder="Type your comments...."></textarea>
                                    </div>
                                    <div class="comment-field mb-20">
                                        <i class="far fa-user"></i>
                                        <input type="text" name="name" placeholder="Type your name....">
                                    </div>
                                    <div class="comment-field mb-20">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Type your email....">
                                    </div>
                                    <div class="comment-field mb-20">
                                        <i class="fas fa-phone"></i>
                                        <input type="tel" name="phone" placeholder="Type your mobile number....">
                                    </div>
                                    <div class="comment-field mb-20">
                                        <i class="fas fa-user"></i>
                                        <input type="file" name="image" >
                                    </div>
                                    <button class="btn">Post Comments</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside>
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
