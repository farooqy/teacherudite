@extends('layout.mainlayout')

@section('page-content')
<div class="page-content">
    <!--section slider-->
    <div class="section mt-0">
        <div id="mainSliderWrapper">
            <div class="loading-content disable">
                <div class="inner-circles-loader"></div>
            </div>
            <div class="main-slider arrows-white arrows-bottom slick-initialized slick-slider" id="mainSlider"
                data-slick="{&quot;arrows&quot;: false, &quot;dots&quot;: true}">
                <div aria-live="polite" class="slick-list draggable" tabindex="0">
                    <div class="slick-track" style="opacity: 1; width: 4072px;">
                        <div class="slide slick-slide" data-slick-index="0" aria-hidden="true"
                            style="width: 2036px; position: relative; left: 0px; top: 0px; z-index: 800; opacity: 0;">
                            <div class="img--holder" data-animation="kenburns"
                                data-bg="images/content/slider/slide-02.jpg"
                                style="background-image: url(&quot;images/content/slider/slide-02.jpg&quot;);"></div>
                            <div class="slide-content center">
                                <div class="vert-wrap container">
                                    <div class="vert">
                                        <div class="container">
                                            <div class="slide-txt1" data-animation="fadeInDown"
                                                data-animation-delay="1s">A fresh approach to recruitment for
                                                <br><b>Schools and Teachers</b></div>
                                            <div class="slide-txt2" data-animation="fadeInUp"
                                                data-animation-delay="1.5s">Develop fruitful and proactive partnerships
                                                with schools and teachers</div>
                                            <div class="slide-btn"><a href="services.html" class="btn btn-white"
                                                    data-animation="fadeInUp" data-animation-delay="2s"><i
                                                        class="icon-right-arrow"></i><span>View our latest jobs</span><i
                                                        class="icon-right-arrow"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                            style="width: 2036px; position: relative; left: -2036px; top: 0px; z-index: 900; opacity: 1;">
                            <div class="img--holder animated kenburns" data-animation="kenburns"
                                data-bg="images/content/slider/slide-01.jpg"
                                style="background-image: url(&quot;images/content/slider/slide-01.jpg&quot;);"></div>
                            <div class="slide-content center">
                                <div class="vert-wrap container">
                                    <div class="vert">
                                        <div class="container">
                                            <div class="slide-txt1" data-animation="fadeInDown"
                                                data-animation-delay="1s">This will also be ERUDITE's
                                                <br><b>Company Motto</b></div>
                                            <div class="slide-txt2" data-animation="fadeInUp"
                                                data-animation-delay="1.5s">Offering flexible support tailored to your
                                                exacting requirements</div>
                                            <div class="slide-btn"><a href="services.html" class="btn btn-white"
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

                <ul class="slick-dots" style="">
                    <li class="" aria-hidden="true"><button type="button" data-role="none">1</button></li>
                    <li aria-hidden="false" class="slick-active"><button type="button" data-role="none">2</button></li>
                </ul>
            </div>
        </div>
    </div>
    <!--//section slider-->
    <!--section welcome-->
    <div class="section">
        <div class="container pt-lg-2">
            <div class="title-wrap text-center text-md-left d-lg-none mb-lg-2">
                <div class="h-sub">Leading Experts in</div>
                <h2 class="h1">International Teacher<br class="d-sm-none"><span class="theme-color">Recruitment</span>
                </h2>
            </div>
            <div class="row mt-2 mt-md-3 mt-lg-0">
                <div class="col-md-6">
                    <div class="title-wrap hidden d-none d-lg-block text-center text-md-left">
                        <div class="h-sub">Leading Experts in</div>
                        <h2 class="h1">International Teacher <br class="d-sm-none"><span
                                class="theme-color">Recruitment</span></h2>
                    </div>
                    <div>
                        <p>Whether you’re looking to attract highly skilled teachers in the Middle East, Asia or South
                            East Asia, or wish to expand on your teaching skills and knowledge with an ambitious yet
                            rewarding job role, Erudite is by your side every step of the way, offering expert support
                            and guidance. </p>
                        <p>Our dependable team operates from Port Elizabeth in the Eastern Cape Province of South
                            Africa, as well as Dublin; the capital and largest city of Ireland. Over the years, we’ve
                            developed a deep understanding of the education sector, meaning we’re best placed to carry
                            out reviews, assessments and interviews, ...</p>
                    </div>
                    <div class="mt-2 mt-md-4"></div>
                    <a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">Learn more<i
                            class="icon-right-arrow"></i></a>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <div class="video-wrap embed-responsive embed-responsive-16by9">
                        
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jOBlM9coeRw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <div class="service-box-rotator js-service-box-rotator slick-initialized slick-slider">
                        <div aria-live="polite" class="slick-list draggable" tabindex="0">
                            <div class="slick-track" style="opacity: 1; width: 1368px;">
                                <div class="service-box service-box-greybg service-box--hiddenbtn slick-slide"
                                    data-slick-index="0" aria-hidden="true"
                                    style="width: 669px; position: relative; left: 0px; top: 0px; z-index: 800; opacity: 0;">
                                    <div class="service-box-caption text-center">
                                        <div class="service-box-icon"><i class="icon-award-circle"></i></div>
                                        <div class="service-box-icon-bg"><i class="icon-award-circle"></i></div>
                                        <h3 class="service-box-title">Online TEFL certification</h3>
                                        <p>With a little help from Erudite, you can earn your TEFL or Early Years
                                            certifications from the comfort of your own home</p>
                                        <div class="btn-wrap"><a href="service-page.html" class="btn"><i
                                                    class="icon-right-arrow"></i><span>Know more</span><i
                                                    class="icon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                                <div class="service-box service-box-greybg service-box--hiddenbtn slick-slide slick-active"
                                    data-slick-index="1" aria-hidden="false"
                                    style="width: 669px; position: relative; left: -684px; top: 0px; z-index: 900; opacity: 1;">
                                    <div class="service-box-caption text-center">
                                        <div class="service-box-icon"><i class="icon-user-check"></i></div>
                                        <div class="service-box-icon-bg"><i class="icon-user-check"></i></div>
                                        <h3 class="service-box-title">Find the right teachers for you</h3>
                                        <p>A TEFL Certification allows you to Teach English as a Foreign Language in a
                                            foreign country (non-native English speaking country)</p>
                                        <div class="btn-wrap"><a href="service-page.html" class="btn"><i
                                                    class="icon-right-arrow"></i><span>Know more</span><i
                                                    class="icon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-8 order-2">
                    <div class="service-box">
                        <div class="service-box-image" data-bg="images/content/Web1920–3.png"
                            style="background-image: url(&quot;images/content/Web1920–3.png&quot;);"></div>
                        <div class="service-box-caption text-center w-50 ml-auto">
                            <h3 class="service-box-title">Discover your dream teaching job today</h3>
                            <p>Whether you’ve always longed to become a TEFL teacher in China, Dubai or Vietnam, we can
                                work with you to realise and fulfill your goals</p>
                            <div class="btn-wrap"><a href="service-page.html" class="btn"><i
                                        class="icon-right-arrow"></i><span>Know more</span><i
                                        class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-8 order-3 order-lg-4 order-xl-3">
                    <div class="service-box">
                        <div class="service-box-image" data-bg="images/content/Web1920–4.png"
                            style="background-image: url(&quot;images/content/Web1920–4.png&quot;);"></div>
                        <div class="service-box-caption text-center w-50 ml-auto">
                            <h3 class="service-box-title">A supportive &amp; tailored approach to TEFL and Early Years
                                training</h3>
                            <p>You can quickly and easily purchase the relevant program from our website and begin your
                                course immediately, and this really is the start of an exciting journey</p>
                            <div class="btn-wrap"><a href="service-page.html" class="btn"><i
                                        class="icon-right-arrow"></i><span>Know more</span><i
                                        class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-4 order-5">
                    <div class="service-box-rotator js-service-box-rotator slick-initialized slick-slider">
                        <div aria-live="polite" class="slick-list draggable" tabindex="0">
                            <div class="slick-track" style="opacity: 1; width: 1368px;">
                                <div class="service-box service-box-greybg service-box--hiddenbtn slick-slide slick-active"
                                    data-slick-index="0" aria-hidden="false"
                                    style="width: 669px; position: relative; left: 0px; top: 0px; z-index: 900; opacity: 1;">
                                    <div class="service-box-caption text-center">
                                        <div class="service-box-icon"><i class="icon-target"></i></div>
                                        <div class="service-box-icon-bg"><i class="icon-target"></i></div>
                                        <h3 class="service-box-title">Tell us about your goals and vision for the future
                                        </h3>
                                        <p>We would love to hear from you </p>
                                        <div class="btn-wrap"><a href="service-page.html" class="btn"><i
                                                    class="icon-right-arrow"></i><span>Know more</span><i
                                                    class="icon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                                <div class="service-box service-box-greybg service-box--hiddenbtn slick-slide"
                                    data-slick-index="1" aria-hidden="true"
                                    style="width: 669px; position: relative; left: -684px; top: 0px; z-index: 800; opacity: 0;">
                                    <div class="service-box-caption text-center">
                                        <div class="service-box-icon"><i class="icon-target"></i></div>
                                        <div class="service-box-icon-bg"><i class="icon-target"></i></div>
                                        <h3 class="service-box-title">Tell us about your goals and vision for the future
                                        </h3>
                                        <p>We would love to hear from you </p>
                                        <div class="btn-wrap"><a href="service-page.html" class="btn"><i
                                                    class="icon-right-arrow"></i><span>Know more</span><i
                                                    class="icon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row no-gutters services-box-wrap services-box-wrap-mobile">
                <div class="service-box-rotator js-service-box-rotator slick-initialized slick-slider">
                    <div aria-live="polite" class="slick-list draggable" tabindex="0">
                        <div class="slick-track" style="opacity: 1; width: 0px;">
                            <div class="service-box service-box-greybg service-box--hiddenbtn slick-slide"
                                data-slick-index="0" aria-hidden="true"
                                style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 800; opacity: 0;">
                                <div class="service-box-caption text-center">
                                    <div class="service-box-icon"><i class="icon-instagram"></i></div>
                                    <div class="service-box-icon-bg"><i class="icon-instagram"></i></div>
                                    <h3 class="service-box-title">Online TEFL certification</h3>
                                    <p>With a little help from Erudite, you can earn your TEFL or Early Years
                                        certifications from the comfort of your own home</p>
                                    <div class="btn-wrap"><a href="service-page.html" class="btn"><i
                                                class="icon-right-arrow"></i><span>Know more</span><i
                                                class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                            <div class="service-box service-box-greybg service-box--hiddenbtn slick-slide slick-active"
                                data-slick-index="1" aria-hidden="false"
                                style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 900; opacity: 1;">
                                <div class="service-box-caption text-center">
                                    <div class="service-box-icon"><i class="icon-user-check"></i></div>
                                    <div class="service-box-icon-bg"><i class="icon-user-check"></i></div>
                                    <h3 class="service-box-title">Find the right teachers for you</h3>
                                    <p>highly recommended for teachers from
                                        <br>non-native English speaking countries</p>
                                    <div class="btn-wrap"><a href="service-page.html" class="btn"><i
                                                class="icon-right-arrow"></i><span>Know more</span><i
                                                class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                            <div class="service-box service-box-greybg service-box--hiddenbtn slick-slide"
                                data-slick-index="2" aria-hidden="true"
                                style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 800; opacity: 0;">
                                <div class="service-box-caption text-center">
                                    <div class="service-box-icon"><i class="icon-target"></i></div>
                                    <div class="service-box-icon-bg"><i class="icon-target"></i></div>
                                    <h3 class="service-box-title">Tell us about your goals and vision for the future
                                    </h3>
                                    <p>We would love to hear from you</p>
                                    <div class="btn-wrap"><a href="service-page.html" class="btn"><i
                                                class="icon-right-arrow"></i><span>Know more</span><i
                                                class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                            <div class="service-box service-box-greybg service-box--hiddenbtn slick-slide"
                                data-slick-index="3" aria-hidden="true"
                                style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 800; opacity: 0;">
                                <div class="service-box-caption text-center">
                                    <div class="service-box-icon"><i class="icon-emergency"></i></div>
                                    <div class="service-box-icon-bg"><i class="icon-emergency"></i></div>
                                    <h3 class="service-box-title">And many more ...</h3>
                                    <p>Helping hundreds of people each year find
                                        <br>immediate jobs</p>
                                    <div class="btn-wrap"><a href="service-page.html" class="btn"><i
                                                class="icon-right-arrow"></i><span>Know more</span><i
                                                class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
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
                data-slick="{&quot;slidesToShow&quot;: 3, &quot;responsive&quot;:[{&quot;breakpoint&quot;: 1024,&quot;settings&quot;:{&quot;slidesToShow&quot;: 2}}]}">





                <div class="col-md" style="">
                    <div class="icn-text icn-text-wmax">
                        <div class="icn-text-circle"><i class="icon-briefcase"></i></div>
                        <div>
                            <h5 class="icn-text-title">Job Opportunity</h5>
                            <p>At Erudite, we offer high-quality job opportunities to teachers all over the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md" style="">
                    <div class="icn-text icn-text-wmax">
                        <div class="icn-text-circle"><i class="icon-trending-up"></i></div>
                        <div>
                            <h5 class="icn-text-title">Process and Efficiency</h5>
                            <p>Erudite has streamlined the process for teachers to apply to our organization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md" style="">
                    <div class="icn-text">
                        <div class="icn-text-circle"><i class="icon-clock"></i></div>
                        <div>
                            <h5 class="icn-text-title">Services Without Time Differences</h5>
                            <p>Our recruitment team focus solely on sourcing teachers from South Africa, Ireland, The
                                United States, Canada and The UK.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md" style="">
                    <div class="icn-text">
                        <div class="icn-text-circle"><i class="icon-sliders"></i></div>
                        <div>
                            <h5 class="icn-text-title">Training Programs</h5>
                            <p>We facilitate a TEFL program accredited by the department of education in South Africa.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md" style="">
                    <div class="icn-text">
                        <div class="icn-text-circle"><i class="icon-pocket"></i></div>
                        <div>
                            <h5 class="icn-text-title">Teacher Recruitment</h5>
                            <p>At Erudite, we have a reliable and efficient global direct platform for teachers to apply
                                through.</p>
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
                        <div
                            class="js-reviews-carousel reviews-carousel text-center text-md-right slick-initialized slick-slider">
                            <div aria-live="polite" class="slick-list draggable" tabindex="0">
                                <div class="slick-track"
                                    style="opacity: 1; width: 2415px; transform: translate3d(-966px, 0px, 0px);">
                                    <div class="review slick-slide slick-cloned" data-slick-index="-1"
                                        aria-hidden="true" style="width: 483px;">
                                        <p class="review-text">A great company with a unique way of doing things. I felt
                                            comfortable throughout my experience and I am grateful for the opportunity.
                                        </p>
                                        <p><span class="review-author">- Jade Elizabeth Du Toit,</span> <span
                                                class="review-author-position">Port Elizabeth, South Africa</span></p>
                                    </div>
                                    <div class="review slick-slide" data-slick-index="0" aria-hidden="true"
                                        style="width: 483px;">
                                        <p class="review-text">Thank you to Erudite for being efficient, and for being
                                            so supportive throughout my experience. Teaching in China changed my life!
                                        </p>
                                        <p><span class="review-author">- Michael Ionedes,</span> <span
                                                class="review-author-position">Port Elizabeth, South Africa</span></p>
                                    </div>
                                    <div class="review slick-slide slick-active" data-slick-index="1"
                                        aria-hidden="false" style="width: 483px;">
                                        <p class="review-text">It was a pleasure dealing with the company. I recommend
                                            them to anyone looking at teaching in China.</p>
                                        <p><span class="review-author">- Nicole Van Staaden,</span> <span
                                                class="review-author-position">East London, South Africa</span></p>
                                    </div>
                                    <div class="review slick-slide" data-slick-index="2" aria-hidden="true"
                                        style="width: 483px;">
                                        <p class="review-text">A great company with a unique way of doing things. I felt
                                            comfortable throughout my experience and I am grateful for the opportunity.
                                        </p>
                                        <p><span class="review-author">- Jade Elizabeth Du Toit,</span> <span
                                                class="review-author-position">Port Elizabeth, South Africa</span></p>
                                    </div>
                                    <div class="review slick-slide slick-cloned" data-slick-index="3" aria-hidden="true"
                                        style="width: 483px;">
                                        <p class="review-text">Thank you to Erudite for being efficient, and for being
                                            so supportive throughout my experience. Teaching in China changed my life!
                                        </p>
                                        <p><span class="review-author">- Michael Ionedes,</span> <span
                                                class="review-author-position">Port Elizabeth, South Africa</span></p>
                                    </div>
                                </div>
                            </div>


                            <button type="button" data-role="none" class="slick-prev" aria-label="previous"
                                style="">Previous<span class="icon-wrap"></span></button><button type="button"
                                data-role="none" class="slick-next" aria-label="next" style="">Next<span
                                    class="icon-wrap"></span></button>
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
            <p class="text-center max-900">Erudite has been awarded several appreciation certificates and letters from
                the government of south africa as well as clients because of the best performance and services provided
                for both.</p>
            <div class="row d-block js-counter-carousel slick-initialized slick-slider">
                <div aria-live="polite" class="slick-list draggable" tabindex="0">
                    <div class="slick-track" style="opacity: 1; width: 1200px; transform: translate3d(0px, 0px, 0px);">
                        <div class="col slick-slide slick-active" data-slick-index="0" aria-hidden="false"
                            style="width: 300px;">
                            <div class="counter-box counted">
                                <div class="counter-box-icon"><i class="icon-smile"></i></div>
                                <div class="counter-box-number"><span class="count" data-to="200"
                                        data-speed="1500">200</span> +</div>
                                <div class="decor"></div>
                                <div class="counter-box-text">Happy Clients</div>
                            </div>
                        </div>
                        <div class="col slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                            style="width: 300px;">
                            <div class="counter-box counted">
                                <div class="counter-box-icon"><i class="icon-users"></i></div>
                                <div class="counter-box-number"><span class="count" data-to="120"
                                        data-speed="1500">120</span> +</div>
                                <div class="decor"></div>
                                <div class="counter-box-text">Teachers Recruited</div>
                            </div>
                        </div>
                        <div class="col slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                            style="width: 300px;">
                            <div class="counter-box counted">
                                <div class="counter-box-icon"><i class="icon-price-tag"></i></div>
                                <div class="counter-box-number"><span class="count" data-to="110"
                                        data-speed="1500">110</span> +</div>
                                <div class="decor"></div>
                                <div class="counter-box-text">Schools Served</div>
                            </div>
                        </div>
                        <div class="col slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                            style="width: 300px;">
                            <div class="counter-box counted">
                                <div class="counter-box-icon"><i class="icon-toggle-right"></i></div>
                                <div class="counter-box-number"><span class="count" data-to="20"
                                        data-speed="1500">20</span> +</div>
                                <div class="decor"></div>
                                <div class="counter-box-text">Professional Trainers</div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!--//section achieved-->

    <!--section clients gallery-->
    <div class="section mb-7">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">Group Activities</div>
                <h2 class="h1">Participation in our Live Activities</h2>
                <div class="h-decor"></div>
            </div>
            <p class="text-center max-900">Join our happy family</p>
            <div class="mt-2 mt-md-3 mt-lg-5"></div>
            <div class="sm-gallery-row row no-gutters mx-lg-15">
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-01.jpg" data-original-title=""
                        title=""><img src="images/content/gallery/smile-gallery-01.jpg" alt="" class="img-fluid"></span>
                </div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-02.jpg" data-original-title=""
                        title=""><img src="images/content/gallery/smile-gallery-02.jpg" alt="" class="img-fluid"></span>
                </div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-03.jpg" data-original-title=""
                        title=""><img src="images/content/gallery/smile-gallery-03.jpg" alt="" class="img-fluid"></span>
                </div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-04.jpg" data-original-title=""
                        title=""><img src="images/content/gallery/smile-gallery-04.jpg" alt="" class="img-fluid"></span>
                </div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-05.jpg" data-original-title=""
                        title=""><img src="images/content/gallery/smile-gallery-05.jpg" alt="" class="img-fluid"></span>
                </div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-06.jpg" data-original-title=""
                        title=""><img src="images/content/gallery/smile-gallery-06.jpg" alt="" class="img-fluid"></span>
                </div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-07.jpg" data-original-title=""
                        title=""><img src="images/content/gallery/smile-gallery-07.jpg" alt="" class="img-fluid"></span>
                </div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-08.jpg" data-original-title=""
                        title=""><img src="images/content/gallery/smile-gallery-08.jpg" alt="" class="img-fluid"></span>
                </div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-09.jpg" data-original-title=""
                        title=""><img src="images/content/gallery/smile-gallery-09.jpg" alt="" class="img-fluid"></span>
                </div>
                <div class="col"><span class="gallery-popover-link"
                        data-full="images/content/gallery/smile-gallery-hover-10.jpg" data-original-title=""
                        title=""><img src="images/content/gallery/smile-gallery-10.jpg" alt="" class="img-fluid"></span>
                </div>
            </div>
            <div class="text-center mt-3 mt-lg-4">
                <a href="gallery.html" class="btn-link">View more activities<i class="icon-right-arrow"></i></a>
            </div>
        </div>
    </div>
    <!--//section clients gallery-->
</div>
@endsection
