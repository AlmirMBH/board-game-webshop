@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/number-input.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
@section('title', 'Webshop')

@section('content')

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <h1>Auftrag</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-box">
                        <ul class="breadcrumbs">
                            <li>Home</li>
                            <li>Webshop</li>
                            <li>Auftrag</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop section-padding-top section-padding-bottom">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="product-image-box">
                            <img src="{{asset('img/product/Tobler-Perspektive-Total-3.JPG')}}" alt="">
                        </div>
                        <div class="col-12 p-0 product-image-thumbs">
                            <div class="product-image-thumb active"><img
                                    src="{{asset('img/product/Tobler-Perspektive-Total.jpg')}}" alt="Product Image">
                            </div>
                            <div class="product-image-thumb"><img
                                    src="{{asset('img/product/Tobler-Perspektive-Total.jpg')}}" alt="Product Image">
                            </div>
                            <div class="product-image-thumb"><img
                                    src="{{asset('img/product/Tobler-Perspektive-Total.jpg')}}" alt="Product Image">
                            </div>
                            <div class="product-image-thumb"><img
                                    src="{{asset('img/product/Tobler-Perspektive-Total.jpg')}}" alt="Product Image">
                            </div>
                            <div class="product-image-thumb"><img
                                    src="{{asset('img/product/Tobler-Perspektive-Total.jpg')}}" alt="Product Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        {!! Form::open(['method'=>'POST', 'action'=>'PagesController@confirmOrder', 'role'=>'form', 'id'=>'quickForm']) !!}
                        @csrf
                        <input type="hidden" name="price" value="{{$product->regular_price}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <div class="product-title mt-0">
                            <h3>{{$product->name}}</h3>
                        </div>
                        <div class="card-text mt-2">
                            <p>Das Gewerbe-Spiel.ch ist zur Zeit für nachfolgende Gemeinde/ Dörfer der Schweiz
                                erhältlich. Wir haben die Ausführungen gemäss Kantone gegliedert. Monatlich kommen
                                wieder neue Gemeinde/ Dörfer dazu. Gerne können Sie unseren Newsletter abonnieren
                                (Verlinkung auf newsletter@gewerbe-spiel.ch), damit Sie nicht verpassen, wenn Ihr Dorf
                                realisiert wird!</p>

                                <p>Der Preis pro Spiel beträgt Fr. 29.90 zusätzlich kommen folgende Portokosten (Paket
                                Inland Post Economy) dazu:</p>
                            <ul>
                                <li>Fr. 7.- für 1- 2 Spiele</li>
                                <li>Ab 3 Spiele ist der Versand kostenlos!</li>
                            </ul>
                        </div>
                        <hr>
                        <div class="product-price py-2 px-3">
                            <h2 class="mb-0">
                                <span class="currency">CHF</span>
                                <span class="price">{{$product->regular_price}}</span>
                            </h2>
                            <h4 class="mt-0">
                                <small>Incl. Tax: {{$product->regular_price}} </small>
                            </h4>
                        </div>


                        <div class="d-flex align-items-center">
                            <div class="product-quantity mt-3 mr-3">
                                <div class="number-input">
                                    <button type="button"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                                    <button type="button"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="plus"></button>
                                </div>
                            </div>
                            <div class="product-btn-box mt-3">
                                <button type="submit" class="btn product-btn"><i class="fas fa-cart-plus fa-lg mr-2 "></i>
                                    Auschecken
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                                   role="tab" aria-controls="product-desc" aria-selected="true" >Description</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                 aria-labelledby="product-desc-tab">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                    posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a
                                    eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel.
                                    Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed
                                    venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus.
                                    Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit
                                    mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies
                                    neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc
                                    vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros,
                                    vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
