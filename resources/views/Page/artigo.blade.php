
@extends('layouts.app')

@section('content')

@include('layouts.lastnews')

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>News details</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>News details</li>
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
                        <img src="img/news-details/1.jpg" alt="image">
                    </div>
                    <div class="article-content">
                        <span><a href="#">Patricia</a> / 28 September 2021 / <a href="#">0 Comment</a></span>
                        <h3>The Prime Minister’s said that selfish nations are constantly dying for their own
                            interests.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                            dolores eos qui ratione.</p>
                        <div class="desc-overview">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="desc-image">
                                        <img src="img/news-details/1.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="desc-text">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                            voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                            clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                                            amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum.</p>
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
                    <div class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit">
                                <i class='bx bx-search'></i>
                            </button>
                        </form>
                    </div>
                    <section class="widget widget_latest_news_thumb">
                        <h3 class="widget-title">Latest news</h3>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg1" role="img"></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall"><a href="#">Negotiations on a peace agreement between the
                                        two countries</a></h4>
                                <span>28 September, 2021</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg2" role="img"></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall"><a href="#">Love songs helped me through heartbreak</a>
                                </h4>
                                <span>28 September, 2021</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg3" role="img"></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall"><a href="#">This movement aims to establish women
                                        rights</a></h4>
                                <span>28 September, 2021</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg4" role="img"></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall"><a href="#">Giving special powers to police officers to
                                        prevent crime</a></h4>
                                <span>28 September, 2021</span>
                            </div>
                        </article>
                    </section>
                    <section class="widget widget_popular_posts_thumb">
                        <h3 class="widget-title">Popular posts</h3>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg1" role="img"></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall"><a href="#">Match between United States and England at AGD
                                        stadium</a></h4>
                                <span>28 September, 2021</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg2" role="img"></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall"><a href="#">For the last time, he addressed the people</a>
                                </h4>
                                <span>28 September, 2021</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg3" role="img"></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall"><a href="#">The coronavairus is finished and the outfit is
                                        busy</a></h4>
                                <span>28 September, 2021</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg4" role="img"></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall"><a href="#">A fierce battle is going on between the two in
                                        the game</a></h4>
                                <span>28 September, 2021</span>
                            </div>
                        </article>
                    </section>


                </aside>
            </div>
        </div>
    </div>
</section>








@endsection
