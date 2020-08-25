@extends('layouts.app')


@section('content')


  <section class="page-banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="page-title">
            <h1>Über uns</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs-box">
            <ul class="breadcrumbs">
              <li>Home</li>
              <li>Über uns</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="who-we-are section-margin-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-5">
          <img src="../img/uberUnsPhoto1.jpg" alt="">
        </div>

        <div class="col-sm-12 col-md-12 col-lg-7">
          <div class="who-we-are-titles">
            <h5 class="section-strapline">Willkommen bei Gewerbe-Spiel</h5>
            <h1 class="section-title">Wer wir sind?</h1>
          </div>
          <div class="who-we-are-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis tempor mollis, erat augue eleifend ipsum, ut imperdiet turpis sem at nulla. Suspendisse lobortis ante ut convallis vehicula. Proin id nibh nec velit tempus gravida sed in purus. Sed suscipit leo et lorem pellentesque cursus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis tempor mollis, erat augue eleifend ipsum, ut imperdiet turpis sem at nulla. Suspendisse lobortis ante ut convallis vehicula. Proin id nibh nec velit tempus gravida sed in purus. Sed suscipit leo et lorem pellentesque cursus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis tempor mollis, erat augue eleifend ipsum, ut imperdiet turpis sem at nulla. Suspendisse lobortis ante ut convallis vehicula. Proin id nibh nec velit tempus gravida sed in purus. Sed suscipit leo et lorem pellentesque cursus.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="reviews section-margin-top">
    <div class="container section-padding-top section-padding-bottom">

      <div class="row">
        <div class="col-12">
          <div class="reviews-title">
            <h1 class="section-title">BEWERTUNGEN</h1>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="review-card review-card1">
            <p>Pellentesque nibh orci, semper ac sodales eu, prta ut turpis.
              Nam dapibus posuere convallis. Etiam auctor scelerisque nulla at
              luctus. Morbi varius sapien vitae consectetur bibendum. Nam non
              lacus mauris.</p>
            <h6 class="reviews-reviewername">John Doe</h6>
          </div>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="review-card review-card2">
            <p>Pellentesque nibh orci, semper ac sodales eu, prta ut turpis.
              Nam dapibus posuere convallis. Etiam auctor scelerisque nulla at
              luctus. Morbi varius sapien vitae consectetur bibendum. Nam non
              lacus mauris.</p>
            <h6 class="reviews-reviewername">Phillip Grey</h6>
          </div>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="review-card review-card2">
            <p>Pellentesque nibh orci, semper ac sodales eu, prta ut turpis.
              Nam dapibus posuere convallis. Etiam auctor scelerisque nulla at
              luctus. Morbi varius sapien vitae consectetur bibendum. Nam non
              lacus mauris.</p>
            <h6 class="reviews-reviewername">Macey Collins</h6>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="benefits-playing section-padding-top section-padding-bottom">
    <div class="container">
      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-8">
          <div class="benefits-text-box">
            <div class="benefits-titles">
              <h6 class="section-strapline">Spielvorteile</h6>
              <h2 class="section-title">Vorteile des Spielens<br/>
                <span class="section-title-prominent">Brettspiel</span></h2>
            </div>
            <div class="benefits-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque ac nisi ultricies eleifend. Integer finibus odio in massa elementum, eget                                      finibus justo cursus. Vestibulum at lobortis arcu. Donec cursus, magna at placerat dictum, arcu metus ornare diam, non semper ligula risus sed purus.</p>
            </div>
          </div>

          <div class="benefits-wrapper">
            <div class="row mb-4">
              <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="benefits-box">
                                        <span class="benefits-icon-box">
                                            <i class="icon-problem"></i>
                                        </span>
                  <p>Unterrichtet das Lösen von Problemen</p>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="benefits-box">
                                        <span  class="benefits-icon-box">
                                            <i class="icon-union"></i>
                                        </span>
                  <p>Spiele können Stress reduzieren</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="benefits-box">
                                        <span  class="benefits-icon-box">
                                            <i class="icon-goal"></i>
                                        </span>
                  <p>Fördert die Teamarbeit</p>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="benefits-box">
                                        <span  class="benefits-icon-box">
                                            <i class="icon-target"></i>
                                        </span>
                  <p>Lehrt, Ziele zu setzen</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class=" benefits-image">
            <img src="../img/benefits3.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  @endsection


@section('footer')
  @endsection

@section('script')
  @endsection
