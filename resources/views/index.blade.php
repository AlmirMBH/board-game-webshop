@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="welcome-section section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="welcome-section-title text-medium-center">
                        <h1 class="welcome-title section-title text-uppercase">Herzlich Willkommen auf
                            der Hompage von <br><span class="section-title-prominent">WWW.GEWERBE-SPIEL.CH</span></h1>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="welcome-section-desc justify-medium-text">
                        <p>Die Rüegg Management GmbH ist die Entwicklerin dieses neuen und spannenden
                            Gesellschaftsspiels, welches ein Mix aus «Monopoly» und «Leiterspiel» ist. An Stelle von
                            Strassen kann man beim GEWERBE-SPIEL aber einheimische Betriebe kaufen/ besitzen für ein
                            Spiel lang.</p>
                        <p>Dank diesen teilnehmenden Betrieben/ Geschäften ist es möglich geworden die ausgeführten
                            GEWERBE-SPIELE verschiedener Gemeinden zu realisieren!
                            Ein ganz herzliches DANKESCHÖN an dieser Stelle an alle <a href="{{route('participating-companies')}}">Teilnehmer</a>
                        </p>
                        <p>Von jeder Ausgabe (alle Gemeinde) können Sie bei uns bequem die GEWERBE-SPIELE <a
                                href="{{route('web-shop')}}">online kaufen</a> und geliefert bekommen! </p>
                        <p>Gerne können Sie die GEWERBE-SPIELE aber bei den Verkaufsstellen (Points of Sale POS.) direkt
                            kaufen. (LINK auf «POS.»)</p>
                        <p>Nun können Sie in Ihrer Familie oder im Freundeskreis bequem das Handy für 1- 2 Stunden
                            beiseite legen und zu spielen beginnen.. wir wünschen VIEL GLÜCK!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog section-padding-top section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-title text-medium-center">
                        <h2 class="section-title text-white">GEWERBE-SPIEL</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid w-100" src="{{asset('img/product/Tobler-Perspektive-Total-3.JPG')}}" alt="Tobler-Perspektive-Total-3"/>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid w-100" src="{{asset('img/product/Tobler-Perspektive-Total.jpg')}}" alt="Tobler-Perspektive-Total"/>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid w-100" src="{{asset('img/product/Tobler-Feld-und-Karten.jpg')}}" alt="Tobler-Feld-und-Karten"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid w-100" src="{{asset('img/product/Tobler-Inhalt.JPG')}}" alt="Tobler-Inhalt"/>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid w-100" src="{{asset('img/product/Tobler-Verpackt.jpg')}}" alt="Tobler-Verpackt"/>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid w-100" src="{{asset('img/product/Tobler-Spiel.JPG')}}" alt="Tobler-Spiel"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container section-padding-top section-padding-bottom">

            <div class="row">
                <div class="col-12">
                    <div class="reviews-title text-left text-medium-center">
                        <h1 class="section-title">VIDEO</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="video" class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item" controls>
                        <source src="{{asset('img/video/board-game-video.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>
@endsection
