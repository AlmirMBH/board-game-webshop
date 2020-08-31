<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
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
  <style>
    #select-option-api-cities {
      display: none;
    }
    #no-entry-for-cities {
      display: none;
    }
    #table {
      visibility: hidden;
    }
    .first-spinner {
      visibility: hidden;
    }
    .second-spinner {
      visibility: hidden;
    }
  </style>
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



<section class="page-banner">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-title">
          <h1>Verkaufsstellen</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="breadcrumbs-box">
          <ul class="breadcrumbs">
            <li>Home</li>
            <li>Teilnehmende Betriebe</li>
            <li>Verkaufsstellen</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="form-group text-center pt-5">
    <select name="" class="form-control d-inline w-50" id="select-option-api-cantons">
      @foreach($cantons as $canton)
        <option class="select-option-api-cantons" value="{{$canton->id}}">{{$canton->name}}</option>
      @endforeach
    </select>
  </div>

  <div class="text-center">
    <i class="fas fa-spinner first-spinner fa-spin fa-2x"></i>
  </div>

  <div class="text-center">
    <div id="no-entry-for-cantons"></div>
  </div>

  <div class="form-group text-center">
    <select class="form-control w-50" name="" id="select-option-api-cities">

    </select>
  </div>

  <table class="table" id="table">
    <thead>
    <tr>
      <th scope="col">Address</th>
      <th scope="col">Name</th>
    </tr>
    </thead>
    <tbody id="select-option-api-providers"></tbody>

    <div class="text-center">
      <i class="fas fa-spinner second-spinner fa-spin fa-2x"></i>
    </div>

  </table>

  <div class="text-center">
    <div id="no-entry-for-cities"></div>
  </div>

</div>


<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-center py-4">
        <p class="mb-0 text-white">Copyright 2020, DW Die Werber AG, All rights Reserved</p>
      </div>
    </div>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>

  $(document).ready(function () {
    $("#select-option-api-cantons").change(function (data) {
      $("#select-option-api-cities").empty().hide();
      $("#select-option-api-providers").empty().hide();
      $("#no-entry-for-cities").css("display", "none").append('<p>no entry</p>')
      $("#table").css('visibility', 'hidden');
      $(".first-spinner").css('visibility', 'visible');
      $("#no-entry-for-cantons").css('visibility', 'hidden').empty();
      let value = data.currentTarget.value
      $.ajax({
        url: 'http://board-game.dep/api/cities/list/'+value,
        data: {
          format: 'json'
        },
        type: 'GET',
        success: function (data) {

          if(data != 0)
          {
            let text = "";
            for (let i = 0; i < data.length; i++) {
              if (i == 0) {
                text += "<option class='cc2' value='dada'>choose city</option>";
              }
              text += "<option class='cc' value='"+data[i].id+"'>" + data[i].name + "</option>";
            }
            $("#select-option-api-cities").show().append(text);

          } else {
            $("#no-entry-for-cantons").css('visibility', 'visible').append('<p>no entry</p>')
          }
          $(".first-spinner").css('visibility', 'hidden')

        }
      })
    });


    $("#select-option-api-cities").change(function (data) {
      let value = data.currentTarget.value
      let valueIs = $("#select-option-api-cities").val();
      // console.log(valueIs);

      $("#select-option-api-providers").empty().hide();
      $("#no-entry-for-cities").empty().hide();
      $(".second-spinner").css('visibility', 'visible');


      $.ajax({
        url: 'http://board-game.dep/api/outlets/list/'+value,
        data: {
          format: 'json'
        },
        type: 'GET',
        success: function (data) {

          let text = "";
          for (let i = 0; i < data.length; i++) {
            text += "<tr>" +
              "<td class='provider-td'>" + data[i].address + "</td>" +
              "<td class='provider-td'> <a href='http://board-game.dep/details/" + data[i].slug + "'>" + data[i].name + "</a> </td>" +
              "</tr>";
          }

          if (value == 'dada') {
            console.log('selektovan cc2')
          } else {
            if(data.length == 0) {
              $("#no-entry-for-cities").css("display", "block").append('<p>no entry</p>')
              $(".second-spinner").css('visibility', 'hidden')
            } else {
              $("#table").css("visibility", "visible")
              $("#select-option-api-providers").show().append(text)
              $(".second-spinner").css('visibility', 'hidden')
            }

          }

        }
      })
    });


  })
</script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>



