@extends('layouts.app')

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
                @if (session('status'))
                    <div class="alert alert-success mb-4 d-flex justify-content-between align-items-center" role="alert">
                        <p class="mb-0">{{ session('status') }}</p>
                        <a href="{{ route('cart') }}" class="btn btn-info">Warenkorb anzeigen</a>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="product-image-box">
                            <a class="fancybox-thumb" rel="fancybox-thumb" href="{{asset('img/product/' . $product->featured_image)}}" title="{{$product->name}}">
                                <img src="{{asset('img/product/' . $product->featured_image)}}" alt="{{$product->name}}">
                            </a>
                        </div>
                        <div class="product-image-thumbs d-flex justify-content-between mt-3">
                            @foreach($product->product_galleries as $item)
                                <a class="fancybox-thumb" rel="fancybox-thumb" href="{{asset('img/product/' . $item->image)}}" title="{{$product->name}}">
                                    <img src="{{asset('img/product/' . $item->image)}}" alt="{{$product->name}}"  class="img-fluid img-thumbnail border-0 p-0 rounded-0"/>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        {!! Form::open(['method'=>'POST', 'action'=> ['CartController@store', $product->id], 'role'=>'form', 'id'=>'quickForm']) !!}
                        @csrf
                        <div class="product-title mt-0">
                            <h3>{{$product->name}}</h3>
                        </div>
                        <div class="card-text mt-2">
                            <p>{{$product->long_description}}</p>

                            <p>Der Preis pro Spiel beträgt Fr. 29.90 zusätzlich kommen folgende Portokosten (Paket
                                Inland Post Economy) dazu:</p>
                            <ul>
                                <li>{{App\Order::shippingCost()}}</li>
                                <li>{{App\Order::freeShipping()}}</li>
                            </ul>
                        </div>
                        <hr>
                        <div class="product-price py-2 px-3">
                            <h2 class="mb-0">
                                <span class="currency">{{App\Order::$currency}}</span>
                                <span class="price">{{$product->price}}</span>
                            </h2>
                            <h4 class="mt-0">
                                <small>Incl. Tax: {{$product->price}} </small>
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
                                    Bezahlen
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
                                   role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                 aria-labelledby="product-desc-tab">
                                <p class="card-text">{{$product->long_description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox-thumb").fancybox({
                prevEffect	: 'none',
                nextEffect	: 'none',
                helpers	: {
                    title	: {
                        type: 'outside'
                    },
                    thumbs	: {
                        width	: 50,
                        height	: 50
                    }
                }
            });
        });
    </script>
@endsection
