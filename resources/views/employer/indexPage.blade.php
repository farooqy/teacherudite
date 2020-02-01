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
                <p>Not only do we recruit people from all E2 countries, but we can also supply teachers according to
                    the specific needs of your school.</p>
            </div>
            <div class="mt-3 mt-md-0 mb-6">
                <div class="video-wrap embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cvsTaQu25_Y" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-section')
    @include('layout.footer')
@endsection