    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



    <div class="brand-carousel owl-carousel" style="  width:1510px">

        <div class="single-logo">
          <img src="{{asset('public/img/politics-news/1.jpg')}}" alt="">
        </div>
      <div class="single-logo">
          <img src="{{asset('public/img/politics-news/1.jpg')}}"   alt="">
        </div>
      <div class="single-logo">
          <img src="{{asset('public/img/politics-news/1.jpg')}}" alt="">
        </div>
      <div class="single-logo">
          <img src="{{asset('public/img/politics-news/1.jpg')}}"  alt="">
        </div>
      <div class="single-logo">
          <img src="{{asset('public/img/politics-news/1.jpg')}}" alt="">
        </div>
      <div class="single-logo">
          <img src="{{asset('public/img/politics-news/1.jpg')}}" alt="">
        </div>
      </div>

      <style>



    .single-logo{
        margin: 10px -5px;
        margin-top: 50px;
    }
    .brand-carousel {
    background: aliceblue;
    margin-top: 1%;
    margin-left: -12rem;
    background-image:url("public/img/logo/Diamond/Pr.png");
    }
    .owl-dots {
      
    }
      </style>


    <script>

    $('.brand-carousel').owlCarousel({
      loop:true,
      margin:10,
      autoplay:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        1000:{
          items:5
        }
      }
    })

    </script>
