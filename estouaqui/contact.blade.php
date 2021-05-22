@extends('layouts.app')

@section('content')


<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Contact</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</div>



<section class="contact-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">


                <div class="contact-form">
                    <div class="title">
                        <h3>Contact us </h3>
                <p> Your email address will not be published. Fields marked with * are mandatory. </p>

                    </div>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required
                                        data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" required
                                        data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" id="phone_number"
                                        required data-error="Please enter your phone number" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" id="subject" required
                                        data-error="Please enter your subject" placeholder="Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6"
                                        required data-error="Please enter your message"
                                        placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme">
                                    <label class="form-check-label" for="checkme">
                                        Accept <a href="terms-of-service.html">Terms of Services</a> and <a
                                            href="privacy-policy.html">Privacy Policy.</a>
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
            <div class="col-lg-4">
                <aside class="widget-area">
                    <section class="widget widget_stay_connected">
                        <h3 class="widget-title">Share:</h3>
                        <div class="article-footer">
                            <div class="article-share">
                                <ul class="social">
                                    <li></li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="pinterest" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                     <li>
                                <a href="#" class="linkedin" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                </aside>
            </div>
        </div>
    </div>
</section>
@endsection

