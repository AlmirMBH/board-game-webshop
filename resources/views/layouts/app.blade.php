<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gewerbe-Spiel - @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons meta -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./public/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('css/animation.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/general.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="./public/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./public/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./public/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./public/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./public/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./public/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./public/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./public/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./public/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./public/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./public/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./public/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./public/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="./public/img/favicons/manifest.json">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/f08113be36.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- Main Header -->
<header>
    <!-- Header Color bar -->
    <div class="header-color-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="w-25 color-bar-box color-bar1"></div>
                <div class="w-25 color-bar-box color-bar2"></div>
                <div class="w-25 color-bar-box color-bar3"></div>
                <div class="w-25 color-bar-box color-bar4"></div>
            </div>
        </div>
    </div>
    <!-- End Header Color bar -->

    <!-- Top header -->
{{--    <div class="top-header">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-6 col-md-6 col-lg-12">--}}
{{--                    <div class="logo-box py-3">--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm-6 col-md-6 col-lg-4">--}}
{{--                    <div class="header-social-media-box">--}}
{{--                        <ul class="header-social-media-list">--}}
{{--                            <li>--}}
{{--                                <a href="https://www.facebook.com/" target="blank" class="facebook">--}}
{{--                                    <i class="fab fa-facebook-f"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="https://www.instagram.com/" target="blank" class="instagram">--}}
{{--                                    <i class="fab fa-instagram"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="https://twitter.com/" target="blank" class="twitter">--}}
{{--                                    <i class="fab fa-twitter"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm-12 col-md-12 col-lg-6">--}}
{{--                    <div class="header-search-form-box">--}}
{{--                        <form class="header-search-form">--}}
{{--                            <div class="form-group header-search-form-input-box d-inline-block float-right">--}}
{{--                                <input class="form-control header-search-form-input" type="search"--}}
{{--                                       placeholder="Suche..."/>--}}
{{--                                <button class="header-search-btn"><i class="fas fa-search"></i></button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm-6 col-md-6 col-lg-3">--}}
{{--                    <div class="header-shop-widgets-box">--}}
{{--                        <ul class="header-shop-widget-list">--}}
{{--                            <li class="header-item-list item-shop">--}}
{{--                                <a href="#" target="blank">--}}
{{--                                    <i class="icon-shop"></i>--}}
{{--                                </a>--}}
{{--                                <span>Geschäft</span>--}}
{{--                            </li>--}}
{{--                            <li class="header-item-list item-login">--}}
{{--                                <a href="#" target="blank">--}}
{{--                                    <i class="icon-man"></i>--}}
{{--                                </a>--}}
{{--                                <span>Anmeldung</span>--}}
{{--                            </li>--}}
{{--                            <li class="header-item-list item-basket">--}}
{{--                                <a href="#" target="blank">--}}
{{--                                    <i class="icon-shopping-basket-go"></i>--}}
{{--                                </a>--}}
{{--                                <span>Mein Einkaufswagen</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- End Top header -->

    <!-- Bottom Header, Navigation -->
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a href="" class="navbar-brand"><img class="logo img-fluid" style="max-width: 90px; width: 100%; margin-right: 40px;" src="{{asset('img/logo.png')}}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">Über uns</a>
                        </li>
                        {{--                            <li class="nav-item">--}}
                        {{--                                <a class="nav-link" href="{{route('web-shop')}}">Webshop</a>--}}
                        {{--                            </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('licensee')}}">Lizenznehmer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('participating-companies')}}">Teilnehmende Betriebe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- END Bottom Header, Navigation -->
</header>
<!-- END Main header -->

<main id="app">
    @yield('content')
</main>

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center py-4">
                <p class="mb-0 text-white">Copyright 2020, Gewerbe Spiel, Alle Rechte vorbehalten</p>
            </div>
        </div>
    </div>
</footer>

<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

@yield('script')
</body>
</html>
