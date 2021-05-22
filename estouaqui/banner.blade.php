

<section class="main-news-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-main-news">
                    @if ($noticiasTopBig != null)
                        <a href="#">
                            <a href="#">
                            <img src="{{ asset('public/images') }}/{{ $noticiasTopBig->image_noticia }}"
                            srcset="{{ asset('public/images') }}/{{ $noticiasTopBig->image_noticia }} 480w,
                                    {{ asset('public/images') }}/{{ $noticiasTopBig->image_noticia }} 800w"
                                    sizes="(max-width: 700px) 480px,800px"
                                alt="Banner Diamond" >
                        </a>
                        </a>
                        <div class="news-content">

                        
                                <div class="tag">{{ $noticiasTopBig->artigo }}</div>
                     
                            <h3>
                                <a href="/newspost/{{ $noticiasTopBig->noticia_id }}">{{ $noticiasTopBig->titulo }}</a>
                            </h3>
                        <p style="color:white">
                            {{ $noticiasTopBig->news_short_description }}
                        </p>

                        </div>
                    @endif

                </div>
            </div>
            <div class="col-lg-4">
                @if ($noticiasSub != null)
                    @foreach ($noticiasSub as $notSub)
                        <div class="single-main-news-inner">
                            <a href="#">
                                <img src="{{ asset('public/images') }}/{{ $notSub->image_noticia }}" alt="image">
                            </a>
                            <div class="news-content">
                                <div class="tag">{{ $notSub->artigo }}</div>
                                <h3>
                                    <a href="/newspost/{{ $notSub->noticia_id }}">{{ $notSub->titulo }}</a>
                                </h3>
                            </div>
                        </div><br>
                    @endforeach

                @endif
            </div>
        </div>
    </div>
</section>
