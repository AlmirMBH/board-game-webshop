@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @if ($sliders)
        <section class="slider-section section-padding-bottom">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($sliders as $slider)
                        <div class="swiper-slide">
                            <img src="{{ asset('/img/slider/' . $slider->image) }}" alt="{{ $slider->description }}">
                            @if ($slider->description)
                                <div class="swiper-desc">
                                    {{ $slider->description }}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
    @endif
    <section class="welcome-section section-padding-bottom">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12">
                    <div class="welcome-section-title text-medium-center">
                        <h1 class="welcome-title main-section-title text-uppercase text-center">Herzlich Willkommen auf
                            der Homepage von <br><span class="section-title-prominent">GEWERBE-SPIEL</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
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
                        <p>Gerne können Sie die GEWERBE-SPIELE auch bei den <a href="{{route('outlets-list')}}">Verkaufsstellen</a> direkt
                            kaufen.</p>
                        <p>Nun können Sie in Ihrer Familie oder im Freundeskreis bequem das Handy für 1- 2 Stunden
                            beiseite legen und zu spielen beginnen.. wir wünschen <strong>VIEL GLÜCK!</strong></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="video" class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="{{asset('img/video/board-game-video.mp4')}}" type="video/mp4">
                        </video>
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
                            <img class="img-fluid w-100" src="{{asset('img/product/Tobler-Perspektive-Total-3.jpg')}}" alt="Tobler-Perspektive-Total-3"/>
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
                            <img class="img-fluid w-100" src="{{asset('img/product/Tobler-Inhalt.jpg')}}" alt="Tobler-Inhalt"/>
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
                            <img class="img-fluid w-100" src="{{asset('img/product/Tobler-Spiel.jpg')}}" alt="Tobler-Spiel"/>
                        </div>
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
                            <h2 class="section-title">VORTEILE VON <br/>
                                <span class="section-title-prominent">BRETTSPEIELEN</span></h2>
                        </div>
                        <div class="benefits-text">
                            <p>Gesellschaftsspiele unterhalten seit Jahrhunderten die Mensschheit. 2020 wurden  soviele Brettspiele wie noch nie verkauft!</p>
                            <p>Lustige und unterhaltsame Stunden mit Familie und/oder Freunden, ohne Handystress, bestätigen den Trend.</p>
                        </div>
                    </div>

                    <div class="benefits-wrapper">
                        <div class="row pb-5">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="benefits-box d-flex align-items-center">
                                    <span class="benefits-icon-box">
                                        <i class="icon-problem"></i>
                                    </span>
                                    <p>Shult das Zählen</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="benefits-box d-flex align-items-center">
                                    <span class="benefits-icon-box">
                                        <i class="icon-union"></i>
                                    </span>
                                    <p>Spiele können Stress reduzieren</p>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-5">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="benefits-box d-flex align-items-center">
                                    <span class="benefits-icon-box">
                                        <i class="icon-goal"></i>
                                    </span>
                                    <p>Fördest Umgang mit Mitmenschen</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="benefits-box d-flex align-items-center">
                                    <span class="benefits-icon-box">
                                        <i class="icon-target"></i>
                                    </span>
                                    <p>Stärkt das Gedächnis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class=" benefits-image">
                        <img src="{{asset('img/benefits3.jpg')}}" alt="">
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
                        <h1 class="section-title text-white">PRODUCTS</h1>
                    </div>
                </div>
            </div>

            <div class="owl-carousel owl-theme">
                @foreach($products as $product)
                    <div class="item {{ ($loop->first) ? 'active' : '' }}">
                        <div class="card product-card mb-5">
                            <div class="card-body product-card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product-title text-center">
                                            <h3>{{$product->name}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product-image-box text-center">
                                            <img src="{{asset('img/product/' . $product->featured_image)}}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="product-desc mt-3">
                                        <p>{!! $product->description !!}</p>
                                        <ul>
                                            <li>Versandkosten: {{App\Order::shippingCost()}}</li>
                                            <li>{{App\Order::freeShipping()}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="product-price p-2">
                                                <span class="currency">{{App\Order::$currency}}</span>
                                                <span class="price">{{$product->price}}</span>
                                            </div>
                                            <div class="product-btn-box">
                                                <a href="{{route('order', $product->id)}}" class="btn product-btn">Jetzt kaufen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });

        jQuery(document).ready(function() {
            jQuery('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:3
                    }
                }
            })
        });
    </script>
@endsection
