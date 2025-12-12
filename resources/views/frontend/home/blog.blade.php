@php
    $data = \App\Models\Post::latest()->limit(3)->get();
@endphp
<section class="blog-home section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="sub-title border-bot-light">Blog</div>
            </div>
            <div class="col-md-8">
                <div class="section-title"><span>Latest</span> News</div>
            </div>
        </div>
        <div class="row">
            @foreach($data as $item)
                <div class="col-md-4">
                    <div class="item">
                        <div class="post-img">
                            <a href="post.html"><div class="img"> <img src="{{ $item->image }}" alt=""> </div></a>
                        </div>
                        <div class="cont">
                            <h4><a href="post.html">{{ $item->title }}</a></h4>
                            <div class="info"> <a href="blog.html"><span>{{ $item->blog_category->name }}</span></a> <a href="blog.html">{{ $item->created_at->diffForHumans() }}</a> </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
