@extends('layout.mainlayout')

@section('page-content')
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span>Employers</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">Find the best</div>
                <h1>Schools &amp; Employers</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container">
            <div class="text-center mb-2 mb-md-3">
                <p>Not only do we recruit people from all E2 countries, but we can also supply teachers according to the specific needs of your school.</p>
            </div>
            <div class="filters-by-category mb-2">
                <ul class="option-set justify-content-center" data-option-key="filter">
                    <li><a href="#filter" data-option-value="*" class="selected">All</a></li>
                    <li><a href="#filter" data-option-value=".category1">Kindergarten</a></li>
                    <li><a href="#filter" data-option-value=".category2">Primary Schools</a></li>
                    <li><a href="#filter" data-option-value=".category3">Secondary schools</a></li>
                    <li><a href="#filter" data-option-value=".category4">Highschools</a></li>
                    <li><a href="#filter" data-option-value=".category5">Colleges</a></li>
                </ul>
            </div>
            <div class="gallery-specialist gallery-isotope" id="gallery-specialist">
                <div class="gallery-item category1">
                    <div class="employer-box text-center">
                        <div class="employer-box-photo">
                            <a href="/employer"><img src="/images/content/employer-01.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="employer-box-name"><a href="/employer">Employer 1</a></h5>
                        <div class="employer-box-position">Kindergarten</div>
                        <div class="employer-box-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nostrum nobis eos, et maiores illo voluptate consectetur.</p>
                        </div>
                        <div class="employer-box-bottom">
                            <div class="employer-box-phone"><i class="icon-telephone"></i><a href="tel:+1-234-567-8901">1-234-567-8901</a></div>
                            <div class="employer-box-social">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item category2 category7">
                    <div class="employer-box text-center">
                        <div class="employer-box-photo">
                            <a href="/employer"><img src="/images/content/employer-02.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="employer-box-name"><a href="/employer">School 1</a></h5>
                        <div class="employer-box-position">Highschool</div>
                        <div class="employer-box-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nostrum nobis eos, et maiores illo voluptate consectetur.</p>
                        </div>
                        <div class="employer-box-bottom">
                            <div class="employer-box-phone"><i class="icon-telephone"></i><a href="tel:+1-234-567-8901">1-234-567-8901</a></div>
                            <div class="employer-box-social">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item category3 category6">
                    <div class="employer-box text-center">
                        <div class="employer-box-photo">
                            <a href="/employer"><img src="/images/content/employer-03.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="employer-box-name"><a href="/employer">Employer</a></h5>
                        <div class="employer-box-position">College</div>
                        <div class="employer-box-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nostrum nobis eos, et maiores illo voluptate consectetur.</p>
                        </div>
                        <div class="employer-box-bottom">
                            <div class="employer-box-phone"><i class="icon-telephone"></i><a href="tel:+1-234-567-8901">1-234-567-8901</a></div>
                            <div class="employer-box-social">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item category5 category7">
                    <div class="employer-box text-center">
                        <div class="employer-box-photo">
                            <a href="employerl"><img src="/images/content/employer-04.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="employer-box-name"><a href="employerl">School 2</a></h5>
                        <div class="employer-box-position">Middle School</div>
                        <div class="employer-box-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nostrum nobis eos, et maiores illo voluptate consectetur.</p>
                        </div>
                        <div class="employer-box-bottom">
                            <div class="employer-box-phone"><i class="icon-telephone"></i><a href="tel:+1-234-567-8901">1-234-567-8901</a></div>
                            <div class="employer-box-social">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item category1 category2">
                    <div class="employer-box text-center">
                        <div class="employer-box-photo">
                            <a href="employerl"><img src="/images/content/employer-05.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="employer-box-name"><a href="employerl">Employer 2</a></h5>
                        <div class="employer-box-position">Kindergarten</div>
                        <div class="employer-box-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nostrum nobis eos, et maiores illo voluptate consectetur.</p>
                        </div>
                        <div class="employer-box-bottom">
                            <div class="employer-box-phone"><i class="icon-telephone"></i><a href="tel:+1-234-567-8901">1-234-567-8901</a></div>
                            <div class="employer-box-social">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item category3 category4">
                    <div class="employer-box text-center">
                        <div class="employer-box-photo">
                            <a href="employerl"><img src="/images/content/employer-06.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="employer-box-name"><a href="employerl">School 3</a></h5>
                        <div class="employer-box-position">College</div>
                        <div class="employer-box-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nostrum nobis eos, et maiores illo voluptate consectetur.</p>
                        </div>
                        <div class="employer-box-bottom">
                            <div class="employer-box-phone"><i class="icon-telephone"></i><a href="tel:+1-234-567-8901">1-234-567-8901</a></div>
                            <div class="employer-box-social">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item category2 category6">
                    <div class="employer-box text-center">
                        <div class="employer-box-photo">
                            <a href="employerl"><img src="/images/content/employer-07.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="employer-box-name"><a href="employerl">Employer 3</a></h5>
                        <div class="employer-box-position">Middle School</div>
                        <div class="employer-box-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nostrum nobis eos, et maiores illo voluptate consectetur.</p>
                        </div>
                        <div class="employer-box-bottom">
                            <div class="employer-box-phone"><i class="icon-telephone"></i><a href="tel:+1-234-567-8901">1-234-567-8901</a></div>
                            <div class="employer-box-social">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item category3 category7">
                    <div class="employer-box text-center">
                        <div class="employer-box-photo">
                            <a href="employerl"><img src="/images/content/employer-08.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="employer-box-name"><a href="employerl">Employer 4</a></h5>
                        <div class="employer-box-position">Highschool</div>
                        <div class="employer-box-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nostrum nobis eos, et maiores illo voluptate consectetur.</p>
                        </div>
                        <div class="employer-box-bottom">
                            <div class="employer-box-phone"><i class="icon-telephone"></i><a href="tel:+1-234-567-8901">1-234-567-8901</a></div>
                            <div class="employer-box-social">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item category1 category5">
                    <div class="employer-box text-center">
                        <div class="employer-box-photo">
                            <a href="employerl"><img src="/images/content/employer-09.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="employer-box-name"><a href="employerl">School 4</a></h5>
                        <div class="employer-box-position">Kindergarten</div>
                        <div class="employer-box-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nostrum nobis eos, et maiores illo voluptate consectetur.</p>
                        </div>
                        <div class="employer-box-bottom">
                            <div class="employer-box-phone"><i class="icon-telephone"></i><a href="tel:+1-234-567-8901">1-234-567-8901</a></div>
                            <div class="employer-box-social">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section">
        <div class="container">
            <div class="title-wrap text-center"></div>
            <div class="text-center">
                <p class="max-900">&nbsp;</p>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection