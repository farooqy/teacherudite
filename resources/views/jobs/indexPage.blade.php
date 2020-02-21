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
    <div class="section mt-2">
        <div class="container">
            <div class="bg-grey-sm">
                <ul class="icn-list-lg ml-2">
                    <li><i class="icon-star"></i>Want to Advertise an open job position on our website? <a href="#advertisementForm" class="ad"><span>click here</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2 mb-md-3 mb-lg-4">
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
                    <li><a href="#filter" data-option-value=".category1">Middle East</a></li>
                    <li><a href="#filter" data-option-value=".category2">South East Asia</a></li>
                    <li><a href="#filter" data-option-value=".category3">China</a></li>
                    <li><a href="#filter" data-option-value=".category4">Online</a></li>
                </ul>
            </div>
            <div class="gallery-wrap">
                <div class="loading-content">
                    <div class="inner-circles-loader"></div>
                </div>
                <div class="gallery-smiles gallery-isotope" id="gallery">
                    <div class="gallery-item category2">
                        <a href="/jobs_page">
                            <img src="../images/content/jobs/jobs-soul.jpg" alt="" />
                            <div class="after-label">South Korea</div>
                            <div class="before-label">Seoul</div>
                            <div class="gallery-caption">
                                <h5>Seoul, South Korea</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — KRW 2 200 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — paid return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Subjects — English</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category3">
                        <a href="/jobs_page">
                            <img src="../images/content/jobs/jobs-china-hangzhou.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Hangzhou</div>
                            <div class="gallery-caption">
                                <h5>Hangzhou, China</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — RMB 20 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — reimbursement
                                    <br>
                                    Medical — provided
                                    <br>
                                    Start — immediately
                                    <br>
                                    Subjects — English, Science and Support</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category1">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-uae-dubai.jpg" alt="" />
                            <div class="after-label">UAE</div>
                            <div class="before-label">Dubai</div>
                            <div class="gallery-caption">
                                <h5>Dubai, UAE</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — AED 30 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Start — immediately
                                    <br>
                                    Be responsible for the general operation of the school facility</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category2">
                        <a href="/jobs_page">
                            <img src="../images/content/jobs/jobs-vietnam.jpg" alt="" />
                            <div class="after-label">Vietnam</div>
                            <div class="before-label">Hanoi</div>
                            <div class="gallery-caption">
                                <h5>Hanoi, Vietnam</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — USD 2 000
                                    <br>
                                    Classroom Size — small
                                    <br>
                                    Holidays — paid
                                    <br>
                                    Bonus — year end
                                    <br>
                                    Subjects — English</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category2">
                        <a href="/jobs_page">
                            <img src="../images/content/jobs/jobs-thai.jpg" alt="" />
                            <div class="after-label">Thailand</div>
                            <div class="before-label">Bangkok</div>
                            <div class="gallery-caption">
                                <h5>Bangkok, Thailand</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — THB 32 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Medical — accident insurance
                                    <br>
                                    Start — year round
                                    <br>
                                    Subjects — Writing skills, including grammar, editing and publishing</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category3">
                        <a href="/jobs_page">
                            <img src="../images/content/jobs/jobs-hk.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Hong Kong</div>
                            <div class="gallery-caption">
                                <h5>Hong Kong, China</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — RMB 22 000
                                    <br>
                                    Flights — return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Subjects — English</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category1">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-uae-abu_dhabi.jpg" alt="" />
                            <div class="after-label">UAE</div>
                            <div class="before-label">Abu Dhabi</div>
                            <div class="gallery-caption">
                                <h5>Abu Dhabi, UAE</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — AED 15 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Start — immediately
                                    <br>
                                    Subjects — English, Science, Math and Social Studies</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category4">
                        <a href="/jobs_page">
                            <img src="../images/content/jobs/jobs-online.jpg" alt="" />
                            <div class="after-label">Online</div>
                            <div class="before-label">Online</div>
                            <div class="gallery-caption">
                                <h5>Online</h5>
                                <p>Work as an independent contractor
                                    <br>
                                    Salary — USD 9 per session (30 min)
                                    <br>
                                    Classes per week — 9 hours
                                    <br>
                                    Each teaching contract period — 6 months
                                    <br>
                                    Training allowance — provided
                                    <br>
                                    Guaranteed classes
                                    <br>
                                    Make preparations for classes, background decorations, and teaching props</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category3">
                        <a href="/jobs_page">
                            <img src="../images/content/jobs/jobs-china-sh.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Shanghai</div>
                            <div class="gallery-caption">
                                <h5>Shanghai, China</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — RMB 23 000
                                    <br>
                                    Accommodation — single room accomodation provided
                                    <br>
                                    Flights — return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Start — immediately
                                    <br>
                                    Subjects — Literature</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category1">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-uae-ajman-02.jpg" alt="" />
                            <div class="after-label">UAE</div>
                            <div class="before-label">Ajman</div>
                            <div class="gallery-caption">
                                <h5>Ajman, UAE</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — AED 25 000 (tax free)
                                    <br>
                                    Accommodation — 3 bedroom villa
                                    <br>
                                    Flights — round trip
                                    <br>
                                    Medical — provided
                                    <br>
                                    Start — immediately
                                    <br>
                                    Subjects — English, Science, Math and Social Studies</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category1">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-oman-muscat.jpg" alt="" />
                            <div class="after-label">Oman</div>
                            <div class="before-label">Muscat</div>
                            <div class="gallery-caption">
                                <h5>Muscat, Oman</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — OMR 950
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Start — immediately
                                    <br>
                                    Subjects — English, Science, Math and Social Studies</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category3">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-china-shandong.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Shandong</div>
                            <div class="gallery-caption">
                                <h5>Shandong, China</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — RMB 14 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Start — immediately
                                    <br>
                                    Subjects — English to Chinese learners, prepare materials and assignments,
                                    arrange and evaluate exams</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category2">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-myanmar.jpg" alt="" />
                            <div class="after-label">Myanmar</div>
                            <div class="before-label">Yangon</div>
                            <div class="gallery-caption">
                                <h5>Yangon, Myanmar</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — USD 1 500
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — round trip
                                    <br>
                                    Medical — provided
                                    <br>
                                    Subjects — Pre-reading, reading and comprehension skills</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category3">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-china-shenzhen.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Shenzhen</div>
                            <div class="gallery-caption">
                                <h5>Shenzhen, China</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — RMB 18 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — provided
                                    <br>
                                    Medical — provided
                                    <br>
                                    Start — immediately
                                    <br>
                                    Subjects — English to Chinese learners, prepare materials and assignments,
                                    arrange and evaluate exams</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category1">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-qatar-doha.jpg" alt="" />
                            <div class="after-label">Qatar</div>
                            <div class="before-label">Doha</div>
                            <div class="gallery-caption">
                                <h5>Doha, Qatar</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Salary up to — QR 16 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Work Permit — provided
                                    <br>
                                    Start — January or August 2020</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category3">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-china-suzhou.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Suzhou</div>
                            <div class="gallery-caption">
                                <h5>Suzhou, China</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — RMB 17 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — reimbursement
                                    <br>
                                    Medical — provided
                                    <br>
                                    Start — February 2020
                                    <br>
                                    Subjects — English, Math, Drama, Chemistry, Economics</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category1">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-saudi-arabia.jpg" alt="" />
                            <div class="after-label">Saudi Arabia</div>
                            <div class="before-label">Saudi Arabia</div>
                            <div class="gallery-caption">
                                <h5>Saudi Arabia, Saudi Arabia</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — USD 2 800
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Transportation — to and from work
                                    <br>
                                    Subjects — English</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category3">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-china-beijing.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Beijing</div>
                            <div class="gallery-caption">
                                <h5>Beijing, China</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — RMB 20 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Subjects — English, Math, Chemistry, Computer Science</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category1">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-qatar-doha-02.jpg" alt="" />
                            <div class="after-label">Qatar</div>
                            <div class="before-label">Doha</div>
                            <div class="gallery-caption">
                                <h5>Doha, Qatar</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Salary — Competitive
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Visa — provided</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category3">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-china-sh-02.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Shanghai</div>
                            <div class="gallery-caption">
                                <h5>Shanghai, China</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — RMB 25 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — reimbursement
                                    <br>
                                    Medical — provided
                                    <br>
                                    Responsible for planning and delivering lessons to young learners aged 3-6 years
                                    old</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category1">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-uae-ajman.jpg" alt="" />
                            <div class="after-label">UAE</div>
                            <div class="before-label">Ajman</div>
                            <div class="gallery-caption">
                                <h5>Ajman, UAE</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Salary — USD 2 500 (tax free)
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — round trip
                                    <br>
                                    Medical — provided
                                    <br>
                                    Start — immediately
                                    <br>
                                    Subjects — English, Science, Math and Social Studies</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category3">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-china-hangzhou-02.jpg" alt="" />
                            <div class="after-label">China</div>
                            <div class="before-label">Hangzhou</div>
                            <div class="gallery-caption">
                                <h5>Hangzhou, China</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — USD 3 000
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — provided
                                    <br>
                                    Medical — provided
                                    <br>
                                    Subjects — English, Science, Art, PE and/or Support</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item category1">
                        <a href="/jobs_page"><img src="../images/content/jobs/jobs-oman-muscat-02.jpg" alt="" />
                            <div class="after-label">Oman</div>
                            <div class="before-label">Muscat</div>
                            <div class="gallery-caption">
                                <h5>Muscat, Oman</h5>
                                <p>Minimum requirement — Bachelors degree
                                    <br>
                                    Starting Salary — OMR 900
                                    <br>
                                    Accommodation — provided
                                    <br>
                                    Flights — return
                                    <br>
                                    Medical — provided
                                    <br>
                                    Bonus — end of service
                                    <br>
                                    Subjects — English</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="advertisementForm" class="container mt-6">
                    <div class="row">
                        <div class="col-md col-lg-5">
                            <div class="pr-0 pr-lg-8">
                                <div class="title-wrap">
                                    <h2>Have jobs?</h2>
                                    <div class="h-decor"></div>
                                </div>
                                <div class="mt-2 mt-lg-4">
                                    <p>Advertise here on our Jobs listings free of charge</p>
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
                                    <input type="text" class="form-control" name="school-name" placeholder="Name of school">
                                </div>
                                <div class="mt-15">
                                    <input type="text" class="form-control" name="location" placeholder="Location">
                                </div>
                                <div class="row">
                                    <div class="mt-15 col-md col-lg-6">
                                        <input type="email" class="form-control" name="email" placeholder="Contact email">
                                    </div>
                                    <div class="mt-15 col-md col-lg-6">
                                        <input type="text" class="form-control" name="whatsapp" placeholder="Whatsapp (For resumes)">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-15 col-md col-lg-6">
                                        <input type="text" class="form-control" name="position-type" placeholder="Type of position">
                                    </div>
                                    <div class="mt-15 col-md col-lg-6">
                                        <input type="number" class="form-control" name="number" placeholder="Number of positions">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-15 col-md col-lg-8">
                                        <input class="form-control datetimepicker" name="date" placeholder="Start Date">
                                    </div>
                                    <div class="mt-15 col-md col-lg-4">
                                        <input type="number" class="form-control" name="salary" placeholder="Salary">
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="mt-18 col-md col-lg-3">
                                        <label for="housing" class="ml-1">Housing</label>
                                    </div>
                                    <div class="mt-18 col-md col-lg-8 ml-1">
                                        <input type="radio" name="housing" value="Yes">&nbsp;&nbsp;Yes
                                        <input type="radio" name="housing" value="No" class="custom-checkbox ml-5">&nbsp;&nbsp;No
                                    </div>
                                </div>
                                
                                <div class="mt-2 box has-advanced-upload">
                                    <div class="box__input">
                                        {{-- <svg class="box__icon" xmlns="http://www.w3.org/2000/svg" width="50" height="43"
                                            viewBox="0 0 50 43">
                                            <path
                                                d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z">
                                            </path>
                                        </svg> --}}
                                        <svg class="box__icon" xmlns="http://www.w3.org/2000/svg" width="480" height="432.025" viewBox="0 0 480 432.025">
                                            <g id="camera" transform="translate(0 -23.988)">
                                                <path id="Path_1" data-name="Path 1" d="M440,79.988v-16a8,8,0,0,0-8-8H384a8,8,0,0,0-8,8v16H356.64L336.16,44.2a40,40,0,0,0-34.72-20.208H178.56a40,40,0,0,0-34.7,20.184l-20.5,35.816H120v-24a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8v24a40.048,40.048,0,0,0-40,40v224a40.048,40.048,0,0,0,40,40H263.456a111.96,111.96,0,0,0,216.544-40v-224A40.047,40.047,0,0,0,440,79.988Zm-48-8h32v8H392Zm-336-8h48v16H56ZM263.776,303.2c-.8,2.152-1.664,4.32-2.4,6.528-.5,1.56-.928,3.144-1.36,4.736-.344,1.256-.8,2.48-1.08,3.76A102.385,102.385,0,0,1,240,319.988a104,104,0,1,1,104-104,102.381,102.381,0,0,1-1.76,19h0c-1.288.3-2.512.744-3.784,1.088-1.6.424-3.112.848-4.648,1.336-2.256.72-4.472,1.6-6.672,2.4-.9.352-1.84.616-2.728.992A88.055,88.055,0,1,0,264.8,300.4C264.416,301.316,264.144,302.276,263.776,303.2Zm37.176-48.9c-.264.192-.48.44-.736.632A109.8,109.8,0,0,0,278.944,276.2c-.192.256-.44.472-.632.736a72,72,0,1,1,22.64-22.64ZM368,439.988a96,96,0,0,1-96-96,92.292,92.292,0,0,1,1.6-17.6,94.481,94.481,0,0,1,16.8-38.9,5.99,5.99,0,0,0,.416-.64,95.187,95.187,0,0,1,7.352-8.568c.648-.688,1.184-1.488,1.856-2.16a94.347,94.347,0,0,1,10.712-9.224,5.7,5.7,0,0,0,.744-.488,94.608,94.608,0,0,1,38.96-16.8A92.37,92.37,0,0,1,368,247.988a96,96,0,0,1,0,192Zm96-153.6c-.8-1.336-1.68-2.624-2.536-3.92-.3-.5-.592-.984-.9-1.44-1.776-2.6-3.656-5.1-5.6-7.528-.48-.584-.968-1.152-1.456-1.728-1.776-2.1-3.624-4.136-5.544-6.1-.36-.368-.7-.76-1.072-1.12-2.216-2.2-4.536-4.288-6.928-6.3-.6-.5-1.208-.984-1.816-1.472-2.176-1.752-4.416-3.44-6.728-5.032-.368-.256-.712-.528-1.08-.8-2.608-1.752-5.3-3.376-8.064-4.9-.688-.384-1.384-.752-2.088-1.128-2.576-1.36-5.2-2.64-7.888-3.8-.312-.136-.608-.288-.912-.416-2.944-1.24-5.96-2.32-9.024-3.312-.8-.248-1.528-.48-2.3-.7-2.96-.888-5.96-1.688-9.024-2.328l-.568-.136c-3.2-.656-6.488-1.128-9.8-1.5l-2.456-.248c-3.392-.272-6.776-.48-10.208-.48-3.144,0-6.216.176-9.248.416A119.936,119.936,0,1,0,240,335.988a117.874,117.874,0,0,0,16.424-1.256c-.248,3.04-.424,6.112-.424,9.256,0,3.64.232,7.248.584,10.84.1,1.024.232,2.04.352,3.056q.528,4.176,1.352,8.288c.12.6.168,1.216.3,1.816H40a24,24,0,0,1-24-24v-224a24,24,0,0,1,24-24h88a8,8,0,0,0,6.944-4L157.76,52.124a24,24,0,0,1,20.8-12.136H301.44a24,24,0,0,1,20.8,12.136l22.8,39.84A8,8,0,0,0,352,95.988h88a24,24,0,0,1,24,24v166.4Z"/>
                                                <path id="Path_2" data-name="Path 2" d="M80,119.988a8,8,0,0,0-8,8v192a8,8,0,0,0,16,0v-192A8,8,0,0,0,80,119.988Z"/>
                                                <path id="Path_3" data-name="Path 3" d="M400,111.988a24,24,0,1,0,24,24A24,24,0,0,0,400,111.988Zm0,32a8,8,0,1,1,8-8A8,8,0,0,1,400,143.988Z"/>
                                                <path id="Path_4" data-name="Path 4" d="M376,335.988v-56a8,8,0,0,0-16,0v56H304a8,8,0,0,0,0,16h56v56a8,8,0,0,0,16,0v-56h56a8,8,0,0,0,0-16Z"/>
                                            </g>
                                        </svg>

                                        <input type="file" name="files[]" id="file" class="box__file"
                                            data-multiple-caption="{count} files selected" multiple="">
                                        <label for="file"><strong>(Optional) Upload a picture</strong><span class="box__dragndrop"></span>.</label>
                                        <button type="submit" class="box__button">Upload</button>
                                    </div>
                                    <div class="box__uploading">Uploading…</div>
                                    <div class="box__success">Done! <a
                                            href="https://css-tricks.com/examples/DragAndDropFileUploading//?" class="box__restart"
                                            role="button">Upload more?</a></div>
                                    <div class="box__error">Error! <span></span>. <a
                                            href="https://css-tricks.com/examples/DragAndDropFileUploading//?" class="box__restart"
                                            role="button">Try again!</a></div>
                                    <input type="hidden" name="ajax" value="1">
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-hover-fill"><i
                                            class="icon-right-arrow"></i><span>Submit</span><i
                                            class="icon-right-arrow"></i></button>
                                </div>
                            </form>
                        </div>
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

@section('jobs-pagescript')
    <script src="/vendor/isotope/isotope.pkgd.min.js"></script>
@stop