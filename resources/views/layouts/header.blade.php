
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="">

<header class="header">
    <div class="top_bar">
        <div class="conteinar ">

    <div class="row ">
                <div class="col-3 topbar">
                    <ul style="margin-left:-70rem">
                        <li><a href="">Diamond</a></li>
                        <li><a href="">Actuality</a></li>
                        <li><a href="">News</a></li>
                        <li><a href="">Features</a></li>
                         <li><a href="">Shop</a></li>
                    </ul>
                </div>
                    <div class="col-2"></div>
                <div class="col-6">
            <ul style="color: #ffffff">

                <li><a href="">Subscribe</a></li>
                <li>
                    <a href="https://web.facebook.com/ReviewDiamondAfrica" class="facebook" target="_blank">
                        <i class='bx bxl-facebook'></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/diamondreviewafrica/" class="pinterest" target="_blank">
                        <i class='bx bxl-instagram'></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/the-diamond-review-africa/" class="pinterest" target="_blank">
                        <i class='bx bxl-linkedin'></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/review_diamond" class="twitter" target="_blank">
                        <i class='bx bxl-twitter'></i>
                    </a>
                </li>
                <li>
                    <a href="/" class="linkedin" target="_blank">
                        <i class='bx bxl-youtube'></i>
                    </a>
                </li>
                <li data-toggle="modal" data-target="#modalExemplo">
                    <a href="#">Login</a>
                </li>
                <li>
                    <li><a href=""><i class='bx bx-user'></i></a></li>


             </li>
           </ul>
        </div>
    </div>
    <!--
    <hr style="width:82rem; margin-left:5rem;margin-top:0em;color:#ffffff">
    <div class="row" style="">
        <div class="col-3">
        <img src="{{asset('/img/logo/Diamond/2.png')}}" alt="" style="width:80;margin-left:32em; margin-bottom: -10px">
        </div>
    <div class="col-2"></div>
    <div class="col-6">

        </div>
    </div>
    <div class="row banner1" style="">
        <div class="col-4">
            <ul >
                <li>
                    <a href=""><p>&nbsp;| exclusives</p></a>
                </li>
                <li>
                    <a href=""><p>&nbsp;| weekly</p></a>
                </li>
            </ul>
        </div>
        <div class="col-1"></div>

        <div class="col-6">
            <ul >
                <li>
                    <a href=""><p>&nbsp;| TRENDING</p></a>
                </li>
                <li>
                    <a href=""><p>&nbsp;| FUTURE</p></a>
                </li>
            </ul>
            <br>
        </div>
    </div>-->

       <hr class="hr1">

<div class="logotipo">
    <img src="{{asset('/img/logo/Diamond/2.png')}}" alt="" style="">

</div>


    <div class="row banner1" style="">
        <hr class="hr">

       <div class="row">
        <div class="col-1" >
        </div>
        <div class="col-9 txtx" style="">
            <ul style="margin-right:22.15%;color:white;margin-top:-5rem">
                <li>
                    <a href=""><p>&nbsp;| Exclusives</p></a>
                </li>
                <li>
                    <a href=""><p>&nbsp;| Weekly </p></a>
                </li>
                <li>
                    <a href=""><p>&nbsp;| Category </p></a>
                </li>
                <li>
                    <a href=""><p>&nbsp;| we prodution</p></a>
                </li>
                <li>
                    <a href=""><p>&nbsp;| call center</p></a>
                </li>
            </ul>

        </div>


        <div class="col-1" >

        </div>
    </div>


