<!--<div class="row teste">
    <div class="databanner">
         <div class="col-3 lastnews1" style="margin-bottom:1rem;">
            <div class="lastnews">
                <p style="margin-right:1%">Last News |
                </p>
            </div>

        </div>
        <div class="col-8" >
            <marquee behavior="scroll" width="400" height="50" scrolldelay="4"
                    scrollamount="4" direction="left"
                    onmouseover="this.stop()" onmouseout="this.start()" style="margin-right:20rem">
                        <p>Petra finds 39-carat blue diamond at Cullinan mine&nbsp;&nbsp;&nbsp;&nbsp; -
                             Important milestones achieved at Yanfolila&nbsp;&nbsp;&nbsp;&nbsp;-
                             NGO Claims Lethal Ammunition Used at Petra Mine </p>
            </marquee>
        </div>
        <div class="col-1" >
            <div class="temperatura" style="margin-right:40%;margin-bottom:1rem;">
                <p>Luanda, Angola<span> 28 </span> &#x2103;</p>
            </div>

        </div>
</div>
</div>-->


   <div class="most-popular-news">
        <div class="section-title">
            <h2>1Top Store</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-main-news-inner">
                    <a href="#">
                        <img src="img/main-news/2.jpg" alt="image">
                    </a>
                    <div class="news-content">
                        <div class="tag">Jewerly</div>
                        <h3>
                            <a href="{{route('artigo')}}">Follow some simple rules to invest money in any business</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-main-news-inner">
                    <a href="#">
                        <img src="img/main-news/2.jpg" alt="image">
                    </a>
                    <div class="news-content">
                        <div class="tag">Jewerly</div>
                        <h3>
                            <a href="{{route('artigo')}}">Follow some simple rules to invest money in any business</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-main-news-inner">
                    <a href="#">
                        <img src="img/main-news/2.jpg" alt="image">
                    </a>
                    <div class="news-content">
                        <div class="tag">Jewerly</div>
                        <h3>
                            <a href="{{route('artigo')}}">Follow some simple rules to invest money in any business</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

</div>


    <div class="politics-news">
        <div class="section-title">
            <h2>Politics</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-politics-news">
                    <div class="politics-news-image">
                        <a href="#">
                            <img src="img/politics-news/1.jpg" alt="image">
                        </a>
                    </div>
                    <div class="politics-news-content">
                        <span>Politics</span>
                        <h3>
                            <a href="#">Organizing conference among our selves to make it better financially</a>
                        </h3>
                        <p>  <a href="{{route('artigo')}}">Jonson Steven</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-politics-news">
                    <div class="politics-news-image">
                        <a href="#">
                            <img src="img/politics-news/1.jpg" alt="image">
                        </a>
                    </div>
                    <div class="politics-news-content">
                        <span>Politics</span>
                        <h3>
                            <a href="#">Politically, new riots have started inside the country</a>
                        </h3>
                        <p>  <a href="{{route('artigo')}}">Jonson Steven</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-politics-news">
                    <div class="politics-news-image">
                        <a href="#">
                            <img src="img/politics-news/1.jpg" alt="image">
                        </a>
                    </div>
                    <div class="politics-news-content">
                        <span>Politics</span>
                        <h3>
                            <a href="{{route('artigo')}}">Preparations are being made in a new way for the elections</a>
                        </h3>
                    </div>
                </div>
            </div>

        </div>


    </div>
<section class="main-news-area " >


    @include('layouts.slider')



</section>

<div class="sider" style="position: relative;width:100%;background:red" >
<p>oal</p>
</div>


<style type="text/css">

.carousel-inner img {
    min-width: 250px;
}

@media(max-width:767px) {

        .carousel-inner>.item>a>img, .carousel-inner>.item>img{
            width: 100%;
            height: 240px;
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;

}
.texto p {
    margin-top: -2.5rem;
    font-family: sans-serif;
    margin-left: 8px;
  }
  .baixo{
    margin-top:-10rem;

  }

}
</style>
    <div class="row baixo" style="margin-bottom:10rem"></div>


    <div class="row">
        <div class="col-lg-2"></div>

    <div class="col-lg-5">
        <div id="slideset1" style="width: 100%">
            <div>
              <h1>This is slide 1</h1>
              <img src="img/main-news/2.jpg" alt="image" >
              <p>It has a <a href="./">link.</a>
            </div>
            <div>
              <h1>This is the second slide</h1>
              <img src="img/politics-news/1.jpg"" alt="image" >
            </div>
            <div>
              <h1>This is slide number 3</h1>
              <img src="img/main-news/2.jpg" alt="image" >
            </div>
          </div>

    </div>

        <div class="col-lg-4 " >
            <aside class="widget-area  ">
                <section class="widget widget_newsletter fundsubst slidarea">
                    <div class="newsletter-content ">
                        <h3>Subscribe to Our Newsletter</h3>
                        <p>Don’t worry, we don’t spam</p>
                    </div>
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL"
                            required autocomplete="off">
                        <button type="submit">Subscribe</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </section>
            </aside>
        </div>
        <div class="col-lg-1"></div>

    </div>



<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="card" style="width: 18rem;">
             <a href="/">       </a>

         <div class="card-body rubrica1">

       <a href="">
            <div class="rubrica">Rough Markets</div>
        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
            <p class="rubrica-texto">Some quick example text to build on the card.</p>
       </a>
          </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card" style="width: 18rem;">
             <a href="/">       </a>

         <div class="card-body rubrica1">

       <a href="">
            <div class="rubrica">Rough Markets</div>
        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
            <p class="rubrica-texto">Some quick example text to build on the card.</p>
       </a>
          </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card" style="width: 18rem;">
             <a href="/">       </a>

         <div class="card-body rubrica1">

       <a href="">
            <div class="rubrica">Rough Markets</div>
        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
            <p class="rubrica-texto">Some quick example text to build on the card.</p>
       </a>
          </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card" style="width: 18rem;">
             <a href="/">       </a>

         <div class="card-body rubrica1">

       <a href="">
            <div class="rubrica">Rough Markets</div>
        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
            <p class="rubrica-texto">Some quick example text to build on the card.</p>
       </a>
          </div>
    </div>
    </div>
</div>





<style type="text/css">



#slideset1 {height: 50em; position: relative}
#slideset1 > * {visibility: hidden; position: absolute;
  top: 0; left: 0; animation: 12s autoplay1 infinite}

  @keyframes autoplay1 {
  0% {visibility: visible}
  33.33% {visibility: hidden}
}

#slideset1 > *:nth-child(1) {animation-delay: 0s}
#slideset1 > *:nth-child(2) {animation-delay: 4s}
#slideset1 > *:nth-child(3) {animation-delay: 8s}

    </style>




<script>
{
        var d = new Date();
        window.document.getDate = d
    }

</script>
