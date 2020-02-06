@extends('layout.mainlayout')

@section('page-content')
<div class="page-content">
    <!--section slider-->
    <div class="section mt-0">
        <div id="mainSliderWrapper">
            <div class="loading-content">
                <div class="inner-circles-loader"></div>
            </div>
            <div class="main-slider arrows-white arrows-bottom" id="mainSlider"
                data-slick='{"arrows": false, "dots": true}'>
                <div class="slide">
                    <div class="img--holder" data-animation="kenburns" data-bg="images/content/slider/slide-02.jpg">
                    </div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">A
                                        fresh approach to recruitment for
                                        <br><b>Schools and Teachers</b></div>
                                    <div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">
                                        Develop fruitful and proactive partnerships with schools and teachers</div>
                                    <div class="slide-btn"><a href="/jobs" class="btn btn-white"
                                            data-animation="fadeInUp" data-animation-delay="2s"><i
                                                class="icon-right-arrow"></i><span>View our latest jobs</span><i
                                                class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img--holder" data-animation="kenburns" data-bg="images/content/slider/slide-01.jpg">
                    </div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
                                        Erudite talent acquisition
                                        <br><b>Teach abroad with Erudite</b></div>
                                    <div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">
                                        Offering flexible support tailored to your exacting requirements</div>
                                    <div class="slide-btn"><a href="/employers" class="btn btn-white"
                                            data-animation="fadeInUp" data-animation-delay="2s"><i
                                                class="icon-right-arrow"></i><span>Recruit talented
                                                teachers</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section slider-->
    <!--section welcome-->
    <div class="section">
        <div class="container pt-lg-2">
            <div class="title-wrap text-center text-md-left d-lg-none mb-lg-2">
                <div class="h-sub">Leading Experts in</div>
                <h2 class="h1">International Teacher<br class="d-sm-none"><span
                        class="theme-color">Recruitment</span></h2>
            </div>
            <div class="row mt-2 mt-md-3 mt-lg-0">
                <div class="col-md-6">
                    <div class="title-wrap hidden d-none d-lg-block text-center text-md-left">
                        <div class="h-sub">Leading Experts in</div>
                        <h2 class="h1">International Teacher <br class="d-sm-none"><span
                                class="theme-color">Recruitment</span></h2>
                    </div>
                    <div>
                        <p>Whether you’re looking to attract highly skilled teachers in the Middle East, Asia or
                            South East Asia, or wish to expand on your teaching skills and knowledge with an
                            ambitious yet rewarding job role, Erudite is by your side every step of the way,
                            offering expert support and guidance.</p>
                    </div>
                    <div class="mt-2 mt-md-4"></div>
                    <a href="/employers" class="btn-link" data-target="#modalBookingForm">Learn more<i
                            class="icon-right-arrow"></i></a>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <div class="video-wrap embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/2TohbtY2o5w"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section welcome-->
    <!--section services-->
    <div class="section">
        <div class="container-fluid px-0">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">What we offer</div>
                <h2 class="h1">Our Services</h2>
                <div class="h-decor"></div>
            </div>
            <div class="row no-gutters services-box-wrap services-box-wrap-desktop">
                <div class="col-4 order-1">
                    <div class="service-box-rotator js-service-box-rotator">
                        <div class="service-box service-box-greybg service-box--hiddenbtn">
                            <div class="service-box-caption text-center">
                                <div class="service-box-icon"><i class="icon-award-circle"></i></div>
                                <div class="service-box-icon-bg"><i class="icon-award-circle"></i></div>
                                <h3 class="service-box-title">Online TEFL certification</h3>
                                <p>With a little help from Erudite, you can earn your TEFL or Early Years
                                    certifications from the comfort of your own home</p>
                                <div class="btn-wrap"><a href="/tefl" class="btn"><i
                                            class="icon-right-arrow"></i><span>Know more</span><i
                                            class="icon-right-arrow"></i></a></div>
                            </div>
                        </div>
                        <div class="service-box service-box-greybg service-box--hiddenbtn">
                            <div class="service-box-caption text-center">
                                <div class="service-box-icon"><i class="icon-user-check"></i></div>
                                <div class="service-box-icon-bg"><i class="icon-user-check"></i></div>
                                <h3 class="service-box-title">Find the right teachers for you</h3>
                                <p>Teach Erudite specialises in sourcing teachers with majors in education and
                                    English. Our knowledge of the legal
                                    requirements in each region which we work in, means we’re able to streamline the
                                    recruitment process and save your
                                    business time to focus on its operations.</p>
                                <div class="btn-wrap"><a href="/employers" class="btn"><i
                                            class="icon-right-arrow"></i><span>Know more</span><i
                                            class="icon-right-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 order-2">
                    <div class="service-box">
                        <div class="service-box-image" data-bg="images/content/Web1920–3.png"></div>
                        <div class="service-box-caption text-center w-50 ml-auto">
                            <h3 class="service-box-title">Discover your dream teaching job today</h3>
                            <p>Whether you’ve always longed to become a TEFL teacher in China, Dubai or Vietnam, we
                                can work with you to realise and fulfill your goals</p>
                            <div class="btn-wrap"><a href="/jobs" class="btn"><i
                                        class="icon-right-arrow"></i><span>Know more</span><i
                                        class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-8 order-3 order-lg-4 order-xl-3">
                    <div class="service-box">
                        <div class="service-box-image" data-bg="images/content/Web1920–4.png"></div>
                        <div class="service-box-caption text-center w-50 ml-auto">
                            <h3 class="service-box-title">A supportive &amp; tailored approach to TEFL and Early
                                Years training</h3>
                            <p>You can quickly and easily purchase the relevant program from our website and begin
                                your course immediately, and this really is the start of an exciting journey</p>
                            <div class="btn-wrap"><a href="/tefl" class="btn"><i
                                        class="icon-right-arrow"></i><span>Know more</span><i
                                        class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-4 order-5">
                    <div class="service-box-rotator js-service-box-rotator">
                        <div class="service-box service-box-greybg service-box--hiddenbtn">
                            <div class="service-box-caption text-center">
                                <div class="service-box-icon"><i class="icon-target"></i></div>
                                <div class="service-box-icon-bg"><i class="icon-target"></i></div>
                                <h3 class="service-box-title">Tell us about your goals and vision for the future
                                </h3>
                                <p>We would love to hear from you </p>
                                <div class="btn-wrap"><a href="/contactus" class="btn"><i
                                            class="icon-right-arrow"></i><span>Know more</span><i
                                            class="icon-right-arrow"></i></a></div>
                            </div>
                        </div>
                        <div class="service-box service-box-greybg service-box--hiddenbtn">
                            <div class="service-box-caption text-center">
                                <div class="service-box-icon"><i class="icon-target"></i></div>
                                <div class="service-box-icon-bg"><i class="icon-target"></i></div>
                                <h3 class="service-box-title">Tell us about your goals and vision for the future
                                </h3>
                                <p>We would love to hear from you </p>
                                <div class="btn-wrap"><a href="/contactus" class="btn"><i
                                            class="icon-right-arrow"></i><span>Know more</span><i
                                            class="icon-right-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters services-box-wrap services-box-wrap-mobile">
                <div class="service-box-rotator js-service-box-rotator">
                    <div class="service-box service-box-greybg service-box--hiddenbtn">
                        <div class="service-box-caption text-center">
                            <div class="service-box-icon"><i class="icon-instagram"></i></div>
                            <div class="service-box-icon-bg"><i class="icon-instagram"></i></div>
                            <h3 class="service-box-title">Online TEFL certification</h3>
                            <p>With a little help from Erudite, you can earn your TEFL or Early Years certifications
                                from the comfort of your own home</p>
                            <div class="btn-wrap"><a href="/" class="btn"><i
                                        class="icon-right-arrow"></i><span>Know more</span><i
                                        class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                    <div class="service-box service-box-greybg service-box--hiddenbtn">
                        <div class="service-box-caption text-center">
                            <div class="service-box-icon"><i class="icon-user-check"></i></div>
                            <div class="service-box-icon-bg"><i class="icon-user-check"></i></div>
                            <h3 class="service-box-title">Find the right teachers for you</h3>
                            <p>highly recommended for teachers from
                                <br>non-native English speaking countries</p>
                            <div class="btn-wrap"><a href="/" class="btn"><i
                                        class="icon-right-arrow"></i><span>Know more</span><i
                                        class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                    <div class="service-box service-box-greybg service-box--hiddenbtn">
                        <div class="service-box-caption text-center">
                            <div class="service-box-icon"><i class="icon-target"></i></div>
                            <div class="service-box-icon-bg"><i class="icon-target"></i></div>
                            <h3 class="service-box-title">Tell us about your goals and vision for the future</h3>
                            <p>We would love to hear from you</p>
                            <div class="btn-wrap"><a href="/" class="btn"><i
                                        class="icon-right-arrow"></i><span>Know more</span><i
                                        class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                    <div class="service-box service-box-greybg service-box--hiddenbtn">
                        <div class="service-box-caption text-center">
                            <div class="service-box-icon"><i class="icon-emergency"></i></div>
                            <div class="service-box-icon-bg"><i class="icon-emergency"></i></div>
                            <h3 class="service-box-title">And many more ...</h3>
                            <p>Helping hundreds of people each year find
                                <br>immediate jobs</p>
                            <div class="btn-wrap"><a href="/" class="btn"><i
                                        class="icon-right-arrow"></i><span>Know more</span><i
                                        class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section services-->
    <!--section why choose us-->
    <div class="section">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">Why Work With Us?</div>
                <h2 class="h1">Our strength factors were generated from</h2>
                <div class="h-decor"></div>
            </div>
            <div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left"
                data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
                <div class="col-md">
                    <div class="icn-text icn-text-wmax">
                        <div class="icn-text-circle"><i class="icon-briefcase"></i></div>
                        <div>
                            <h5 class="icn-text-title">Job Opportunity</h5>
                            <p>At Erudite, we offer high-quality job opportunities to teachers all over the world.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="icn-text icn-text-wmax">
                        <div class="icn-text-circle"><i class="icon-trending-up"></i></div>
                        <div>
                            <h5 class="icn-text-title">Process and Efficiency</h5>
                            <p>Erudite has streamlined the process for teachers to apply to our organization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="icn-text">
                        <div class="icn-text-circle"><i class="icon-clock"></i></div>
                        <div>
                            <h5 class="icn-text-title">Services Without Time Differences</h5>
                            <p>Our recruitment team focus solely on sourcing teachers from South Africa, Ireland,
                                The United States, Canada and The UK.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="icn-text">
                        <div class="icn-text-circle"><i class="icon-sliders"></i></div>
                        <div>
                            <h5 class="icn-text-title">Training Programs</h5>
                            <p>We facilitate a TEFL program accredited by the department of education in South
                                Africa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="icn-text">
                        <div class="icn-text-circle"><i class="icon-pocket"></i></div>
                        <div>
                            <h5 class="icn-text-title">Teacher Recruitment</h5>
                            <p>At Erudite, we have a reliable and efficient global direct platform for teachers to
                                apply through.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section why choose us-->
    <!--section testimonials-->
    <div class="section bg-grey py-0">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-sm-8 col-lg-6 mt-2 mt-lg-0 order-1 order-sm-0">
                    <div class="reviews-wrap ml-auto d-flex flex-column justify-content-center">
                        <div class="title-wrap text-center text-md-right">
                            <div class="h-sub">What Our Customers Says</div>
                            <h2 class="h1">Customer <span class="theme-color">Testimonials</span></h2>
                        </div>
                        <div class="js-reviews-carousel reviews-carousel text-center text-md-right">
                            <div class="review">
                                <p class="review-text">I would highly recommend Byron and his team to anyone wanting
                                    to teach abroad. I've had a really good experience with
                                    Erudite. I never felt lost or panicked whilst going through this process,
                                    everything is explained clearly and precisely.
                                    I am very happy with the process. They find a position that is best suited to
                                    you after chatting to you and listening to
                                    your concerns and requests. Their assistance and guidance with this process have
                                    been amazing. Thanks to Erudite.</p>
                                <p><span class="review-author">Tamryn Cronje</span> <span
                                        class="review-author-position">— Port Elizabeth, South Africa</span></p>
                            </div>
                            <div class="review">
                                <p class="review-text">It's been a great pleasure working with Byron... I love how
                                    personally involved he was with the entire process... He
                                    never gave us anything to worry about and this was amazing because I'm a very
                                    anxious person... He totally understands
                                    that married couples want to be together especially when they are moving to a
                                    new country and he even went as far to
                                    give us tips on how to survive in China... Thanks so much for the absolutely
                                    amazing service Teach Erudite I will
                                    definitely use you again and recommend you.</p>
                                <p><span class="review-author">Cemone Naicker</span> <span
                                        class="review-author-position">— Cape Town, South Africa</span></p>
                            </div>
                            <div class="review">
                                <p class="review-text">I worked with Lelo! He is so good at what he does! I
                                    literally had to do nothing!!! He responded to all of our questions
                                    as soon as he could! He was literally available 24/7!!! If it was not for him
                                    and his company my husband and child would
                                    not have joined me immediately!!! I would recommend Lelo and his team to
                                    anyone!!!</p>
                                <p><span class="review-author">Bianca Gerber,</span> <span
                                        class="review-author-position">— Ajman, United Arab Emirates</span></p>
                            </div>
                            <div class="review">
                                <p class="review-text">Byron has been very helpful, knowledgeable, and reliable on
                                    many occasions.
                                    He will give you honest advice and opinions.
                                    He and his team have been a great support in working abroad.</p>
                                <p><span class="review-author">Megs Rogers</span> <span
                                        class="review-author-position">— Ho Chi Minh, Vietnam</span></p>
                            </div>
                            <div class="review">
                                <p class="review-text">I quite honestly don’t think that Byron and Lelo could have
                                    been better. They held my hand literally every step of the
                                    way. I’ve sent my documents off today and will update on how it goes thereafter.
                                    These gents are seriously amazing at
                                    what they do and they deserve the praise I’m giving them.</p>
                                <p><span class="review-author">Jarrod Frankel</span> <span
                                        class="review-author-position">— Johannesburg, South Africa</span></p>
                            </div>
                            <div class="review">
                                <p class="review-text">It was a pleasure working with Byron. he provided me with
                                    such great service and is always willing to help and give
                                    important information. Byron is well connected and professional at all times. He
                                    is patient and accommodating. I
                                    strongly recommend Erudite. Best place for anyone looking for jobs</p>
                                <p><span class="review-author">Mishka Eshmail</span> <span
                                        class="review-author-position">— Chengdu China</span></p>
                            </div>
                            <div class="review">
                                <p class="review-text">An absolute pleasure to deal with, Byron offers a great
                                    service and will guide you throughout your process!</p>
                                <p><span class="review-author">Mishka Eshmail</span> <span
                                        class="review-author-position">— Chengdu China</span></p>
                            </div>
                            <div class="review">
                                <p class="review-text">I would like to thank Byron at Erudite for his wonderful
                                    service, patience and willingness to listen. He has gone above
                                    and beyond to assist me in this stressful process. I would highly recommend his
                                    services to anyone wanting to teach
                                    abroad.</p>
                                <p><span class="review-author">Tarryn Stow</span> <span
                                        class="review-author-position">— Manama, Bahrain</span></p>
                            </div>
                            <div class="review">
                                <p class="review-text">An absolute pleasure to deal with, Byron offers a great
                                    service and will guide you throughout your process!</p>
                                <p><span class="review-author">Justin Radloff</span> <span
                                        class="review-author-position">— East London, South Africa</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-6 order-0 order-sm-1 reviews-photo">
                    <img src="images/content/testimonials-right.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--//section testimonials-->
    <!--section achieved-->
    <div class="section">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">Certificates</div>
                <h2 class="h1">What Have We Achieved</h2>
                <div class="h-decor"></div>
            </div>
            <p class="text-center max-900">Erudite has been awarded several appreciation certificates and letters
                from the government of south africa as well as clients because of the best performance and services
                provided for both.</p>
            <div class="row d-block js-counter-carousel">
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><i class="icon-smile"></i></div>
                        <div class="counter-box-number"><span class="count" data-to="50" data-speed="1500">0</span>
                            &plus;</div>
                        <div class="decor"></div>
                        <div class="counter-box-text">Happy Clients</div>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><i class="icon-users"></i></div>
                        <div class="counter-box-number"><span class="count" data-to="120" data-speed="1500">0</span>
                            </div>
                        <div class="decor"></div>
                        <div class="counter-box-text">Teachers Recruited</div>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><i class="icon-price-tag"></i></div>
                        <div class="counter-box-number"><span class="count" data-to="50" data-speed="1500">0</span>
                            &plus;</div>
                        <div class="decor"></div>
                        <div class="counter-box-text">Schools Served</div>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><i class="icon-toggle-right"></i></div>
                        <div class="counter-box-number"><span class="count" data-to="10" data-speed="1500">0</span>
                            &plus;</div>
                        <div class="decor"></div>
                        <div class="counter-box-text">Professional Trainers</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section achieved-->
    <!--group activities gallery-->
    <div class="section mb-7">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">Group Activities</div>
                <h2 class="h1">Participate in our social development program</h2>
                <div class="h-decor"></div>
            </div>
            <p class="text-center max-900">Join our happy family</p>
            <div class="mt-2 mt-md-3 mt-lg-5"></div>
            <div class="sm-gallery-row row no-gutters mx-lg-15">
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-01.jpg"><img
                            src="images/content/gallery/smile-gallery-01.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-02.jpg"><img
                            src="images/content/gallery/smile-gallery-02.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-03.jpg"><img
                            src="images/content/gallery/smile-gallery-03.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-04.jpg"><img
                            src="images/content/gallery/smile-gallery-04.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-05.jpg"><img
                            src="images/content/gallery/smile-gallery-05.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-06.jpg"><img
                            src="images/content/gallery/smile-gallery-06.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-07.jpg"><img
                            src="images/content/gallery/smile-gallery-07.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-08.jpg"><img
                            src="images/content/gallery/smile-gallery-08.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-09.jpg"><img
                            src="images/content/gallery/smile-gallery-09.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-10.jpg"><img
                            src="images/content/gallery/smile-gallery-10.jpg" alt="" class="img-fluid"></span></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-section')
    @include('layout.footer')
@endsection