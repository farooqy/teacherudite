@extends('layout.mainlayout')

@section('page-content')
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="../index.html">Home</a>
                    <a href="jobs-board.html">Jobs Board</a>
                    <span>Hangzhou</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container mt-6">
            <div class="row">
                <div class="col-md">
                    <div class="employer-page-photo text-center">
                        <img src="../images/content/employer-01.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="mt-3 mt-md-5"></div>
                    <table class="table employer-page-table">
                        <tr>
                            <td>Lesson periods per week</td>
                            <td>20 lesson peirods, <br> each period is 40 minutes</td>
                        </tr>
                        <tr>
                            <td>Minimum requirement</td>
                            <td>Bachelors degree,<br>TEFL/TESOL/CELTA certificate</td>
                        </tr>
                        <tr>
                            <td>Starting Salary</td>
                            <td>￥20 000 - 25 000</td>
                        </tr>
                        <tr>
                            <td>Students / class</td>
                            <td>22 Students</td>
                        </tr>
                        <tr>
                            <td>Assistant</td>
                            <td>
                                <ul class="marker-list-md">
                                    <li>Bilingual teacher</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Contract</td>
                            <td>
                                <ul class="marker-list-md">
                                    <li>12 months</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Starting</td>
                            <td>
                                <ul class="marker-list-md">
                                    <li>Immediately</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Preference</td>
                            <td>Primary teaching experience</td>
                        </tr>
                        <tr>
                            <td>Subjects</td>
                            <td>English, Science and<br> Support to Grade 1-6<br> learners</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-8 mt-4 mt-lg-0">
                    <div class="employer-info mb-3 mb-lg-4">
                        <div class="employer-info-name">
                            <h3>About</h3>
                        </div>
                    </div>
                    <p>Primary teacher — Private bilingual school in Hangzhou</p>
                    <div class="employer-info mb-2">
                        <div class="employer-info-name">
                            <h6>More Information</h6>
                        </div>
                    </div>
                    <ul class="list-inline">
                        <li>School uses Cambridge Curriculum</li>
                        <li>20 lesson periods per week, each period is 40 minutes</li>
                    </ul>
                    <div class="employer-info mt-3 mb-2">
                        <div class="employer-info-name">
                            <h6>Benefits</h6>
                        </div>
                    </div>
                    <ul class="marker-list-md">
                        <li><i>Housing allowance 6K a month</i></li>
                        <li><i>Flight reimbursement</i></li>
                        <li><i>Health insurance</i></li>
                        <li><i>Visa</i></li>
                        <li><i>2,5 month paid holidays</i></li>
                    </ul>
                    <div class="mt-4 mt-lg-6"></div>
                    <div class="d-flex flex-column flex-sm-row mt-lg-2">
                        <a href="" class="btn "><i class="icon-right-arrow"></i><span>Apply</span><i
                                class="icon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-section')
    @include('layout.footer')
@endsection