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

                @foreach($products as $product)
                    <div class="col-md-4">
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
                                            <img src="{{asset('img/product/product-image.png')}}" alt="" style="max-width: 250px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="product-desc mt-3">
                                        <p>{!! $product->description !!}</p>
                                        <ul>
                                            <li>{{App\Order::shippingCost()}}</li>
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

                {{--SINGLE PRODUCT DISPLAYED--}}

                {{--<div class="col-md-8">
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
                                        <span class="currency">{{App\Order::$currency}}</span>
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
                                        <a href="{{route('order', $product->id)}}" class="btn product-btn">Jetzt kaufen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
@endsection
