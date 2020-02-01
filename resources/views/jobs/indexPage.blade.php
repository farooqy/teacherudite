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
                    <div class="gallery-item category1">
                        <a href="/jobs_page">
                            <img src="../images/content/gallery/smile-01.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Hangzhou</div>
                            <div class="gallery-caption">
                                <h5>Hangzhou, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 20 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – reimbursement
                                    <br>
                                    Medical – provided
                                    <br>
                                    Start – immediately
                                    <br>
                                    Subjects – English, Science and Support</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category2">
                        <a href="/jobs_page">
                            <img src="../images/content/gallery/smile-02.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Shanghai</div>
                            <div class="gallery-caption">
                                <h5>Shanghai, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 23 000
                                    <br>
                                    Accommodation – single room accomodation provided
                                    <br>
                                    Flights – return
                                    <br>
                                    Medical – provided
                                    <br>
                                    Start – immediately
                                    <br>
                                    Subjects – Literature</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category3">
                        <a href="/jobs_page"><img src="../images/content/gallery/smile-03.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Shandong</div>
                            <div class="gallery-caption">
                                <h5>Shandong, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 14 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – return
                                    <br>
                                    Medical – provided
                                    <br>
                                    Start – immediately
                                    <br>
                                    Subjects – English to Chinese learners, prepare materials and assignments,
                                    arrange and evaluate exams</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category4">
                        <a href="/jobs_page"><img src="../images/content/gallery/smile-04.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Shenzhen</div>
                            <div class="gallery-caption">
                                <h5>Shenzhen, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 18 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – provided
                                    <br>
                                    Medical – provided
                                    <br>
                                    Start – immediately
                                    <br>
                                    Subjects – English to Chinese learners, prepare materials and assignments,
                                    arrange and evaluate exams</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category5">
                        <a href="/jobs_page"><img src="../images/content/gallery/smile-05.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Suzhou</div>
                            <div class="gallery-caption">
                                <h5>Suzhou, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 17 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – reimbursement
                                    <br>
                                    Medical – provided
                                    <br>
                                    Start – February 2020
                                    <br>
                                    Subjects – English, Math, Drama, Chemistry, Economics</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category6">
                        <a href="/jobs_page"><img src="../images/content/gallery/smile-06.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Beijing</div>
                            <div class="gallery-caption">
                                <h5>Beijing, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 20 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – return
                                    <br>
                                    Medical – provided
                                    <br>
                                    Subjects – English, Math, Chemistry, Computer Science</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category7">
                        <a href="/jobs_page"><img src="../images/content/gallery/smile-07.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Shanghai</div>
                            <div class="gallery-caption">
                                <h5>Shanghai, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – RMB 25 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – reimbursement
                                    <br>
                                    Medical – provided
                                    <br>
                                    Responsible for planning and delivering lessons to young learners aged 3-6 years
                                    old</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category8">
                        <a href="/jobs_page"><img src="../images/content/gallery/smile-08.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Hangzhou</div>
                            <div class="gallery-caption">
                                <h5>Hangzhou, China</h5>
                                <p>Minimum requirement – Bachelors degree
                                    <br>
                                    Starting Salary – USD 3 000
                                    <br>
                                    Accommodation – provided
                                    <br>
                                    Flights – provided
                                    <br>
                                    Medical – provided
                                    <br>
                                    Subjects — English, Science, Art, PE and/or Support</p>
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

@section('footer-section')
    @include('layout.footer')
@endsection