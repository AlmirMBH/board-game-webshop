@extends('layouts.app')

@section('title', 'Über uns')

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
                <img src="{{asset('img/uber-uns.jpg')}}" alt="">
            </div>

            <div class="col-sm-12 col-md-12 col-lg-7">
                <div class="p-5">
                    <div class="who-we-are-titles mt-5">
                        <h5 class="section-strapline">Willkommen bei Gewerbe-Spiel</h5>
                        <h2 class="section-title">Wer wir sind?</h2>
                    </div>
                    <div class="who-we-are-text">
                        <p>Die Rüegg Management GmbH. wurde im 2003 von mir (Thomas Rüegg) gegründet.</p>
                        <p>Im Jahr 2020 kam mir dann die Idee des GEWERBE-SPIEL und zusammen mit meinen 2 Kindern und meiner Partnerin begann die intensive Entwicklung dieses interessanten und spannenden Gesellschaftsspiels.</p>
                        <p>An dieser Stelle möchte ich mich gerne für die Hilfe und Unterstützung bedanken. Ich bin überzeugt, dass vor allem bei Familien, das GEWERBE-SPIEL gut ankommen wird und wünsche ein spannendes, handyfreies Spiel.</p>
                    </div>
                    <div class="video-arrow mt-5">
                        <h3 class="text-center">Schauen Sie sich unser Video an</h3>
                        <a href="#video" class="btn btn-lg btn-info d-block w-100 video-btn"><i class="fas fa-hand-point-down fa-5x"></i></a>
                    </div>
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

{{--<section class="benefits-playing section-padding-top section-padding-bottom">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-sm-12 col-md-12 col-lg-8">--}}
{{--                <div class="benefits-text-box">--}}
{{--                    <div class="benefits-titles">--}}
{{--                        <h6 class="section-strapline">Spielvorteile</h6>--}}
{{--                        <h2 class="section-title">Vorteile des Spielens<br/>--}}
{{--                            <span class="section-title-prominent">Brettspiel</span></h2>--}}
{{--                    </div>--}}
{{--                    <div class="benefits-text">--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque ac nisi--}}
{{--                            ultricies eleifend. Integer finibus odio in massa elementum, eget finibus justo cursus.--}}
{{--                            Vestibulum at lobortis arcu. Donec cursus, magna at placerat dictum, arcu metus ornare--}}
{{--                            diam, non semper ligula risus sed purus.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="benefits-wrapper">--}}
{{--                    <div class="row mb-4">--}}
{{--                        <div class="col-sm-12 col-md-12 col-lg-6">--}}
{{--                            <div class="benefits-box">--}}
{{--                                    <span class="benefits-icon-box">--}}
{{--                                        <i class="icon-problem"></i>--}}
{{--                                    </span>--}}
{{--                                <p>Unterrichtet das Lösen von Problemen</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-12 col-lg-6">--}}
{{--                            <div class="benefits-box">--}}
{{--                                    <span class="benefits-icon-box">--}}
{{--                                        <i class="icon-union"></i>--}}
{{--                                    </span>--}}
{{--                                <p>Spiele können Stress reduzieren</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12 col-md-12 col-lg-6">--}}
{{--                            <div class="benefits-box">--}}
{{--                                    <span class="benefits-icon-box">--}}
{{--                                        <i class="icon-goal"></i>--}}
{{--                                    </span>--}}
{{--                                <p>Fördert die Teamarbeit</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-12 col-lg-6">--}}
{{--                            <div class="benefits-box">--}}
{{--                                    <span class="benefits-icon-box">--}}
{{--                                        <i class="icon-target"></i>--}}
{{--                                    </span>--}}
{{--                                <p>Lehrt, Ziele zu setzen</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-12 col-md-12 col-lg-4">--}}
{{--                <div class=" benefits-image">--}}
{{--                    <img src="{{asset('img/benefits3.jpg')}}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
@endsection
