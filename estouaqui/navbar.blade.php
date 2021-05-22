        <div class="most-popular-news">
            @if (count($topStory) > 0)
                <div class="section-title">
                    <h2>Last News</h2>
                </div>
            @endif
        <div class="row">
            @if ($topStory != null)
                @foreach ($topStory as $topNews)
                    <div class="col-lg-4">
                        <div class="single-main-news-inner">
                            <a href="#">
                                <img src="{{ asset('public/images') }}/{{ $topNews->image_noticia }}" alt="image">
                            </a>
                            <div class="news-content">
                                <div class="tag">{{ $topNews->artigo }}</div>
                                <h3>
                                    <a href="/newspost/{{ $topNews->noticia_id }}">{{ $topNews->titulo }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
          <br>
    </div>

<div class="politics-news">
      
                <div class="section-title">
                    <h2>Mining & Exploration</h2>
                </div>

                <div class="row">
                        @if ($noticiaManing != null)
                            @foreach ($noticiaManing as $notSub)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-politics-news">
                                            <div class="politics-news-image">
                                                <a href="#">
                                                    <img src="{{ asset('public/images') }}/{{ $notSub->image_noticia }}" alt="image">
                                                </a>
                                            </div>
                                            <div class="politics-news-content">
                                                <span>{{ $notSub->artigo }}</span>
                                            <h3>
                                            <a href="/newspost/{{ $notSub->noticia_id }}">{{ $notSub->titulo }}</a>
                                    <div class='row'>
                                    <div class="col-lg-3 col-md-6">
                                    <div class="" >
                                        <div class="card-body">
                                            <p class="rubrica-texto mining-texto" style="width:17rem;margin-top:0;margin-left:-1rem">
                                                {{$notSub->news_short_description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                            </h3>
                            </div>
                        </div>
                    </div>
                            
                            @endforeach
                         @endif
                </div>
                <div class='row' style="margin-top:-2rem">
                   <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">
                             <a href="/newspost/{{ $notSub->noticia_id }}"> 
                       <div class="card-body rubrica1">
                            <div class="rubrica">MINING AND EXPLORATION</div>
                        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
                            <p class="rubrica-texto">Some quick example text to build on the card.</p>
                       </a>
                          </div>
                        </div>
                </div>
                        <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">
                             <a href="/newspost/{{ $notSub->noticia_id }}"> 
                       <div class="card-body rubrica1">
                            <div class="rubrica">MINING AND EXPLORATION</div>
                        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
                            <p class="rubrica-texto">Some quick example text to build on the card.</p>
                       </a>
                          </div>
                        </div>
                </div>
                       <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">
                             <a href="/newspost/{{ $notSub->noticia_id }}"> 
                       <div class="card-body rubrica1">
                            <div class="rubrica">MINING AND EXPLORATION</div>
                        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
                            <p class="rubrica-texto">Some quick example text to build on the card.</p>
                       </a>
                          </div>
                        </div>
                </div>
                       <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">
                             <a href="/newspost/{{ $notSub->noticia_id }}"> 
                       <div class="card-body rubrica1">
                            <div class="rubrica">MINING AND EXPLORATION</div>
                        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
                            <p class="rubrica-texto">Some quick example text to build on the card.</p>
                       </a>
                          </div>
                        </div>
                        <br>
                </div>
                </div>
               
</div>


<section class="main-news-area " >

    <div class="sliderboxe ">
        <div class="boxe">
    @include('layouts.slider')

            <div id="recipeCarousel " class="carousel  slide w-90" data-ride="carousel">
                <div class="carousel-inner w-100 exemplo" role="listbox">

                </div>
            </div>
        </div>

    </div>
</section>

    
    <!-- <div class="row"style="margin-bottom:3rem"></div>-->

     <div class="row fundo ptb-50">
        <!--<div class="col-lg-1"></div>

        <div class="col-lg-6">
            <div class="slider">
                <ul>
                  <li>
                    <img src="{{asset('public/img/logo/Publicit/1.jpg')}} "alt="image">
                  </li>
                  <li>
                    <img src="{{asset('public/img/logo/Publicit/1.jpg')}} "alt="image">
                  </li>
                    <li>
                    <img src="{{asset('public/img/logo/Publicit/1.jpg')}} "alt="image">
                  </li>
                     <li>
                    <img src="{{asset('public/img/logo/Publicit/1.jpg')}} "alt="image">
                  </li>
                
                </ul>
            </div>
         </div>

        <div class="col-lg-4">
            <aside class="widget-area ">
                <section class="widget widget_newsletter fundsubst">
                    <div class="newsletter-content">
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
        </div>-->
    </div>

      
   
<div class="politics-news">

            <div class="section-title">
                <h2>News</h2>
            </div>

            <div class="row">
                    @if ($noticiaPolitica != null)
                        @foreach ($noticiaPolitica as $notSub)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-politics-news">
                                <div class="politics-news-image">
                                    <a href="#">
                                            <img src="{{ asset('public/images') }}/{{ $notSub->image_noticia }}" alt="image">
                                    </a>
                                </div>
                                <div class="politics-news-content">
                                    <span>{{ $notSub->artigo }}</span>
                                    <h3>
                                        <a href="/newspost/{{ $notSub->noticia_id }}">{{ $notSub->titulo }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     @endif
            </div>
                <div class='row'>
                 <div class="col-lg-3 col-md-6">
                     <div class="card" style="width: 18rem;">
                        <a href="/newspost/{{ $notSub->noticia_id }}">
                        <div class="card-body rubrica1">
                        <div class="rubrica">Market</div>
                        <p class="rubrica-title">Auction Pause Pushes Gemfields to Steep Los.</p>
                        <p class="rubrica-texto">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </a>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6">
                     <div class="card" style="width: 18rem;">
                        <a href="/newspost/{{ $notSub->noticia_id }}">
                        <div class="card-body rubrica1">
                        <div class="rubrica">Market</div>
                        <p class="rubrica-title">Auction Pause Pushes Gemfields to Steep Los.</p>
                        <p class="rubrica-texto">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </a>
                    </div>
                </div>
            </div>
                         <div class="col-lg-3 col-md-6">
                     <div class="card" style="width: 18rem;">
                        <a href="/newspost/{{ $notSub->noticia_id }}">
                        <div class="card-body rubrica1 ">
                        <div class="rubrica">Market</div>
                        <p class="rubrica-title">Auction Pause Pushes Gemfields to Steep Los.</p>
                        <p class="rubrica-texto">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </a>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6">
                     <div class="card" style="width: 18rem;">
                        <a href="/newspost/{{ $notSub->noticia_id }}">
                        <div class="card-body rubrica1">
                        <div class="rubrica">Market</div>
                        <p class="rubrica-title">Auction Pause Pushes Gemfields to Steep Los.</p>
                        <p class="rubrica-texto">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </a>
                    </div>
                </div><br>
            </div>
                </div>


</div>

<div class="politics-news">

            <div class="section-title">
                <h2>Rough Markets</h2>
            </div>

            <div class="row">
                    @if ($noticiaNews != null)
                        @foreach ($noticiaNews as $notSub)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-politics-news">
                                <div class="politics-news-image">
                                    <a href="#">
                                        <img src="{{ asset('public/images') }}/{{ $notSub->image_noticia }}" alt="image">
                                    </a>
                                </div>
                                <div class="politics-news-content">
                                    <span>{{ $notSub->artigo }}</span>
                                    <h3>
                                        <a href="/newspost/{{ $notSub->noticia_id }}">{{ $notSub->titulo }}</a>
                                        <div class='row'>
                                    <div class="col-lg-3 col-md-6">
                                    <div class="" >
                                        <div class="card-body">
                                            <p class="rubrica-texto mining-texto" style="width:17rem;margin-top:0;margin-left:-1rem">
                                                {{$notSub->news_short_description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     @endif

            </div>
                <div class='row'>
                     <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">
                             <a href="/newspost/{{ $notSub->noticia_id }}"> 
                       <div class="card-body rubrica1 ">
                            <div class="rubrica">Rough Markets</div>
                        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
                            <p class="rubrica-texto">Some quick example text to build on the card.</p>
                       </a>
                          </div>
                        </div>
                </div>
                        <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">
                             <a href="/newspost/{{ $notSub->noticia_id }}"> 
                       <div class="card-body rubrica1">
                            <div class="rubrica ">Rough Markets</div>
                        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
                            <p class="rubrica-texto">Some quick example text to build on the card.</p>
                       </a>
                          </div>
                        </div>
                </div>
                      <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">
                             <a href="/newspost/{{ $notSub->noticia_id }}"> 
                       <div class="card-body rubrica1">
                            <div class="rubrica">Rough Markets</div>
                        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
                            <p class="rubrica-texto">Some quick example text to build on the card.</p>
                       </a>
                          </div>
                        </div>
                </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">
                             <a href="/newspost/{{ $notSub->noticia_id }}"> 
                       <div class="card-body rubrica1">
                            <div class="rubrica">Rough Markets</div>
                        <p class="rubrica-title">Petra sells 299 carat diamond for $12.18 million.</p>
                            <p class="rubrica-texto">Some quick example text to build on the card.</p>
                       </a>
                          </div>
                        </div>
                </div>


</div>

<style type="text/css">

.carousel-inner img{
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
    margin-top: -1.5rem;
    font-family: roboto,sans-serif;
    margin-left: 8px;
  }
  .baixo{
    margin-top:-10rem;

  }

}
</style>


