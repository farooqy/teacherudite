@extends('layout.mainlayout')

@section('page-content')
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span>Jobs Board</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">Open Positions</div>
                <h1>Jobs Board</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container">
            <div class="text-center mb-3 mb-md-4 max-900">
                <p></p>
            </div>
            <div class="filters-by-category mb-2 mb-lg-4">
                <ul class="option-set justify-content-center" data-option-key="filter">
                    <li><a href="#filter" data-option-value="*" class="selected">All</a></li>
                    <li><a href="#filter" data-option-value=".category1">Africa</a></li>
                    <li><a href="#filter" data-option-value=".category2">Middle East</a></li>
                    <li><a href="#filter" data-option-value=".category3">ESL Teacher</a></li>
                    <li><a href="#filter" data-option-value=".category5">Kindergarten</a></li>
                    <li><a href="#filter" data-option-value=".category6">South Africa</a></li>
                    <li><a href="#filter" data-option-value=".category7">China</a></li>
                    <li><a href="#filter" data-option-value=".category5">Dubai</a></li>
                    <li><a href="#filter" data-option-value=".category8">Oman</a></li>
                </ul>
            </div>
            <div class="gallery-wrap loaded">
                <div class="loading-content">
                    <div class="inner-circles-loader"></div>
                </div>
                <div class="gallery-smiles gallery-isotope" id="gallery">
                    <div class="gallery-item category2 category7">
                        <a href="/jobs">
                            <img src="/images/content/gallery/smile-01.jpg" alt="">
                            <div class="after-label">China</div>
                            <div class="before-label">Chengdu</div>
                            <div class="gallery-caption">
                                <h5>Chengdu, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 10 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – paid for
                                    <br>
                                    Medical – provided
                                    <br>
                                    Phase – primary
                                    <br>
                                    Subjects – English</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category1 category5 category8">
                        <a href="/jobs">
                            <img src="/images/content/gallery/smile-02.jpg" alt="">
                            <div class="after-label">China</div>
                            <div class="before-label">Shanghai</div>
                            <div class="gallery-caption">
                                <h5>Shanghai, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 16 000
                                    <br>
                                    Accommodation – single room accomodation provided
                                    <br>
                                    Flights – reimbursed
                                    <br>
                                    Medical – provided
                                    <br>
                                    Phase – primary
                                    <br>
                                    Subjects – English, Science, Art, Drama</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category2 category4 category3">
                        <a href="/jobs"><img src="/images/content/gallery/smile-03.jpg" alt=""></a>
                        <div class="after-label">China</div>
                        <div class="before-label">Hangzhou</div>
                        <div class="gallery-caption">
                            <h5>Hangzhou, China</h5>
                            <p>Minimum requirement – Bachelors degree
                                <br>
                                Starting Salary – RMB 10 000
                                <br>
                                Accommodation – provided
                                <br>
                                Flights – paid for
                                <br>
                                Medical – provided
                                <br>
                                Phase – primary
                                <br>
                                Subjects – English</p>
                        </div>
                    </div>
                    <div class="gallery-item category4 category8 category6">
                        <a href="/jobs">
                            <img src="/images/content/gallery/smile-04.jpg" alt="">
                            <div class="after-label">China</div>
                            <div class="before-label">Chengdu</div>
                            <div class="gallery-caption">
                                <h5>Chengdu, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 10 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – paid for
                                    <br>
                                    Medical – provided
                                    <br>
                                    Phase – primary
                                    <br>
                                    Subjects – English</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category3 category7">
                        <a href="/jobs">
                            <img src="/images/content/gallery/smile-05.jpg" alt="">
                            <div class="after-label">China</div>
                            <div class="before-label">Chengdu</div>
                            <div class="gallery-caption">
                                <h5>Chengdu, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 10 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – paid for
                                    <br>
                                    Medical – provided
                                    <br>
                                    Phase – primary
                                    <br>
                                    Subjects – English</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category4 category7 category3">
                        <a href="/jobs">
                            <img src="/images/content/gallery/smile-06.jpg" alt="">
                            <div class="after-label">China</div>
                            <div class="before-label">Chengdu</div>
                            <div class="gallery-caption">
                                <h5>Chengdu, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 10 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – paid for
                                    <br>
                                    Medical – provided
                                    <br>
                                    Phase – primary
                                    <br>
                                    Subjects – English</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category1 category8">
                        <a href="/jobs">
                            <img src="/images/content/gallery/smile-07.jpg" alt="">
                            <div class="after-label">China</div>
                            <div class="before-label">Chengdu</div>
                            <div class="gallery-caption">
                                <h5>Chengdu, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 10 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – paid for
                                    <br>
                                    Medical – provided
                                    <br>
                                    Phase – primary
                                    <br>
                                    Subjects – English</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category2 category6">
                        <a href="/jobs">
                            <img src="/images/content/gallery/smile-08.jpg" alt="">
                            <div class="after-label">China</div>
                            <div class="before-label">Chengdu</div>
                            <div class="gallery-caption">
                                <h5>Chengdu, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 10 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – paid for
                                    <br>
                                    Medical – provided
                                    <br>
                                    Phase – primary
                                    <br>
                                    Subjects – English</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
