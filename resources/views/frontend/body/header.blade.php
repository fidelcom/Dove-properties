<div class="duru-wrap">
    <div class="duru-wrap-inner">
        <nav class="duru-menu">
            <ul>
                <li class=' active'><a href="{{ url('/') }}">Home</a>
                </li>
                <li><a href="{{ route('about.us') }}">About</a></li>
                <li><a href="{{ route('all-services.index') }}">Services</a></li>
                <li class='duru-menu-sub'><a href="">Projects <i class="ti-angle-down"></i></a>
                    <ul>
                        <li><a href="{{ route('all-projects.index') }}">All Projects</a></li>
                        @foreach(\App\Models\ProjectCategory::orderBy('name', 'ASC')->get() as $cat)
                            <li><a href='{{ route('all-projects.edit', $cat->id) }}'>{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('galleries.index') }}">Gallery</a></li>
                <li><a href="{{ route('processes.index') }}">Process</a></li>
                <li><a href="{{ route('home.faq') }}">FAQs</a></li>
                <li><a href="{{ route('blog') }}">Blog </a>
                </li>
                <li><a href="{{ route('contact.us') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- Logo & Menu Burger -->
<header class="duru-header">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-6 col-md-6 duru-logo-wrap">
                <a href="/" class="duru-logo"><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
            </div>
            <!-- Menu Burger -->
            <div class="col-6 col-md-6 text-right duru-wrap-burger-wrap"> <a href="#" class="duru-nav-toggle duru-js-duru-nav-toggle"><i></i></a> </div>
        </div>
    </div>
</header>
