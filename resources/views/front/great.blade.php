@extends('front.layouts.home')

@section('title')Home @endsection

@section('content')

        <!-- Start Main Slider Area -->
        <div class="main-slider-area">
            <div class="home-slides owl-carousel owl-theme">
                <div class="main-slider-item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="main-slider-content">
                                    <h1>Winnners don'wait! <br> They win big!</h1>
                                    <p>Use your knowledge to win big!</p>
                                    <div class="slider-btn">
                                        <a href="#" class="default-btn">Get started</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="main-slider-image">
                                    <img src="assets/img/main-slider/main-slider-1.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-slider-item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="main-slider-content">
                                    <h1>Win Big with your UEFA CL 2021 Knowledge </h1>
                                    <p>Get your knowledge winning you laurel</p>
                                    <div class="slider-btn">
                                        <a href="#" class="default-btn">Get started</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="main-slider-image">
                                    <img src="assets/img/main-slider/main-slider-1.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-slider-shape">
                <div class="shape-1">
                    <img src="assets/img/main-slider/slider-shape-1.png" alt="image">
                </div>

                <div class="shape-2">
                    <img src="assets/img/main-slider/slider-shape-2.png" alt="image">
                </div>
            </div>
        </div>
        <!-- End Main Slider Area -->

        <!-- Start Top Services Area -->
        <section class="top-services-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Getting Started</span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="top-services-item">
                            <div class="icon">
                                <i class="flaticon-protection"></i>
                            </div>
                            <h3>
                                <a href="#">1. Register</a>
                            </h3>
                            <p>Click <span>join now</span> to create your funtrivial account. give yourself a fair chance.</p>
                            <a href="#" class="link-btn">Get started <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="top-services-item">
                            <div class="icon">
                                <i class="flaticon-online-banking"></i>
                            </div>
                            <h3>
                                <a href="#">2. Make Deposit</a>
                            </h3>
                            <p>Make deposit into your account using any of the available methods</p>
                            <a href="#" class="link-btn">See more details <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="top-services-item">
                            <div class="icon">
                                <i class="flaticon-mobile-app"></i>
                            </div>
                            <h3>
                                <a href="#">3. Start Winning</a>
                            </h3>
                            <p>Play in any of the level and win up to ₦1,300,000.00</p>
                            <a href="#" class="link-btn">See more Details <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Services Area -->



       @include('front.layouts.levels')
       @include('front.layouts.section')


        <!-- Start Customer Area -->
        <section class="customer-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Customers say</span>
                    <h2>What customers say about Us</h2>
                </div>

                <div class="customer-slider owl-carousel owl-theme">
                    <div class="customer-item">
                        <img src="assets/img/customer/customer-1.jpg" alt="image">
                        <p>“Their quiz is challenging! I can't believe I didn't start playing on this funtrivial earlier. The reward is worth it.”</p>

                        <div class="customer-info">
                            <h3>Oluchi Jacobs</h3>
                            <span>Lagos</span>
                        </div>

                        <div class="icon">
                            <i class="flaticon-right-quotation-mark"></i>
                        </div>
                    </div>

                    <div class="customer-item">
                        <img src="assets/img/customer/customer-2.jpg" alt="image">
                        <p>“Funtrivia is truly amazing, I won and got paid immediately!”</p>

                        <div class="customer-info">
                            <h3>Ahmed Taiwo</h3>
                            <span>Ibadan</span>
                        </div>

                        <div class="icon">
                            <i class="flaticon-right-quotation-mark"></i>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Customer Area -->

        <!-- Start App Area -->
        <section class="app-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="app-content">
                            <h3>Download our App to enjoy Funtrivia from anywhere</h3>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="app-btn">
                            <a href="#" class="app-store-btn">
                                <i class="flaticon-apple"></i>
                                Download on
                                <span>App store</span>
                            </a>

                            <a href="#" class="play-store-btn">
                                <i class="flaticon-google-play"></i>
                                Download on
                                <span>Google play</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End App Area -->

        <!-- Start Subscribe Area -->
        <section class="subscribe-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="subscribe-content">
                            <span>Get Started Instantly!</span>
                            <h2>Click here to get started on Funtrivia and start winning</h2>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex">
                        <a href="#" class="default-btn flex-end">Register Now!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Subscribe Area -->



@endsection
