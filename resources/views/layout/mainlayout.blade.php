<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="author" content="NeudTesfayDesta">
        
        <title>ERUDITE - Travel &sdot; Learn &sdot; Earn</title>

        <!-- Stylesheets -->
        <link href="/vendor/slick/slick.css" rel="stylesheet">
        <link href="/vendor/animate/animate.min.css" rel="stylesheet">
        <link href="/css/iconstyle.css" rel="stylesheet">
        <link href="/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons//favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons//favicon-16x16.png">
        <link rel="manifest" href="/images/favicons//site.webmanifest">
        <link rel="mask-icon" href="/images/favicons//safari-pinned-tab.svg" color="#2B5797">
        <meta name="apple-mobile-web-app-title" content="ERUDITE">
        <meta name="application-name" content="ERUDITE">
        <meta name="msapplication-TileColor" content="#2B5797">
        <meta name="theme-color" content="#FFFFFF">

        <!-- Google Fonts -->
        <link href="/fonts/poppins.css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
        <link href="/fonts/roboto.css?family=Roboto:300,400,500,700,900" rel="stylesheet">

        <!-- Google map -->
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script> --}}
    </head>

    <body class="main-page">
        <!--header-->
        <header class="header">
            <div class="header-content">
                <div class="container">
                    <div class="row align-items-lg-center">
                        <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
                            <a href="/" class="header-logo"><img src="images/logo.png" alt=""
                                    class="img-fluid"></a>
                        </div>
                        <div class="col-lg ml-auto header-nav-wrap">
                            <div class="header-nav js-header-nav">
                                <nav class="navbar navbar-expand-lg btco-hover-menu">
                                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="/jobs">Jobs Board</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/employers" class="nav-link">Employers</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/blog" class="nav-link">Resources</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/tefl" class="nav-link">Online TEFL Certification</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/aboutus">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/contactus">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--//header-->
        
        {{-- Page content --}}
        @yield('page-content')
        {{-- End page content --}}
        
        {{-- Footer --}}
        @yield('footer-content')
        {{-- End of footer --}}
        
        <div class="backToTop js-backToTop">
            <i class="icon icon-up-arrow"></i>
        </div>
        <!-- Vendors -->
        <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="/vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
        <script src="/vendor/cookie/jquery.cookie.js"></script>
        <script src="/vendor/bootstrap-datetimepicker/moment.js"></script>
        <script src="/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="/vendor/popper/popper.min.js"></script>
        <script src="/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="/vendor/waypoints/sticky.min.js"></script>
        <script src="/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="/vendor/slick/slick.min.js"></script>
        <script src="/vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
        <script src="/vendor/countTo/jquery.countTo.js"></script>
        <script src="/vendor/form-validation/jquery.form.js"></script>
        <script src="/vendor/form-validation/jquery.validate.min.js"></script>
        <!-- Custom Scripts -->
        <script src="/js/app.js"></script>
        <script src="/js/app-shop.js"></script>
        <script src="/form/forms.js"></script>

    </body>    
</html>