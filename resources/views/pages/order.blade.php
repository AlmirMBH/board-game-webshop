@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/number-input.css')}}" type="text/css">
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
                                    {!! Form::open(['method'=>'POST', 'action'=>'PagesController@confirmOrder', 'role'=>'form', 'id'=>'quickForm']) !!}
                                    @csrf
                                    <input type="hidden" name="price" value="{{$product->regular_price}}">
                                    <input type="hidden" name="name" value="{{$product->name}}">
                                    <div class="product-title">
                                        <h3>{{$product->name}}</h3>
                                    </div>
                                    <div class="product-price">
                                        <span class="currency">CHF</span>
                                        <span class="price">{{$product->regular_price}}</span>
                                    </div>
                                    <div class="product-quantity mt-5">
                                        <div class="number-input">
                                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                        </div>
                                    </div>
                                    <div class="product-btn-box mt-10-rem">
                                        <button type="submit" class="btn product-btn">Auschecken</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
