<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Eduland &minus; Education & Courses HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/niceselect.css') }}">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/cube-portfolio.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    @yield('css')
    <!-- Eduland Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <!-- Eduland Colors -->
    <link rel="stylesheet" href="{{ asset('frontend/css/colors/color1.css') }}">

</head>

<body>

    <!-- Header -->
    <header class="header">
        <!-- Header Inner -->
        <div class="header-inner overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt="#"></a>
                        </div>
                        <!--/ End Logo -->
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="menu-bar">
                            <nav class="navbar navbar-default">
                                <div class="navbar-collapse">
                                    <!-- Main Menu -->
                                    <ul id="nav" class="nav menu navbar-nav">
                                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a>
                                        </li>
                                        <li><a href="{{ route('materi') }}"><i class="fa fa-clone"></i>Materi</a>
                                        </li>
                                        <li><a href="{{ route('test') }}"><i class="fa fa-clone"></i>Tes Suara</a>
                                        </li>
                                    </ul>
                                    <!-- End Main Menu -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->

    @yield('breadcrumbs')

    @yield('content')

    <!-- Footer -->
    <footer class="footer section">
        <!-- Footer Top -->
        <div class="footer-top overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- About -->
                        <div class="single-widget about">
                            <h2>MEDIA PEMBELAJARAN PENGENALAN JENIS SUARA MANUSIA UNTUK ANGGOTA PADUAN SUARA</h2>

                        </div>
                        <!--/ End About -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">

                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copyright -->
                        <div class="copyright">
                            <p>© Copyright Eduland 2019. Design & Development by <a href="http://themelamp.com">www.themelamp.com</a>, Theme Release By <a href="http://codeglim.com">www.codeglim.com</a></p>
                        </div>
                        <!--/ End Copyright -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Bottom -->
    </footer>
    <!--/ End Footer -->

    <!-- Jquery JS-->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate.min.js') }}"></script>
    <!-- Colors JS-->
    <script src="{{ asset('frontend/js/colors.js') }}"></script>
    <!-- Popper JS-->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel JS-->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- Jquery Steller JS -->
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <!-- Final Countdown JS -->
    <script src="{{ asset('frontend/js/finalcountdown.min.js') }}"></script>
    <!-- Fancy Box JS-->
    <script src="{{ asset('frontend/js/facnybox.min.js') }}"></script>
    <!-- Magnific Popup JS-->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Circle Progress JS -->
    <script src="{{ asset('frontend/js/circle-progress.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('frontend/js/niceselect.js') }}"></script>
    <!-- Jquery Steller JS-->
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <!-- Jquery Steller JS-->
    <script src="{{ asset('frontend/js/cube-portfolio.min.js') }}"></script>
    <!-- Slick Nav JS-->
    <script src="{{ asset('frontend/js/slicknav.min.js') }}"></script>
    <!-- Easing JS-->
    <script src="{{ asset('frontend/js/easing.min.js') }}"></script>
    <!-- Waypoints JS-->
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <!-- Scroll Up JS-->
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Gmaps JS-->
    <script src="{{ asset('frontend/js/gmaps.min.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>