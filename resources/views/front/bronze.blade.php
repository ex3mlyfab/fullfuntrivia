@extends('front.layouts.home')

@section('title')Bronze
@endsection

@section('content')
  <!-- Start Page Banner -->
  <div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Bronze (Level II)</h2>
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                </li>
                <li>Bronze</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->
<!-- Start About Area -->
<section class="about-area bg-ffffff ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content-warp">
                    <span>Bronze Level</span>
                    <h3>Knowledge Pays!</h3>
                    <p>Being Knowledgeable Pays! By the end of the rounds of ths levels, you experience the joy of being knowlegeable. Participate in this level
                        with just an entry fee ₦300.00 .</p>
                    <p>The rewards of bronze level is as follows:</p>


                    <ul class="about-warp-list">
                        <li>
                            <i class="flaticon-check"></i>
                            1st Prize is ₦40,000.00
                        </li>

                        <li>
                            <i class="flaticon-check"></i>
                            2nd Prize is ₦30,000.00
                        </li>

                        <li>
                            <i class="flaticon-check"></i>
                            3rd Prize is ₦20,000.00
                        </li>

                        <li>
                            <i class="flaticon-check"></i>
                            4th to 23rd: ₦4,000.00
                        </li>
                        <li>
                            <i class="flaticon-check"></i>
                            24th to 123rd: ₦300.00
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{asset('assets')}}/img/game-level/2.png" class="img-fluid" />
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
            <span>Why choose Bronze Plan</span>
            <h2>Bronze plan gives you a chance to win the following prizes. With an entry fee ₦300.00 you win.</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-fun-fact">

                    <h3>
                        ₦<span class="odometer" data-count="40000">00</span>
                    </h3>
                    <p>First Prize</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-fun-fact">


                    <h3>
                        ₦<span class="odometer" data-count="30000">00</span>
                    </h3>
                    <p>Second Prize</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-fun-fact">


                    <h3>
                        ₦<span class="odometer" data-count="20000">00</span>
                    </h3>
                    <p>Third Prize</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-fun-fact">


                    <h3>
                        ₦<span class="odometer" data-count="4000">00</span>
                    </h3>
                    <p>4th to 23rd</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-fun-fact">


                    <h3>
                        ₦<span class="odometer" data-count="300">00</span>
                    </h3>
                    <p>24th to 123rd</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Facts Area -->
@endsection
