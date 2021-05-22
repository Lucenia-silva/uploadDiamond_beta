<div class="totalbanner">
<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="top-header-social">
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
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="top-header-others">
                    <li>
                        <div class="languages-list">

                        </div>
                    </li>

                     <li data-toggle="modal" data-target="#exampleModalCenter">
                        <i class='bx bx-user'></i>
                        <a href="#">Login</a>
                    </li>
                    <li data-toggle="modal" data-target="#exampleModal">
                        <i class='bx bx-user'></i>
                        <a href="#">Register</a>
                    </li>

                   <!-- <li>
                     <i class='bx bxs-like bx-tada'></i>
                        <a href="#">Subscribe</a>
                    </li>-->
                    <li data-toggle="modal" data-target="#exampleModalLong">
                     <i class='bx bxs-like bx-tada'></i>
                    <a href="#">Newsletter</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="top-header-area ">
    <div class="container teste">

    </div>
</div>

<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('public/img/logo/Diamond/2.png')}}" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light alinharCentro">
                <a class="navbar-brand logoPrincipal" href="/">
                    <img src="{{ asset('public/img/logo/Diamond/2.png') }}" style="margin-left: 20rem" alt="image">
                </a>

            </nav>
        </div>
    </div>
    <div class="main-navbar  main-navbar-back">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="border:1 solid">
                     <ul class="navbar-nav col-lg-12">
                            <li class="nav-item">
                                <a href="/" class="nav-link">
                                    Home
                                </a>

                            </li>
                            @if ($categorias != null)
                                @foreach ($categorias as $categoria)
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('menu', $categoria->cat_id) }}">{{ $categoria->titulo }}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                      <!--<div class="procurar">
                                <div class="others-options d-flex align-items-center">
                                    <div class="option-item">
                                        <form class="search-box">
                                            <input type="text" class="form-control" placeholder="Search for..">
                                            <button type="submit"><i class='bx bx-search'></i></button>
                                        </form>
                                    </div>
                                </div>
                        </div>-->

                </div>
            </nav>
        </div>
    </div>

</div>
</div>




@include('layouts.loginmodal')

@include('layouts.registermodal')

@include('layouts.newsletter')















<nav class="navbar navbar-expand-sm navbar-dark bg-info"> <a class="navbar-brand" href="#">Home</a>
                <!--Toggle Collapse Button-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <!--Division for navbar-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!--UL for links-->
                    <ul class="navbar-nav mr-auto">
                        <!-- Catagory 1-->
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle catogary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <strong> Fashion </strong> </a>
                            <!--Div for catogary 1-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                        <!--Row 1-->
                                        <div class="col-md-3">
                                            <!--Column 1-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">TOPS</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Shirts</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Tunics</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Tops</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Vests</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <!--Column 2-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">DRESSES</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Casual</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Evening</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Designer</a> </li>
                                                <li class="nav-item"> <a class="nav-link active" href="#">SHOES</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Flat shoes</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Sandals</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Boots</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <!--Column 3-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">JEWELRY</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Bracelets</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Earings</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Nosepin</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Necklace</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Rings</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Lockets</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <!--Column 4-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">TRENDING</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Crafted Kurti</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Shorts</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Cosmetics</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Custumized Shoes</a> </li>
                                                <li class="nav-item"> <a class="nav-link active" href="#">JEANS</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Slim Fit</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Low Waist</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> <!-- Catagory 2-->
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle catogary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <strong> Electronics </strong> </a>
                            <!--Div for catogary 2-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                        <!--Row 1-->
                                        <div class="col-md-3">
                                            <!--Column 1-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">MOBILE</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Sony</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Samsung</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Apple</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Xiaomi</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Lenevo</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <!--Column 2-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">KITCHEN</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Electric Heater</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Toaster</a> </li>
                                                <li class="nav-item"> <a class="nav-link active" href="#">DAILY USE</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Water Heater</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Induction Cooker</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <!--Column 3-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">COMPUTERS & ACCESSORIES</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Laptops</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Hard Drives</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Pen Drives</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Mouse & Keyboards</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> <!-- Catagory 3-->
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle catogary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <strong> Furniture </strong> </a>
                            <!--Div for catogary 3-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                        <!--Row 1-->
                                        <div class="col-md-3">
                                            <!--Column 1-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">Object 1</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 1</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 2</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 3</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <!--Column 2-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">Object 2</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 1</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 2</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 3</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <!--Column 3-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">Object 3</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 1</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 2</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 3</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <!--Column 4-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">Object 4</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 1</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 2</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 3</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> <!-- Catagory 4-->
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle catogary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <strong>Sports & Book</strong> </a>
                            <!--Div for catogary 4-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                        <!--Row 1-->
                                        <div class="col-md-3">
                                            <!--Column 1-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">Object 1</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 1</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 2</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 3</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <!--Column 2-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">Object 2</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 1</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 2</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 3</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <!--Column 3-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">Object 3</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 1</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 2</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 3</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <!--Column 4-->
                                            <ul class="nav flex-column">
                                                <li class="nav-item"> <a class="nav-link active" href="#">Object 4</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 1</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 2</a> </li>
                                                <li class="nav-item"> <a class="nav-link i" href="#">Item 3</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!--Search-->
                    <form class="form-inline">
                        <input class="form-control srch" type="search" placeholder="&#xF002; Search" style="font-family:Arial, FontAwesome" aria-label="Search"> </form>
                </div>
            </nav>
