@extends('layouts.master')

@section('main')
    <!-- Post  -->
    <section class="post section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{ asset($post->image) }}" class="img-responsive mb-5" alt="">
                    <div class="date"> <span class="ti-time"></span> {{ $post->created_at->diffForHumans() }} <span class="ti-tag"></span>
                        {{ $post->blog_category->name }} </div>
                    <h2>{{ $post->title }}</h2>
                    <p>{!! $post->long_desc !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Comment -->
    <div class="comments">
        <div class="container">
            <div class="row">
                <!-- Comment -->
                <div class="col-md-7">
                    @foreach($post->comment as $comment)
                        <div class="wrap">
                            <div class="user"> <img src="{{ asset($comment->image) }}" alt=""> </div>
                            <div class="con">
                                <h6>{{ $comment->name }}</h6>
                                <p><span>{{ $comment->created_at->diffForHumans() }}</span></p>
                                <p>{!! $comment->message !!}</p>
                            </div>
                        </div>
                    @endforeach
                    @if(empty($post->comment->name))
                            <div class="wrap">
                                <div class="user">  </div>
                                <div class="con">
                                    <h6>No Comment</h6>
                                </div>
                            </div>
                        @endif
                </div>
                <!-- Contact Form -->
                <div class="col-md-4 offset-md-1 archsan-contact-col">
                    <h6 class="mb-4">Leave a Reply</h6>
                    <form method="post" action="{{ route('comment.store') }}" class="archsan-contact-form row" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="col-md-12">
                            <div class="form-component">
                                <input type="text" name="name" id="name" class="archsan-input" placeholder="Name *" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-component">
                                <input type="email" name="email" id="email" class="archsan-input" placeholder="Email *" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-component">
                                <input type="text" name="phone" id="name" class="archsan-input" placeholder="Phone No" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-component">
                                <textarea name="message" id="message" cols="40" rows="4" class="archsan-input" placeholder="Comment *" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-component">
                                <input type="file" name="image" id="name" class="archsan-input" required="">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <input name="submit" type="submit" value="Send Comment">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Prev-Next -->
    <div class="prev-next">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="prev-next-left">
                            <a href=""> <i class="ti-arrow-left"></i> </a>
                        </div> <a href="{{ route('blog') }}"><i class="ti-layout-grid3-alt"></i></a>
                        <div class="prev-next-right"> <a href=""> <i class="ti-arrow-right"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
