@extends('layouts.app')

@section('content')

    <section class="slider">
        <div class="container-fluid p-0">
            <div class="carousel-slider-box">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('img/slider/main-slider-1-copyright.webp')}}"
                                 alt="First slide">
                            <div class="carousel-caption">
                                <div class="carousel-item-caption-text">
                                    <h1 class="display-1">Brettspiele bringen uns zusammen</h1>
                                </div>
                                <div class="carousel-item-caption-buttons">
                                    <button class="btn btn-warning btn-lg slider-btn">Mehr sehen</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('img/slider/main-slider-2-copyright.webp')}}"
                                 alt="Second slide">
                            <div class="carousel-caption">
                                <div class="carousel-item-caption-text">
                                    <h1 class="display-1">Brettspiele bringen uns zusammen</h1>
                                </div>
                                <div class="carousel-item-caption-buttons">
                                    <button class="btn btn-warning btn-lg slider-btn">Mehr sehen</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('img/slider/main-slider-3-copyright.webp')}}"
                                 alt="Third slide">
                            <div class="carousel-caption">
                                <div class="carousel-item-caption-text">
                                    <h1 class="display-1">Brettspiele bringen uns zusammen</h1>
                                </div>
                                <div class="carousel-item-caption-buttons">
                                    <button class="btn btn-warning btn-lg slider-btn">Mehr sehen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="welcome-section section-padding-top section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="welcome-section-title">
                        <h2 class="welcome-title section-title">Herzlich Willkommen auf
                            der Hompage von <br><span class="section-title-prominent">WWW.GEWERBE-SPIEL.CH</span></h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="welcome-section-desc">
                        <p>Die Rüegg Management GmbH ist die Entwicklerin dieses neuen und spannenden
                            Gesellschaftsspiels, welches ein Mix aus «Monopoly» und «Leiterspiel» ist. An Stelle von
                            Strassen kann man beim GEWERBE-SPIEL aber einheimische Betriebe kaufen/ besitzen für ein
                            Spiel lang.</p>
                        <p>Dank diesen teilnehmenden Betrieben/ Geschäften ist es möglich geworden die ausgeführten
                            GEWERBE-SPIELE verschiedener Gemeinden zu realisieren!
                            Ein ganz herzliches DANKESCHÖN an dieser Stelle an alle <a href="#">Teilnehmer</a>
                        </p>
                        <p>Von jeder Ausgabe (alle Gemeinde) können Sie bei uns bequem die GEWERBE-SPIELE <a
                                href="#">online kaufen</a> und geliefert bekommen! </p>
                        <p>Gerne können Sie die GEWERBE-SPIELE aber bei den Verkaufsstellen (Points of Sale POS.) direkt
                            kaufen. (LINK auf «POS.»)</p>
                        <p>Nun können Sie in Ihrer Familie oder im Freundeskreis bequem das Handy für 1- 2 Stunden
                            beiseite legen und zu spielen beginnen.. wir wünschen VIEL GLÜCK!</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
                    <div class="welcome-box1 welcome-box">
                        <div class="welcome-box-title">
                            <h3>
                                <a href="#" target="blank">Endlose Spiele</a>
                            </h3>
                        </div>
                        <div class="welcome-box-desc">
                            <p>Lorem Ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
                    <div class="welcome-box2 welcome-box">
                        <div class="welcome-box-title">
                            <h3>
                                <a href="#" target="blank">Cafe</a>
                            </h3>
                        </div>
                        <div class="welcome-box-desc">
                            <p>Lorem Ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mb-3">
                    <div class="welcome-img">
                        <img class="welcome-photo w-100 img-fluid" src="{{asset('img/firstSectionPhoto.JPG')}}" alt="Cafe"/>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12 col-md-12 col-lg-6 mb-3">
                    <div class="welcome-img">
                        <img class="welcome-photo w-100 img-fluid" src="{{asset('img/firstSectionPhoto1.jpg')}}" alt="Spieleladen"/>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
                    <div class="welcome-box3 welcome-box">
                        <div class="welcome-box-title">
                            <h3>
                                <a href="#" target="blank">Spieleladen</a>
                            </h3>
                        </div>
                        <div class="welcome-box-desc">
                            <p>Lorem Ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
                    <div class="welcome-box4 welcome-box">
                        <div class="welcome-box-title">
                            <h3>
                                <a href="#" target="blank">Spielberichte</a>
                            </h3>
                        </div>
                        <div class="welcome-box-desc">
                            <p>Lorem Ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog section-padding-top section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-title">
                        <h2 class="section-title">Wie es funktioniert</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid w-100" src="{{asset('img/howItWorks1.jpeg')}}" alt="Brettspielbibliothek"/>
                        </div>
                        <div class="blog-item-content">
                            <div class="blog-item-title">
                                <h3>Brettspielbibliothek</h3>
                            </div>
                            <div class="blog-item-text">
                                <p>Quisque rutrum laoreet lorem non egestas. Donec interdum aliquam ipsum, non eleifend
                                    lacus pretium nec. Etiam varius lorem ac hendrerit sollicitudin. Proin id dui
                                    orci.</p>
                            </div>
                            <div class="blog-item-link">
                                <a href="#" class="blog-btn blog-btn-color1">
                                    BIBLIOTHEK ANZEIGEN
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid w-100" src="{{asset('img/howItWorks2.jpeg')}}" alt="Spiel mit deinen Freunden"/>
                        </div>
                        <div class="blog-item-content">
                            <div class="blog-item-title">
                                <h3>Spiel mit deinen Freunden</h3>
                            </div>
                            <div class="blog-item-text">
                                <p>Quisque rutrum laoreet lorem non egestas. Donec interdum aliquam ipsum, non eleifend
                                    lacus pretium nec. Etiam varius lorem ac hendrerit sollicitudin. Proin id dui
                                    orci.</p>
                            </div>
                            <div class="blog-item-link">
                                <a href="#" class="blog-btn blog-btn-color2">
                                    MEHR ÜBER UNS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid w-100" src="{{asset('img/howItWorks3.jpeg')}}" alt="Vorteile von Brettspielen"/>
                        </div>
                        <div class="blog-item-content">
                            <div class="blog-item-title">
                                <h3>Vorteile von Brettspielen</h3>
                            </div>
                            <div class="blog-item-text">
                                <p>Quisque rutrum laoreet lorem non egestas. Donec interdum aliquam ipsum, non eleifend
                                    lacus pretium nec. Etiam varius lorem ac hendrerit sollicitudin. Proin id dui
                                    orci.</p>
                            </div>
                            <div class="blog-item-link">
                                <a href="#" class="blog-btn blog-btn-color3">
                                    MEHR ÜBER UNS
                                </a>
                            </div>
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
                            <h2 class="section-title">Vorteile des Spielens<br/>
                                <span class="section-title-prominent">Brettspiel</span></h2>
                        </div>
                        <div class="benefits-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque ac nisi
                                ultricies eleifend. Integer finibus odio in massa elementum, eget finibus justo cursus.
                                Vestibulum at lobortis arcu. Donec cursus, magna at placerat dictum, arcu metus ornare
                                diam, non semper ligula risus sed purus.</p>
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
                                    <span class="benefits-icon-box">
                                        <i class="icon-union"></i>
                                    </span>
                                    <p>Spiele können Stress reduzieren</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="benefits-box">
                                    <span class="benefits-icon-box">
                                        <i class="icon-goal"></i>
                                    </span>
                                    <p>Fördert die Teamarbeit</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="benefits-box">
                                    <span class="benefits-icon-box">
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
                        <img src="{{asset('img/benefits3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="shop section-padding-top section-padding-bottom">--}}
{{--        <div class="container">--}}
{{--            <div class="shop-title text-center">--}}
{{--                <h2 class="section-title">UNSER SPIEL</h2>--}}
{{--            </div>--}}
{{--            <div class="row d-flex justify-content-center my-5">--}}
{{--                <div class="col-md-8">--}}
{{--                    <div class="card product-card">--}}
{{--                        <div class="card-body product-card-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12 col-md-12 col-lg-6">--}}
{{--                                    <div class="product-image-box">--}}
{{--                                        <img src="{{asset('img/product/product-image.png')}}" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-12 col-md-12 col-lg-6">--}}
{{--                                    <div class="product-title">--}}
{{--                                        <h3>GEWERBE-SPIEL</h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span class="currency">CHF</span>--}}
{{--                                        <span class="price">100.00</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-desc">--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper,--}}
{{--                                            magna quis tempor mollis, erat augue eleifend ipsum, ut imperdiet turpis sem--}}
{{--                                            at nulla.</p>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper,--}}
{{--                                            magna quis tempor mollis, erat augue eleifend ipsum, ut imperdiet turpis sem--}}
{{--                                            at nulla.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-btn-box">--}}
{{--                                        <a href="#" class="btn product-btn">Kaufe jetzt</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="our-team section-margin-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ot-title">
                        <h1 class="section-title">UNSER TEAM</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                    <div class="ot-card my-5">
                        <div class="ot-card-img">
                            <img src="https://via.placeholder.com/450x380" alt=""/>
                        </div>
                        <div class="ot-card-content mt-4">
                            <div class="ot-card-title">
                                <h3>John Doe</h3>
                            </div>
                            <div class="ot-card-role">
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="ot-card-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis
                                    tempor mollis, erat augue eleifend ipsum</p>
                            </div>
                            <div class="ot-card-socialmedia">
                                <a href="#" target="blank">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a href="#" target="blank">
                                    <i class="fab fa-instagram-square"></i>
                                </a>
                                <a href="#" target="blank">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                    <div class="ot-card my-5">
                        <div class="ot-card-img">
                            <img src="https://via.placeholder.com/450x380" alt=""/>
                        </div>
                        <div class="ot-card-content mt-4">
                            <div class="ot-card-title">
                                <h3>Jamy Willson</h3>
                            </div>
                            <div class="ot-card-role">
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="ot-card-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis
                                    tempor mollis, erat augue eleifend ipsum</p>
                            </div>
                            <div class="ot-card-socialmedia">
                                <a href="#" target="blank">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a href="#" target="blank">
                                    <i class="fab fa-instagram-square"></i>
                                </a>
                                <a href="#" target="blank">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                    <div class="ot-card my-5">
                        <div class="ot-card-img">
                            <img src="https://via.placeholder.com/450x380" alt=""/>
                        </div>
                        <div class="ot-card-content mt-4">
                            <div class="ot-card-title">
                                <h4>Antonio Hill</h4>
                            </div>
                            <div class="ot-card-role">
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="ot-card-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis
                                    tempor mollis, erat augue eleifend ipsum</p>
                            </div>
                            <div class="ot-card-socialmedia">
                                <a href="#" target="blank">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a href="#" target="blank">
                                    <i class="fab fa-instagram-square"></i>
                                </a>
                                <a href="#" target="blank">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact section-padding-top section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="contact-form-content">
                        <div class="contact-title">
                            <h2 class="section-title">Irgendwelche Fragen?</h2>
                        </div>
                        <div class="contact-form">
                            <form method="post" action="#">
                                <div class="form-group contact-field-group">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                                            <div class="form-field-name">
                                                <input class="question-form-name form-control" type="text" name="name"
                                                       placeholder="Ihr Name"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                                            <div class="form-field-email">
                                                <input class="question-form-email form-control" type="email"
                                                       name="email"
                                                       placeholder="Ihr E-Mail"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group contact-field-group mt-4">
                                    <div class="form-field-message">
                                        <textarea class="textarea form-control" placeholder="Nachricht"
                                                  name="home-textarea" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-submit">
                                        <button class="btn contact-btn">Senden</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2704.262435188095!2d8.825348615467695!3d47.328745815124144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479ab95c206c6395%3A0xf61bd7488e47480b!2sWaldegg%2014A%2C%208623%20Wetzikon%2C%20Switzerland!5e0!3m2!1sen!2sba!4v1598890202286!5m2!1sen!2sba"
                            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
