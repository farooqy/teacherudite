@extends('layout.mainlayout')

@section('page-content')
<div class="page-content">
    <!--section-->
    <div class="section mt-0 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="title-wrap">
                        <h5>Office Location</h5>
                        <div class="h-decor"></div>
                    </div>
                    <ul class="icn-list-lg">
                        <li><i class="icon-location-fill"></i>48 6<sup>th</sup> Avenue, Walmer
                            <br>, Port Elizabeth,
                            <br>South Africa, 6000
                        </li>
                    </ul>
                </div>
                <div class="col-md mt-3 mt-md-0">
                    <div class="title-wrap">
                        <h5>Contact Info</h5>
                        <div class="h-decor"></div>
                    </div>
                    <ul class="icn-list-lg">
                        <li><i class="icon-telephone"></i><span class="phone"><span class="text-nowrap">+27(0) 81
                                    481 8979</span></li>
                        <li><i class="icon-black-envelope"></i><a
                                href="mailto:info@eruditeglobal.net">info@eruditeglobal.net</a></li>
                        <li><i class="icon-wechat-fill"></i>Byron_Erudite_Global</li>
                    </ul>
                </div>
                <div class="col-md mt-3 mt-md-0">
                    <div class="title-wrap">
                        <h5>Working Time</h5>
                        <div class="h-decor"></div>
                    </div>
                    <ul class="icn-list-lg">
                        <li><i class="icon-clock"></i>
                            <div>
                                <div class="d-flex"><span>Mon-Thu</span><span class="theme-color">08:00 -
                                        20:00</span></div>
                                <div class="d-flex"><span>Friday</span><span class="theme-color">07:00 -
                                        22:00</span></div>
                                <div class="d-flex"><span>Saturday</span><span class="theme-color">08:00 -
                                        18:00</span></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md col-lg-5">
                    <div class="pr-0 pr-lg-8">
                        <div class="title-wrap">
                            <h2>Get In Touch With Us</h2>
                            <div class="h-decor"></div>
                        </div>
                        <div class="mt-2 mt-lg-4">
                            <p>If you have questions, please send us a message and we’ll get right back to you.
                                You can also contact us directly to speak with a member of our team.</p>
                            <p class="p-sm">Fields marked with a * are required.</p>
                        </div>
                        <div class="mt-2 mt-md-5"></div>
                        <h5>Stay Connected</h5>
                        <div class="content-social mt-15">
                            <a href="https://www.facebook.com/eruditeza/" target="blank" class="hovicon"><i
                                    class="icon-facebook-logo"></i></a>
                            <a href="https://www.twitter.com/eruditeza/" target="blank" class="hovicon"><i
                                    class="icon-twitter-logo"></i></a>
                            <a href="https://www.youtube.com/channel/UCulDV7zzzO4x0rs4MbSgpYw?pbjreload=10eruditeza/"
                                target="blank" class="hovicon"><i class="icon-youtube-logo"></i></a>
                            <a href="https://www.instagram.com/eruditeza/" target="blank" class="hovicon"><i
                                    class="icon-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md col-lg-6 mt-4 mt-md-0">
                    <form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
                        <div class="successform">
                            <p>Your message was sent successfully!</p>
                        </div>
                        <div class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="name" placeholder="Your name *">
                        </div>
                        <div class="mt-15">
                            <input type="text" class="form-control" name="email" placeholder="Email *">
                        </div>
                        <div class="mt-15">
                            <input type="text" class="form-control" name="phone" placeholder="Your Phone">
                        </div>
                        <div class="mt-15">
                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-hover-fill"><i
                                    class="icon-right-arrow"></i><span>Send message</span><i
                                    class="icon-right-arrow"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

@section('footer-section')
    @include('layout.small_footer')
@endsection