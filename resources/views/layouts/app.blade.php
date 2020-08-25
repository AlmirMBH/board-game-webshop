<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('css/animation.css')}}" type="text/css" >
  <link rel="stylesheet" href="{{asset('css/fontello.css')}}" type="text/css" >
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Styles -->
  <link rel="stylesheet" href="{{asset('css/general.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/f08113be36.js" crossorigin="anonymous"></script>
</head>
<body>

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
  <div class="top-header">
    <div class="container" >
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-2">
          <div class="logo-box py-3">
            <img class="logo img-fluid w-50" src="{{asset('img/logo.png')}}">
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="header-social-media-box">
            <ul class="header-social-media-list">
              <li>
                <a href="https://www.facebook.com/" target="blank" class="facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/" target="blank" class="instagram">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/" target="blank" class="twitter">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="header-search-form-box">
            <form class="header-search-form">
              <div class="form-group header-search-form-input-box">
                <input class="form-control header-search-form-input" type="search" placeholder="Suche..."/>
                <button class="header-search-btn"><i class="fas fa-search"></i></button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="header-shop-widgets-box">
            <ul class="header-shop-widget-list">
              <li class="header-item-list item-shop">
                <a href="#" target="blank">
                  <i class="icon-shop"></i>
                </a>
                <span>Geschäft</span>
              </li>
              <li class="header-item-list item-login">
                <a href="#" target="blank">
                  <i class="icon-man"></i>
                </a>
                <span>Anmeldung</span>
              </li>
              <li class="header-item-list item-basket">
                <a href="#" target="blank">
                  <i class="icon-shopping-basket-go"></i>
                </a>
                <span>Mein Einkaufswagen</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Top header -->

  <!-- Bottom Header, Navigation -->
  <div class="header-bottom">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about-us')}}">Über uns</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('webshop')}}">Webshop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('license-providers')}}">Lizenznehmer</a>
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
</header>
<!-- END Bottom Header, Navigation -->
@yield('content')





@yield('footer')
<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-center py-4">
        <p class="mb-0 text-white">Copyright 2020, DW Die Werber AG, All rights Reserved</p>
      </div>
    </div>
  </div>
</footer>


@yield('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