</header>
     <!--<div class="menu_bar"><div class="conteinar"></ul>-->
            <nav class="menu_bar" >
                    @include('layouts.lastnews')
                    <div class="wrapper">
                        <ul class="nav-links"><input type="checkbox" id="check">
                            <label for="check">
                                <div class="menu" ><span class="hamburguer">
                                </span></div></label>

                    <div class="barra">
                        <div class="itens">
                                <div class="itens-texto">
                                    <h2>Destaque</h2>
                                        <ul>
                                            <a href=""> <li> covid19</li></a>
                                               <a href=""><li> opinion</li></a>
                                               <a href=""><li> Future</li></a>


                                            </li>
                                        </ul>
                                </div>
                                <div class="itens-texto">
                                    <h2>Diamond</h2>

                                        <ul>


                            @if ($categorias != null)
                            @foreach ($categorias as $categoria)

                                <a class=""
                                    href="{{ route('menu', $categoria->cat_id) }}">{{ $categoria->titulo }}
                                </a>


                            @endforeach
                        @endif


                                        </ul>
                                </div>
                                <div class="itens-texto">
                                    <h2>Project Diamond</h2>
                                        <ul>
                                               <a href=""><li> Financy & Trade</li></a>
                                               <a href=""><li> Mining & Exploration</li></a>


                                            </li>
                                        </ul>
                                </div>
                                <div class="itens-texto">
                                    <h2>Sing UP</h2>
                                  <ul style="font-size: 1rem;margin:px">
                                <!-- Facebook -->
                            <a style="color: #3b5998;" href="https://web.facebook.com/ReviewDiamondAfrica" role="button"
                            ><i class="fab fa-facebook-f fa-lg"></i  ></a>
                            <!-- Twitter -->
                            <a style="color: #55acee;" href="https://twitter.com/review_diamond" role="button"
                            ><i class="fab fa-twitter fa-lg"></i  ></a>
                            <!-- Google -->
                            <a style="color: #dd4b39;" href="" role="button"
                            ><i class="fab fa-linkedin fa-lg"></i  ></a>
                            <!-- Instagram -->
                            <a style="color: #ac2bac;" href="https://www.instagram.com/diamondreviewafrica/" role="button">

                                <i class="fab fa-instagram fa-lg"></i></a>
                            </ul>
                            </div>
                            <p class="item">item</p>
                            <p class="item">item</p>


                        </div>
                    </div>
                            <li class="">
                                <a href="/">
                                   HOME
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle">MEGAMENU</a>
                                    <div class="mega-box">
                                   <div class="content">

                                    <div class="row">

                                        <h5></h5>
                                        <ul class="mega-links">
                                            <li>

                                            <li><a href="{{route('menu','1)')}}">Politics</a></li>
                                            <li><a href="{{route('menu','2)')}}">Politics</a></li>
                                            <li><a href="{{route('menu','3)')}}">society</a></li>
                                            <li><a href="{{route('menu','4)')}}">Economia</a></li>
                                            <li><a href="{{route('menu','5)')}}">economy</a></li>
                                            <li><a href="{{route('menu','6)')}}">International</a></li>

                                        </ul>

                                    </div>
                                        <div class="row">
                                            <div class="mega-links">
                                            <img src="img/main-news/2.jpg" alt="image" >
                                            <p>
                                            <a href="">
                                              linguística, a noção de ta
                                            </a></p>

                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="mega-links">
                                                <img src="img/main-news/2.jpg" alt="image">
                                                <p><a href="">linguística, a noção de texto </a> </p>

                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="mega-links">
                                            <img src="img/main-news/2.jpg" alt="image">
                                            <p><a href=""> linguística, a noção de texto </a> </p>

                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="mega-links">
                                                <img src="img/main-news/2.jpg"  alt="image">
                                                <p><a href="">linguística, a noção de texto </a> </p>

                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="mega-links">
                                                <img src="img/main-news/2.jpg"  alt="image">
                                                <p><a href="">linguística, a noção de texto </a> </p>

                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="mega-links">
                                            <img src="img/main-news/2.jpg"  alt="image">
                                            <p><a href="">linguística, a noção de texto </a> </p>
                                        </div>
                                        </div>

                                        <a href=""> <p style="margin-top:12rem;width:100%;color:red;"> More</p></a>

                                   </div>

                                    </div>

                            </li>

                            @if ($categorias != null)
                            @foreach ($categorias as $categoria)
                                <li class="">
                                    <a class=""
                                        href="{{ route('menu', $categoria->cat_id) }}">{{ $categoria->titulo }}</a>
                                </li>
                            @endforeach
                        @endif
                           <!-- <li><a href="">dropmenu</a>
                                <ul class="drop-menu">
                                    <li><a href="">1</a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">1</a></li>

                                </ul>
                            </li>


                            <form class="navbar-form navbar-left" role="search" style="margin-left: 4rem">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search"  style="">
                                </div>
                                <i class="fa fa-search" style="float: left;margin-left:12rem;margin-top:-10%"></i>

                            </form>-->
                        </ul>

                    </div>

            </nav>


            </div>

        </div>

    </div>

        <main>

        </main>

        <style>



@media only screen and (max-width : 760px){

.wrapper .nav-links{
    background-color: blueiolet;
    display:flex;
    flex-direction:row;
    margin-left: 1rem;
    flex-wrap: wrap
}
.hamburguer {
    position: relative;
    display: block;
    background: #ffff;
    height: px;
    top: 12px;
    left: 15px;
    flex-wrap: wrap;
    transition: 0.5s ease-in-out;
}

}






 </style>




@include('layouts.modal')


@include('layouts.subscribe')

