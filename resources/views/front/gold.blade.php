@extends('front.layouts.home')

@section('title')Gold
@endsection

@section('content')
  <!-- Start Page Banner -->
  <div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Gold (Level IV)</h2>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                </li>
                <li>Gold</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->
<!-- Start About Area -->
<section class="about-area bg-ffffff ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content-warp">
                    <span>Gold Level</span>
                    <h3>I am Smart!</h3>
                    <p>I am smart and i know it! Assert your firmly rooted believe in any subject area by competing in this high rewarding level. Entry fee is ₦3,000.00.</p>
                    <p>The rewards of bronze level is as follows:</p>


                    <ul class="about-warp-list">
                        <li>
                            <i class="flaticon-check"></i>
                            1st Prize is ₦300,000.00
                        </li>

                        <li>
                            <i class="flaticon-check"></i>
                            2nd Prize is ₦150,000.00
                        </li>

                        <li>
                            <i class="flaticon-check"></i>
                            3rd Prize is ₦100,000.00
                        </li>

                        <li>
                            <i class="flaticon-check"></i>
                            4th to 23rd: ₦15,000.00
                        </li>
                        <li>
                            <i class="flaticon-check"></i>
                            24th to 123rd: ₦1,500.00
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{asset('assets')}}/img/game-level/4.png" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
@include('front.layouts.section')
 <!-- Start Fun Facts Area -->
 <section class="fun-facts-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Why choose Gold Plan</span>
            <h2>Gold plan gives you a chance to win the following prizes. With an entry fee ₦300.00 you win.</h2>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <div class="icon">
                        <i class="flaticon-positive-vote"></i>
                    </div>

                    <h3>
                        ₦<span class="odometer" data-count="300000">00</span>
                    </h3>
                    <p>First Prize</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <div class="icon">
                        <i class="flaticon-confetti"></i>
                    </div>

                    <h3>
                        ₦<span class="odometer" data-count="150000">00</span>
                    </h3>
                    <p>Second Prize</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <div class="icon">
                        <i class="flaticon-trophy"></i>
                    </div>

                    <h3>
                        ₦<span class="odometer" data-count="100000">00</span>
                    </h3>
                    <p>Third Prize</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <div class="icon">
                        <i class="flaticon-success"></i>
                    </div>

                    <h3>
                        ₦<span class="odometer" data-count="15000">00</span>
                    </h3>
                    <p>4th to 23rd</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <div class="icon">
                        <i class="flaticon-success"></i>
                    </div>

                    <h3>
                        ₦<span class="odometer" data-count="1500">00</span>
                    </h3>
                    <p>24th to 123rd</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Facts Area -->
@endsection
