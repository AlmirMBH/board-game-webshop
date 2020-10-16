@extends('layouts.app')

@section('title', 'Webshop')

@section('content')

    {{--<section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <h1>Bestellvorgang Erfolgreich</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-box">
                        <ul class="breadcrumbs">
                            <li>Home</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    <section class="shop section-padding-top section-padding-bottom">
        <div class="container">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card product-card">
                        <div class="card-body product-card-body p-5">
                            <div class="row justify-content-center d-flex">
                                <h1 class="text-success">Ihre Bestellung wurde erfolgreich versendet.</h1>
                                <img class="mt-5" style="width: 200px; " src="{{asset('img/success.png')}}" alt="">
                            </div>
                            <div>
                                <div><h6>Vorname: {{ $order->customer()->first_name }}</h6></div>
                            </div>
                            <div>
                                <div><h6>Produkt: {{$productName}}</h6></div>
                                <div><h6>Preis: {{$order->price}}</h6></div>
                                <div><h6>Stk: {{$order->quantity}}</h6></div>
                                <div><h6>Total: {{$order->sub_total}}</h6></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
