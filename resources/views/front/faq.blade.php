@extends('front.layouts.')

@section('title')
   Contact us
@endsection

@section('content')
     <!-- Start Page Banner -->
     <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>contact us</h2>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>contact us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start FAQ Area -->
    <section class="faq-area bg-ffffff ptb-100">
        <div class="container">
            <div class="section-title">
                <span>FAQs</span>
                <h2>Find your answers faster in our popular FAQs topics</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Does it cost money to register on Funtrivia
                                </a>

                                <p class="accordion-content show">
                                    No, it is completely free of charge
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    How do I register on funtrivia
                                </a>

                                <p class="accordion-content">
                                    Just click on <a href="{{route('register')}}">Join Now </a>and fill the registration details.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Can i change my Username?
                                </a>

                                <p class="accordion-content">
                                    Unfortunately, no; The Username that you have choosen during the registration process cannot be changed.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Are there any fees when withdrawing?
                                </a>

                                <p class="accordion-content">
                                    Withdrawal of your money does not include charges.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    How do I make withdrawal?
                                </a>

                                <p class="accordion-content show">
                                    To withdraw your earnings, got to accounts click on withdraw and input your bank details.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    How long does it take to recieve my withdrawals?
                                </a>

                                <p class="accordion-content">
                                    Withdrawals are paid instantly.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    How can I recover my account in case I forgot my password?
                                </a>

                                <p class="accordion-content">
                                    Easy, just click on "Forgot Password" in the login Page
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    How can I track my rank?
                                </a>

                                <p class="accordion-content">
                                    Navigate to the result tab and search for your Username?
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Can I use third party account to withdraw?
                                </a>

                                <p class="accordion-content">
                                    Unfortunately No; account provided must match the name provided during registration for a withdrawal request to be successful.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Can I participate multiple times in a round?
                                </a>

                                <p class="accordion-content show">
                                    Yes, you can
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    If I participate multiple times in a round and win multiple times, would i be credited with the accumulated amount?
                                </a>

                                <p class="accordion-content">
                                    Yes, you will certainly be credited with the accumulated winnings
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Can I withdraw my refund?
                                </a>

                                <p class="accordion-content">
                                    Yes you can.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    How many Question will I attempt?
                                </a>

                                <p class="accordion-content">
                                    You will attempt 10 questions in five Minutes
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Does time determine my rank?
                                </a>

                                <p class="accordion-content">
                                    Yes it is a big factor to determine rankings to checkmate ties.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Area -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Do you have any questions</h2>
                <p>Our agents are around to answer your questions. Expect a response within 24hrs</p>
            </div>

            <div class="contact-form">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Full name</label>

                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Full name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Email</label>

                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Phone</label>

                                <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Subject</label>

                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Your message</label>

                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Message here."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkme">
                                <label class="form-check-label" for="checkme">
                                    Accept <a href="terms-of-service.html">Terms of Services</a> and <a href="privacy-policy.html">Privacy Policy.</a>
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

@endsection
