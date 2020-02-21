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
                <p>We are able to provide teachers from all native/first language English speaking countries. 
                    Whether you require qualified teachers or graduates in other fields, we have the resources to supply your needs.</p>
            </div>
            <div class="mt-3 mt-md-0 mb-6">
                <div class="video-wrap embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cvsTaQu25_Y" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="mt-3 mt-md-0 mb-6">
                <div class="video-wrap embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2TohbtY2o5w" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="title-wrap">
                        <h5>More Information</h5>
                        <div class="h-decor"></div>
                    </div>
                    <ul class="icn-list-lg">
                        <li><i class="icon-info"></i>Interested in a recruitment drive for a large number of teachers or, 
                            <br>only looking to fill a few vacancies? Contact us directly on WhatsApp/Phone or email
                        </li>
                    </ul>
                </div>
                <div class="col-md mt-3 mt-md-0">
                    <div class="title-wrap">
                        <h5>Contact Info</h5>
                        <div class="h-decor"></div>
                    </div>
                    <ul class="icn-list-lg">
                        <li><i class="icon-telephone"></i><span class="phone"><span class="text-nowrap">+27(0) 68 542 
                                    8066</span></li>
                        <li><i class="icon-whatsapp"></i><span class="text-nowrap">+971 58
                                    971 3885</span></li>
                        <li><i class="icon-black-envelope"></i><a
                                href="mailto:byron@teacherudite.com">byron@teacherudite.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section mt-5">
            <div class="container">
                <div class="bg-grey-sm">
                    <ul class="icn-list-lg ml-2">
                        <li><i class="icon-star"></i>Want to Advertise an open job position on our website? <a href="/jobs#advertisementForm" class="ad"><span>click here</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-section')
    @include('layout.footer')
@endsection