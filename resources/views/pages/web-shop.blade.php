@extends('layouts.app')

@section('title', 'Webshop')

@section('content')

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <h1>Webshop</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-box">
                        <ul class="breadcrumbs">
                            <li>Home</li>
                            <li>Webshop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop section-padding-top section-padding-bottom">
        <div class="container">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card product-card">
                        <div class="card-body product-card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="product-image-box">
                                        <img src="{{asset('img/product/product-image.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="product-title">
                                        <h3>{{$product->name}}</h3>
                                    </div>
                                    <div class="product-price p-2">
                                        <span class="currency">CHF</span>
                                        <span class="price">{{$product->price}}</span>
                                    </div>
                                    <div class="product-desc">
                                        <p>{!! $product->description !!}</p>
                                        <ul>
                                            <li>Fr. 7.- für 1- 2 Spiele</li>
                                            <li>Ab 3 Spiele ist der Versand kostenlos!</li>
                                        </ul>
                                    </div>
                                    <div class="product-btn-box">
                                        <a href="{{route('order')}}" class="btn product-btn">Jetzt kaufen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
