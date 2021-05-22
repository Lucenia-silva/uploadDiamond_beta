@extends('layouts.app')


@section('content')
@include('layouts.lastnews')


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                @if ($menuActual != null)
                    <h2>{{ $menuActual->titulo }}</h2>
                @endif
                <ul>
                    <li><a href="/">Home</a></li>
                    @if ($menuActual != null)
                        <li>{{ $menuActual->titulo }}</li>
                    @endif

                </ul>
            </div>
        </div>
    </div>


    <section class="default-news-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="politics-news">
                    <div class="section-title">
                        <h2>Top Story</h2>
                    </div>
                    <div class="row">
                        @if ($noticiasCatBig != null)

                            <div class="col-lg-6">
                                <div class="single-politics-news">
                                    <div class="politics-news-image">
                                        <a href="/newspost/{{ $noticiasCatBig->noticia_id }}">
                                            <img src="{{asset('public/images') }}/{{ $noticiasCatBig->image_noticia }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="politics-news-content">
                                        <span>{{$menuActual->titulo}}</span>
                                        <h3>
                                            <a href="/newspost/{{ $noticiasCatBig->noticia_id }}">{{$noticiasCatBig->titulo}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col-lg-6">
                            <div class="row">
                                @if ($subBanner != null)
                                    @foreach ($subBanner as $banner)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="politics-news-post-box">
                                                <a href="#">
                                                    <img src="{{asset('public/images') }}/{{ $banner->image_noticia }}" alt="image">
                                                </a>
                                                <div class="politics-news-content">
                                                    <h3>
                                                        <a href="/newspost/{{ $banner->noticia_id }}">{{$banner->titulo}}</a>
                                                    </h3>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        @if ($terceiroBanner != null)
                            @foreach ($terceiroBanner as $terceiro)
                                <div class="col-lg-4">
                                    <div class="single-politics-news">
                                        <div class="politics-news-image">
                                            <a href="#">
                                                <img src="{{asset('public/images') }}/{{ $terceiro->image_noticia }}" alt="image">
                                            </a>
                                        </div>
                                        <div class="politics-news-content">
                                            <span>{{$menuActual->titulo}}</span>
                                            <h3>
                                             
                                                <a href="/newspost/{{ $terceiro->noticia_id }}">{{$terceiro->titulo}}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                   @if ($allNews != null)
                        @foreach ($allNews as $allNoticia)
                            <div class="single-politics-news">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="politics-news-image">
                                            <a href="#">
                                                <img src="{{asset('public/images') }}/{{ $allNoticia->image_noticia }}" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="politics-news-content-box">
                                            <span>{{$menuActual->titulo}}</span>
                                            <h3>
                                                <a href="/newspost/{{ $allNoticia->noticia_id }}">{{$allNoticia->titulo}}</a>
                                            </h3>
                                            <p>{{$allNoticia->news_short_description}}</p>
                                            <div class="date">{{ date('d M Y', strtotime($allNoticia->created_at)) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="pagination-area">
                        <a href="#" class="prev page-numbers">
                            <i class='bx bx-chevron-left'></i>
                        </a>
                        <a href="#" class="page-numbers">1</a>
                        <span class="page-numbers current" aria-current="page">2</span>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers">
                            <i class='bx bx-chevron-right'></i>
                        </a>
                    </div>
                </div>
                @include('menupage.sidebar')
            </div>
        </div>
    </section>
@endsection
