
@extends('layouts.app')

@section('content')
@include('layouts.lastnews')


<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
           @if ($categoriaAgora != null)
                    <h2>{{ $categoriaAgora->titulo }}</h2>
                @endif

                <ul>
                    <li><a href="/">Home</a></li>
                    @if ($categoriaAgora != null)
                      <li>{{ $categoriaAgora->titulo }}</li>
                    @endif

                </ul>
        </div>
    </div>
</div>


<section class="news-details-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            @if($noticiaActual != null)
                                <img src="{{ asset('public/images') }}//{{ $noticiaActual->image_noticia }}" alt="image">
                            @endif

                        </div>
                        <div class="article-content">
                           <span>{{ date('d M Y', strtotime($noticiaActual->created_at)) }}</span>
                            <h3>{{ $noticiaActual->titulo }}</h3>
                            <p>{{ $noticiaActual->news_short_description }}</p>

                            <div class="desc-overview">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="desc-text">
                                            <p>{{ $noticiaActual->news_full_content }}</p>
                                        </div>
                                        
                                    </div>
                                      <div class="col-lg-6">
                                        <div class="desc-image">
                                            <!--<img src="{{ asset('public/images') }}//{{ $noticiaActual->image_noticia }}" alt="image">-->
                                        </div>
                                    </div>
                                     
                                      
                                    
                                </div>
                            </div>



                        </div>
                        <div class="article-footer">
                            <div class="article-share">
                                <ul class="social">
                                    <li><span>Share:</span></li>
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
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="widget-area">

                        <section class="widget widget_latest_news_thumb">
                            <h3 class="widget-title">Latest news</h3>
                                <div class="row">
                                 <div class="col-lg-3">
                                <img src="{{asset('public/img/politics-news/1.jpg')}} "alt="image">
                                </div>
                                 <div class="col-lg-9">
                                    <h6 class="title usmall"><a href="#">Negotiations on a peace agreement between the
                                            two countries</a></h6>
                                    <span>28 September, 2021</span>
                                </div>
                                </div>
                           <div class="row">
                                 <div class="col-lg-3">
                                <img src="{{asset('public/img/politics-news/1.jpg')}} "alt="image">
                                </div>
                                 <div class="col-lg-9">
                                    <h6 class="title usmall"><a href="#">Negotiations on a peace agreement between the
                                            two countries</a></h6>
                                    <small>28 September, 2021</small>
                                </div>
                                </div>
                               <div class="row">
                                 <div class="col-lg-3">
                                <img src="{{asset('public/img/politics-news/1.jpg')}} "alt="image">
                                </div>
                                 <div class="col-lg-9">
                                    <h6 class="title usmall"><a href="#">Negotiations on a peace agreement between the
                                            two countries</a></h6>
                                    <span>28 September, 2021</span>
                                </div>
                                </div>
                             <div class="row">
                                 <div class="col-lg-3">
                                <img src="{{asset('public/img/politics-news/1.jpg')}} "alt="image">
                                </div>
                                 <div class="col-lg-9">
                                    <h6 class="title usmall"><a href="#">Negotiations on a peace agreement between the
                                            two countries</a></h6>
                                    <span>28 September, 2021</span>
                                </div>
                                </div>
                            <div class="row">
                                 <div class="col-lg-3">
                                <img src="{{asset('public/img/politics-news/1.jpg')}} "alt="image">
                                </div>
                                 <div class="col-lg-9">
                                    <h6 class="title usmall"><a href="#">Negotiations on a peace agreement between the
                                            two countries</a></h6>
                                    <span>28 September, 2021</span>
                                </div>
                                </div>
                        </section>
                        <section class="widget widget_popular_posts_thumb">
                            <h3 class="widget-title">Popular posts</h3>
                             <div class="row">
                                 <div class="col-lg-3">
                                <img src="{{asset('public/img/politics-news/1.jpg')}} "alt="image">
                                </div>
                                 <div class="col-lg-9">
                                    <h6 class="title usmall"><a href="#">Match between United States and England at AGD
                                            stadium</a></h6>
                                    <span>28 September, 2021</span>
                                </div>
                                </div>
                             
                              <div class="row">
                                 <div class="col-lg-3">
                                <img src="{{asset('public/img/politics-news/1.jpg')}} "alt="image">
                                </div>
                                 <div class="col-lg-9">
                                    <h6 class="title usmall"><a href="#">Match between United States and England at AGD
                                            stadium</a></h6>
                                    <span>28 September, 2021</span>
                                </div>
                                </div>
                           <div class="row">
                                 <div class="col-lg-3">
                                <img src="{{asset('public/img/politics-news/1.jpg')}} "alt="image">
                                </div>
                                 <div class="col-lg-9">
                                    <h6 class="title usmall"><a href="#">Match between United States and England at AGD
                                            stadium</a></h6>
                                    <span>28 September, 2021</span>
                                </div>
                                </div>
                             <div class="row">
                                 <div class="col-lg-3">
                                <img src="{{asset('public/img/politics-news/1.jpg')}} "alt="image">
                                </div>
                                 <div class="col-lg-9">
                                    <h6 class="title usmall"><a href="#">Match between United States and England at AGD
                                            stadium</a></h6>
                                    <span>28 September, 2021</span>
                                </div>
                                </div>
                        </section>


                    </aside>
                </div>
            </div>
        </div>
    </section>




@endsection
