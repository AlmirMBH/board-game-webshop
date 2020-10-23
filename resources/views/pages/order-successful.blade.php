@extends('layouts.app')

@section('title', 'Webshop')

@section('content')

    <section class="shop section-padding-top section-padding-bottom">
        <div class="container">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card product-card">
                        <div class="card-body product-card-body p-5">
                            {{--<div class=" row justify-content-center d-flex">--}}
                            <div class="text-center mb-5">
                                <div>
                                    <img class="mt-5 mb-3" style="width: 100px; " src="{{asset('img/success.png')}}"
                                         alt="">
                                </div>
                                <div class="mt-2 mb-2">
                                    <h4>Hallo {{ $customer->first_name }}, Ihre Bestellung wurde erhalten. </h4>
                                </div>
                                <div>
                                    <h6>Bestellnummer: <strong>{{$order->order_id}}</strong></h6>
                                </div>
                                <div>
                                    <h6>Datum: <strong>{{$order->created_at->format('d/M/Y')}}</strong></h6>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h4><strong>Produktdetails</strong></h4>
                            </div>
                            <div class="d-flex justify-content-around mb-5 border-top border-bottom pt-3">
                                <div class="text-center">
                                    <h6>Product</h6>
                                    <h6><strong>{{$productName}}</strong></h6>
                                </div>
                                <div class="text-center">
                                    <h6>Preis</h6>
                                    <h6><strong>{{App\Order::$currency}} {{$order->price}}</strong></h6>
                                </div>
                                <div class="text-center">
                                    <h6>stk</h6>
                                    <h6><strong>{{$order->quantity}}</strong></h6>
                                </div>
                                <div class="text-center">
                                    <h6>Versand</h6>
                                    <h6><strong>{{App\Order::getCurrency($order['quantity'])}} {{App\Order::getShippingCost($order->quantity)}}</strong></h6>
                                </div>
                                <div class="text-center">
                                    <h6>Total</h6>
                                    <h6><strong>{{App\Order::$currency}} {{$order->sub_total}}</strong></h6>
                                </div>
                            </div>
                            <div>
                                <h4><strong>Kundendetails</strong></h4>
                            </div>
                            <div class="d-flex bd-highlight border-top mt-3 mb-3 pt-2">
                                <div class="mr-auto p-2 bd-highlight">
                                    <div>
                                        <h6>Vorname: <strong>{{ $customer->first_name }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Nachname: <strong>{{ $customer->last_name }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Unternehmen: <strong>{{ $customer->company }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Kanton: <strong>{{ $customer->state }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Adresse 1: <strong>{{ $customer->address }}</strong></h6>
                                    </div>
                                    @if($customer->address2)
                                        <div>
                                            <h6>Adresse 2: <strong>{{ $customer->address2 }}</strong></h6>
                                        </div>
                                    @endif
                                    <div>
                                        <h6>Postleitzahl: <strong>{{ $customer->post_code }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Stadt: <strong>{{ $customer->city }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Telefon: <strong>{{ $customer->phone }}</strong></h6>
                                    </div>
                                    <div>
                                        <h6>Email: <strong>{{ $customer->email }}</strong></h6>
                                    </div>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div class="product-image-box" style="width: 350px;">
                                        <img src="{{asset('img/product/Tobler-Perspektive-Total-3.JPG')}}" alt="">
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
