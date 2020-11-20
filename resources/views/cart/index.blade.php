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

    <section class="cart-items-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Product Quantity</th>
                                <th>Product Price</th>
                                <th>Product Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>x</td>
                                    <td>{{ $item->item_image }}</td>
                                    <td>{{ $item->item_name }}</td>
                                    <td>{{ $item->item_quantity }}</td>
                                    <td>{{ $item->item_price }}</td>
                                    <td>{{ $item->item_sub_total }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
