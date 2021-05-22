@extends('layouts.app')

@section('content')
@include('layouts.lastnews')




<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>About us</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </div>
</div>


<section class="about-area ptb-50">
    <div class="container">
        <div class="about-image">
            <img src="img/logo/2.png" alt="image">
        </div>
        <div class="about-content sobrenos">
            <h3>Diamond Review Africa</h3>
            <p>Diamond Review Africa is an international news outlet designed to provide
                the latest, most complete and most insightful information about the diamond
                industry in the world in general and in Africa in particular. In the form of
                 a news wall and smart app, Diamond Review Africa is an efficient and fast way to
                  track and keep up with industry news and trends. We present
                   headlines of the latest news, updated daily.
                Powered and owned by Re-call Communications and Events Ltd

            </p>
            <p>The diamond industry is a constantly evolving global business,
                 strongly influenced by international events.
                 Staying informed about top industry developments,
                  trends and dynamics is key for stakeholders in the business,
                   but since we live in an age of information overload,
                   keeping up with the latest diamond news can be tedious and time consuming.
                    Thanks to <b> The Diamond Review Africa </b>, those interested in the diamond industry
                     no longer need to look through numerous websites to find the information they need.
                     <b>The Diamond Review Africa</b> is not simply a repository of news.
                     Opinion pieces and in-depth analyses by both experts active in the global diamond
                     sector and those from outside the industry, feature on a regular basis.</p>
        </div>
    </div>
</section>









<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

    * {
      box-sizing: border-box;
    }

    .row > .column {
        padding: 10px 0px;

}
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .column {
      float: left;
      width: 20%;

    }
    .column ul {
	display: flex;
	padding: 0;
	width: 400%;

	animation: cambio 20s infinite alternate linear;
}

    /* The Modal (background) */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: black;
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      width: 90%;
      max-width: 1200px;
    }

    /* The Close Button */
    .close {
      color: white;
      position: absolute;
      top: 10px;
      right: 25px;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #999;
      text-decoration: none;
      cursor: pointer;
    }

    .mySlides {
      display: none;
    }

    .cursor {
      cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    img {
      margin-bottom: -4px;
    }

    .caption-container {
      text-align: center;
      background-color: black;
      padding: 2px 16px;
      color: white;
    }

    .demo {
      opacity: 0.6;
    }

    .active,
    .demo:hover {
      opacity: 1;
    }

    img.hover-shadow {
      transition: 0.3s;
    }

    .hover-shadow:hover {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    @keyframes slidy {
   0%{margin-left:0%;}
  20%{margin-left:0%;}

  25%{margin-left:-100%;}
  45%{margin-left:-100%;}

  50%{margin-left:-200%;}
  70%{margin-left:-200%;}

  75%{margin-left:-100%;}
  95%{margin-left:-100%;}

 100%{margin-left:0%;}
}


    </style>






    <h2 style="text-align:center">Lightbox</h2>

    <div class="row">
      <div class="column">
        <img src="img/politics-news/1.jpg"style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="img/politics-news/1.jpg"style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="img/politics-news/1.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="img/politics-news/1.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="img/politics-news/1.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
      </div>


    </div>

    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="img_nature_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="img_snow_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="img_mountains_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">4 / 4</div>
          <img src="img_lights_wide.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>


        <div class="column">
          <img class="demo cursor" src="img_nature_wide.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
        </div>
        <div class="column">
          <img class="demo cursor" src="img_snow_wide.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
        </div>
        <div class="column">
          <img class="demo cursor" src="img_mountains_wide.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
        </div>
        <div class="column">
          <img class="demo cursor" src="img_lights_wide.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
        </div>
      </div>
    </div>

    <script>
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);


    function plusSlides(n) {
      showSlides(slideIndex += n);



    }
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {

      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;


    }
    $('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
    </script>



@endsection






