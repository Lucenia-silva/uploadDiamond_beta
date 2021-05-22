

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css" integrity="sha512-apX8rFN/KxJW8rniQbkvzrshQ3KvyEH+4szT3Sno5svdr6E/CP0QE862yEeLBMUnCqLko8QaugGkzvWS7uNfFQ==" crossorigin="anonymous" />
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="login-block">
  <h2 class="text-center"><a href="/"><img src="{{asset('public/img/logo/Diamond/2.png')}}"style="width:20rem;margin-bottom: 1rem" alt="image"></a>

  </h2>

<div class="container">
	<div class="row">
	   
		<div class="col-md-6 login-sec">
		    <h2 class="text-center">Sign in</h2>
		    <form class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-capitalize">Username</label>
    <input type="text" class="form-control" placeholder="">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-capitalize">Password</label>
    <input type="password" class="form-control" placeholder="">
  </div>


    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
    <button type="submit" class="btn btn-login float-right">Send</button>
  </div>

</form>

    <div class="my-5 texte" style="margin-top: 4rem">
    <div class="copy-text1" style="margin-left: 0.1rem">OR</div>
    <br>
    <button type="button" class="btn btn-outline-primary btn-block">Login or register Facebook</button>

    <button type="button" class="btn btn-outline-danger btn-block">Login or register Google</button>

    <button type="button" class="btn btn-outline-success btn-block">Login or register Twitter</button>


    <div class="copy-text"><a href="{{route('subscribe')}}">Created your account with<i class="fa fa-heart"></i>by Register</a></div>
    </div>
</div>

  
    <div class="col-md-6 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
             
            <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
           

        <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>This is Heaven</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
      
        <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>This is Heaven</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
        </div>
        </div>
        <div class="carousel-item">
     
        <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>This is Heaven</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
        </div>
    </div>
                </div>

		</div>
	</div>

</div>

</section>

<style type="text/css">

@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
background: #ae221c;
font-family:roboto,sans-serif;
      /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #7d3b96, #ae221c);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #7d3b96, #ae221c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;

}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)no-repeat left bottom;
     background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left;font-family: roboto, sans-serif;
 left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:30px;
    font-size:13px;text-align:center;font-family:roboto,sans-serif;
}
.login-sec .copy-text1{ width:100%; bottom:190px;text-align:center;
    font-size:14px; color:black;font-weight: 400px; font-family:roboto,sans-serif;
}
.login-sec .copy-text i{color:#FEB58A;font-size: 14px;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-top:-30px;font-family:sans-serif;
 font-weight:400; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; font-family:roboto,sans-serif;
display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:500;font-family:roboto,sans-serif;
}
.banner-text{width:70%; position:absolute; bottom:50px; padding-left:20px;font-family:roboto,sans-serif;
}
.banner-text h2{color:#fff; font-weight:600;font-family:roboto,sans-serif;
}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block;font-family:roboto,sans-serif;
 margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;font-family:roboto,sans-serif;
}


.a {
  padding: 1px;
  font-size: 2px;
  width: 1rem;
  text-align: center;
  text-decoration: none;

}
.texte{
    margin-bottom: -200rem
}

.fa:hover {
    opacity: 0.9;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-skype {
  background: #00aff0;
  color: white;
}


</style>

