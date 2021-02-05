@extends('layouts.app')

@section('title', 'Warenkorb')

@section('content')

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <h1>Warenkorb</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-box">
                        <ul class="breadcrumbs">
                            <li>Home</li>
                            <li>Warenkorb</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="isCartEmpty">
    @if(!$isCartEmpty)
        <section class="notice">
            <div class="container">
                <div class="row justify-content-center align-items-center my-5">
                    <div class="col-md-8">
                        <div class="alert alert-warning mb-4 d-flex justify-content-between align-items-center" role="alert">
                            <p class="mb-0">Ihr Warenkorb ist gegenwärtig leer.</p>
                            <a href="{{ route('web-shop') }}" class="btn btn-warning">Zurück zum WebShop</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
    </div>
        <section class="cart-items-wrapper py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mx-auto w-100 cart-table">
                                <thead>
                                <tr>
                                    <th class="product-image">Product Image</th>
                                    <th class="product-name">Product Name</th>
                                    <th class="product-quantity">Product Quantity</th>
                                    <th class="product-price">Product Price</th>
                                    <th class="product-subtotal">Product Subtotal</th>
                                    <th class="remove"></th>
                                </tr>
                                </thead>
                                <tbody id="list-cart-orders">

                                </tbody>
                            </table>
                            <div id="remove-all-btn" class="d-flex justify-content-end">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cart-collaterals py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <div class="cart-totals p-3 border">
                            <div class="heading">
                                <h5>Wagen insgesamt</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Total:</td>
                                        <td><span id="currency"></span> <span id="grandTotal"></span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ route('checkout') }}" class="checkout-btn btn btn-primary">Weiter zur Kasse</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
{{--{{ route('web-shop') }}--}}
@section('script')
    <script>
        let base_url = '{!! url('/') !!}';
        let session_id = '{!! session()->getId() !!}';
        let asset = '{!! asset('img/product/') !!}';
        let route_web_shop = '{!! route('web-shop') !!}';
    </script>
    <script src="{{asset('js/cart-management.js')}}"></script>
@endsection
