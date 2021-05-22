@extends('layouts.app')

@section('content')
@include('layouts.lastnews')


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



<section class="slider">
	<ul id="autoWidth" class="cs-hidden">
	<!--1------------------------------------>
  <li class="item-a">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img alt="1" src="images/1.jpg">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>
	<a href="#" class="buy-btn">Buy Now</a>
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$23</a>

	</div>

	</div>
</li>
	<!--2------------------------------------>
  <li class="item-b">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img alt="2" src="images/2.jpg">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>
	<a href="#" class="buy-btn">Buy Now</a>
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$20</a>

	</div>

	</div>
</li>
	<!--3------------------------------------>
  <li class="item-c">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img alt="3" src="images/3.jpg">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>
	<a href="#" class="buy-btn">Buy Now</a>
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$26</a>

	</div>

	</div>
</li>
	<!--4------------------------------------>
  <li class="item-d">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img alt="4" src="images/4.jpg">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>
	<a href="#" class="buy-btn">Buy Now</a>
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$27</a>

	</div>

	</div>
</li>
	<!--5------------------------------------>
  <li class="item-e">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img alt="5" src="images/5.jpg">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>
	<a href="#" class="buy-btn">Buy Now</a>
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$26</a>

	</div>

	</div>
</li>
	<!--6------------------------------------>
  <li class="item-f">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img alt="6" src="images/6.jpg">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>
	<a href="#" class="buy-btn">Buy Now</a>
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$30</a>

	</div>

	</div>
</li>
	<!--7------------------------------------>
  <li class="item-g">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img alt="7" src="images/7.jfif">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>
	<a href="#" class="buy-btn">Buy Now</a>
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$33</a>

	</div>

	</div>
</li>
	<!--8------------------------------------>
  <li class="item-h">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img alt="8" src="images/8.jfif">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>
	<a href="#" class="buy-btn">Buy Now</a>
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$43</a>

	</div>

	</div>
</li>

</ul>
	</section>



<!--script-link----------->
<script type="text/javascript">

// JavaScript Document
$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        }
    });
  });



</script>



<style>

a{
	text-decoration:none;
}
.box{
	width:350px;
	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
	border-radius: 10px;
	overflow: hidden;
	margin: 25px;
}
.slide-img{
	height: 450px;
	position:relative;
}
.slide-img img{
	width:100%;
	height: 100%;
	object-fit: cover;
	box-sizing: border-box;
}
.detail-box{
	width: 100%;
display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 10px 20px;
	box-sizing: border-box;
	font-family: calibri;
}
.type{
	display: flex;
	flex-direction: column;
}
.type a{
	color:#222222;
	margin: 5px 0px;
	font-weight: 700;
	letter-spacing: 0.5px;
	padding-right: 8px;
}
.type span{
	color:rgba(26,26,26,0.5);
}
.price{
	color: #333333;
	font-weight: 600;
	font-size: 1.1rem;
	font-family: poppins;
	letter-spacing: 0.5px;
}
.overlay{
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%,-50%);
	width:100%;
	height: 100%;
	background-color: rgba(92,95,236,0.6);
	display: flex;
	justify-content: center;
	align-items: center;
}
.buy-btn{
	width:160px;
	height: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-color: #FFFFFF;
	color:#252525;
	font-weight: 700;
	letter-spacing: 1px;
	font-family: calibri;
	border-radius: 20px;
	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
}
.buy-btn:hover{
	color:#FFFFFF;
	background-color: #f15fa3;
	transition: all ease 0.3s;
}
.overlay{
	visibility: hidden;
}
.slide-img:hover .overlay{
	visibility: visible;
	animation:fade 0.5s;
}

@keyframes fade{
	0%{
		opacity: 0;
	}
	100%{
		opacity: 1;
	}
}
.slider{
	width:100%;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

</style>
@endsection

