<!doctype html>
<html lang="eng">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <!-- Owl Carousel Default CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

		<title> Funtrivia| @yield('title')</title>

        <link rel="icon" type="image/png" href="{{ asset('assets')}}/img/favicon.ico">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader bg-4865ff">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader Area -->



        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-color-two">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="#">
                                <img src="{{ asset('assets')}}/img/trivia-logos.png" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index-4.html">
                            <img src="{{ asset('assets')}}/img/trivia-logos.png" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Home

                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="credit-card.html" class="nav-link">
                                        Sections
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                       Game Levels
                                        <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about.html" class="nav-link">
                                                Starter
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">
                                                Bronze
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">
                                                Silver
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="open-account.html" class="nav-link">
                                                Gold
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="security.html" class="nav-link">
                                                Platinum
                                            </a>
                                        </li>


                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Rules
                                        <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services.html" class="nav-link">
                                                Fun Trivia Rules
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="services-details.html" class="nav-link">
                                                Rule details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact
                                    </a>
                                </li>



                            </ul>


                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <form class="search-box">
                                        <input type="text" class="form-control" placeholder="Search for..">
                                        <button type="submit"><i class="flaticon-loupe"></i></button>
                                    </form>
                                </div>

                                <div class="option-item">
                                    @auth
                                    <a href="open-account.html" class="default-btn">Open accountss</a>
                                    @else
                                    <a href="open-account.html" class="default-btn">Open account</a>
                                    @endauth

                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="open-account.html" class="default-btn">Open account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
        @yield('content')
        <!-- Start Footer Area -->
        <section class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <h2><a href="index.html">Funtrivia</a></h2>

                                <p>Funtrivia is a platform that allows you to earn with your knowledge. Participate in our quiz at any level and win amazing prizes</p>

                                <ul class="social">
                                    <li>
                                        <a href="#" class="facebook" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="pinterest" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="linkedin" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Contact</h3>

                            <ul class="footer-contact-info">
                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <span>Phone</span>
                                    <a href="tel:15147939-357">+234 805 939-357</a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <span>Email</span>
                                    <a href="mailto:hello@gmail.com">hello@funtrivia.com</a>
                                </li>
                                <li>
                                    <i class='bx bx-map'></i>
                                    <span>Address</span>
                                    lagos, Nigeria
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Links</h3>

                            <ul class="quick-links">
                                <li>
                                    <a href="#">Levels</a>
                                </li>
                                <li>
                                    <a href="#">Sections</a>
                                </li>
                                <li>
                                    <a href="#">Past Winners</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Help & guidance</h3>

                            <ul class="quick-links">
                                <li>
                                    <a href="#">Privacy statement</a>
                                </li>
                                <li>
                                    <a href="#">Corporate information</a>
                                </li>
                                <li>
                                    <a href="#">Rules and Regulations</a>
                                </li>
                                <li>
                                    <a href="#">Frequently asked Questions</a>
                                </li>

                                <li>
                                    <a href="#">Help centre</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <p>
                        <i class='bx bx-copyright'></i>
                        Copyright {{ date('Y')}} Funtrivia. All Rights Reserved by
                        <a href="#" target="_blank">Funtrivia</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-up-arrow-alt'></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Jquery Slim JS -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!-- Popper JS -->
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Meanmenu JS -->
        <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
        <!-- Nice Select JS -->
        <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Odometer JS -->
        <script src="{{asset('assets/js/odometer.min.js')}}"></script>
        <!-- Jquery Appear JS -->
        <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
        <!-- Ajaxchimp JS -->
		<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
		<!-- Form Validator JS -->
		<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
        <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
        <!-- Wow JS -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <!-- Custom JS -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
