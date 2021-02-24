@extends('layouts.app')

@section('title', 'Webshop')

@section('content')

    <section class="shop section-padding-top section-padding-bottom">
        <div class="container">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card product-card">
                        <div class="card-body product-card-body p-5">
                            <div class="row justify-content-center d-flex">
                            <div class="text-center mb-5">
                                <div>
                                    <img class="mt-5 mb-3" style="width: 100px; " src="{{asset('img/success.png')}}"
                                         alt="">
                                </div>
                                <div class="mt-2 mb-2">
                                    <h4>Hallo {{ $userInput['first_name'] }}, Ihre Bestellung wurde erhalten. </h4>
                                </div>
                                <div>
                                    <h6>Bestellnummer: <strong>{{$userInput['order_id']}}</strong></h6>
                                </div>
                                <div>
                                    <h6>Datum: <strong>{{$userInput['created_at']}}</strong></h6>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <h4><strong>Produktdetails</strong></h4>
                                </div>
                            </div>
                                @foreach($userInput['orderProducts'] as $orderProducts)
                                    @foreach($orderProducts as $product)
                                            <div class="row">
                                                <div class="d-flex col-sm-12 justify-content-around mb-5 border-top border-bottom pt-3">
                                                    <div class="text-center">
                                                        <h6>Product</h6>
                                                        <h6><strong>{{$product['product_name']}}</strong></h6>
                                                    </div>
                                                    <div class="text-center">
                                                        <h6>Preis</h6>
                                                        <h6><strong>{{App\Order::$currency}} {{$product['price']}}</strong></h6>
                                                    </div>
                                                    <div class="text-center">
                                                        <h6>Stk</h6>
                                                        <h6><strong>{{$product['quantity']}}</strong></h6>
                                                    </div>
                                                    <div class="text-center">
                                                        <h6>Versand</h6>
                                                        <h6><strong>{{App\Order::getCurrency($product['quantity']) . ' ' }} {{App\Order::getShippingCost($product['quantity'])}}</strong></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                <div class="text-right" style="margin-right: 73px;">
                                    <h6>Total</h6>
                                    <h6><strong>{{App\Order::$currency}} {{number_format($userInput['sub_total'], 2)}}</strong></h6>
                                </div>
                            </div>
                            <div class="px-4">
                                <h4><strong>Kundendetails</strong></h4>
                            </div>
                            <div id="picture-block" class="d-flex bd-highlight border-top mt-3 mb-3 pt-2 px-4">
                                <div class="mr-auto p-2 bd-highlight">
                                    <div>
                                        <h6>Vorname: <strong>{{ $userInput['first_name'] }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Nachname: <strong>{{ $userInput['last_name'] }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Unternehmen: <strong>{{ $userInput['company'] }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Kanton: <strong>{{ $userInput['state'] }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Adresse 1: <strong>{{ $userInput['address'] }}</strong></h6>
                                    </div>
                                    @if($userInput['address2'])
                                        <div>
                                            <h6>Adresse 2: <strong>{{ $userInput['address2'] }}</strong></h6>
                                        </div>
                                    @endif
                                    <div>
                                        <h6>Postleitzahl: <strong>{{ $userInput['post_code'] }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Stadt: <strong>{{ $userInput['city'] }}</strong></h6>
                                    </div>

                                    <div>
                                        <h6>Telefon: <strong>{{ $userInput['phone'] }}</strong></h6>
                                    </div>
                                    <div>
                                        <h6>Email: <strong>{{ $userInput['email'] }}</strong></h6>
                                    </div>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div id="product-image-box" class="product-image-box" style="width: 350px;">
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
