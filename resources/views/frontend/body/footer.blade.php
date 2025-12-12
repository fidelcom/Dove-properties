
<!-- Lets Talk -->
<section class="lets-talk">
    <div class="background bg-img bg-fixed section-padding" data-background="{{ asset('frontend/images/slider/b.jpg') }}" data-overlay-dark="6">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mb-30">
                    <div class="sub-title border-bot-dark">Contact Us</div>
                </div>
                <div class="col-md-10">
                    <div class="section-title">Let's discuss your project</div>
                    <p>Fill out the form and our manager will contact you for consultation.</p>
                    <form method="post" class="contact__form" action="{{ route('lets.talk.store') }}">
                        @csrf
                        <!-- Form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                            </div>
                        </div>
                        <!-- Form elements -->
                        <div class="row">
                            <div class="col-md-3 form-group">
                                <input class="line-gray" name="name" type="text" placeholder="Full Name *" required="">
                            </div>
                            <div class="col-md-2 form-group">
                                <input class="line-gray" name="email" type="email" placeholder="Email *" required="">
                            </div>
                            <div class="col-md-2 form-group">
                                <input class="line-gray" name="phone" type="text" placeholder="Phone *" required="">
                            </div>
                            <div class="col-md-3 form-group">
                                <input class="line-gray" name="service" type="text" placeholder="Service Type *" required="">
                            </div>
                            <div class="col-md-2">
                                <input class="line-gray" name="submit" type="submit" value="Send">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="checkbox" class="line-gray">
                                <label>I agree with the <a href="#0" class="underline line-gray">privacy policy</a></label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">
                    <div class="sub-title border-footer-light">Contact Us</div>
                </div>
                @foreach(\App\Models\Contact::all() as $item)
                    <div class="col-md-4">
                        <div class="item">
                            <h3><span>Office</span></h3>
                            <p>{{ $item->address }}</p>
                            <p class="phone">{{ $item->phone }}</p>
                            <p class="mail">{{ $item->email }}</p>
                            <div class="social mt-2">
                                <a href="{{ $item->twitter }}"><i class="ti-twitter"></i></a>
                                <a href="{{ $item->instagram }}"><i class="ti-instagram"></i></a>
                                <a href="{{ $item->linkedin }}"><i class="ti-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>© 2023 Architect. All right reserved.</p>
                </div>
                <div class="col-md-8">
                    <p class="right"><a href="#">Terms &amp; Conditions</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
