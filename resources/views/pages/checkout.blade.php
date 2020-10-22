@extends('layouts.app')

@section('title', 'Webshop')

@section('content')

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <h1>Auschecken</h1>
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
                            <li>Auschecken</li>
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
                        <div class="card-body product-card-body p-5">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="product-title mb-5">
                                        <h3>Zahlungsdetails</h3>
                                    </div>
                                    {!! Form::open(['method'=>'POST', 'action'=>'ShopController@confirmCheckout', 'role'=>'form', 'id'=>'quickForm']) !!}

                                    <div class="form-group">
                                        {{ Form::hidden('order_id', $order['order_id']) }}
                                    </div>
                                    <div class="form-group">
                                        {{--{!! Form::label('first_name', 'Vorname') !!}--}}
                                        {!! Form::text('first_name', null, ['class' => 'form-control checkout-form' . ( $errors->has('first_name') ? ' required is-invalid' : '' ),
                                        'placeholder' => 'Vorname*']) !!}
                                        @error('first_name')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {{--{!! Form::label('last_name', 'Nachname') !!}--}}
                                        {!! Form::text('last_name', null, ['class'=>'form-control checkout-form' . ( $errors->has('last_name') ? ' required is-invalid' : '' ),
                                        'placeholder' => 'Nachname *']) !!}
                                        @error('last_name')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {{--{!! Form::label('company', 'Unternehmen') !!}--}}
                                        {!! Form::text('company', null, ['class'=>'form-control checkout-form' . ( $errors->has('company') ? ' required is-invalid' : '' ),
                                        'placeholder' => 'Unternehmen *']) !!}
                                        @error('company')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {{--{!! Form::label('state', 'Staat') !!}--}}
                                        {!! Form::text('state', null, ['class'=>'form-control checkout-form' . ( $errors->has('state') ? ' required is-invalid' : '' ),
                                        'placeholder' => 'Kanton *']) !!}
                                        @error('state')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {{--{!! Form::label('address', 'Adresse 1') !!}--}}
                                        {!! Form::text('address', null, ['class'=>'form-control checkout-form' . ( $errors->has('address') ? ' required is-invalid' : '' ),
                                        'placeholder' => 'Adresse 1 *']) !!}
                                        @error('address')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {{--{!! Form::label('address2', 'Adresse 2') !!}--}}
                                        {!! Form::text('address2', null, ['class'=>'form-control checkout-form' /*. ( $errors->has('address2') ? ' required is-invalid' : '' )*/,
                                        'placeholder' => 'Adresse 2']) !!}
                                        {{--@error('address2')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                        @enderror--}}
                                    </div>

                                    <div class="form-group">
                                        {{--{!! Form::label('post_code', 'Postleitzahl') !!}--}}
                                        {!! Form::text('post_code', null, ['class'=>'form-control checkout-form' . ( $errors->has('post_code') ? ' required is-invalid' : '' ),
                                        'placeholder' => 'Postleitzahl *']) !!}
                                        @error('post_code')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {{--{!! Form::label('city', 'Stadt') !!}--}}
                                        {!! Form::text('city', null, ['class'=>'form-control checkout-form' . ( $errors->has('city') ? ' required is-invalid' : '' ),
                                        'placeholder' => 'Stadt *']) !!}
                                        @error('city')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {{--{!! Form::label('phone', 'Telefon') !!}--}}
                                        {!! Form::text('phone', null, ['class'=>'form-control checkout-form' . ( $errors->has('phone') ? ' required is-invalid' : '' ),
                                        'placeholder' => 'Telefon *']) !!}
                                        @error('phone')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {{--{!! Form::label('email', 'Email') !!}--}}
                                        {!! Form::email('email', null, ['class'=>'form-control checkout-form' . ( $errors->has('email') ? ' required is-invalid' : '' ),
                                        'placeholder' => 'Email *', 'oninput' => "this.setCustomValidity('')"]) !!}
                                        @error('email')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group pl-1">
                                        <p>* Alle mit Sternchen gekennzeichneten Felder sind erforderlich.</p>
                                    </div>


                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="order_review">
                                        <div class="product-title mb-5 mt-3">
                                            <h3>Bestellung</h3>
                                        </div>
                                        <div class="table-responsive order_table">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Produkt</th>
                                                    <th>Gesamt</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Board Game<span class="product-qty" style="font-weight: bold"> &nbsp; x {{$order['quantity']}}</span>
                                                    </td>
                                                    <td>CHF {{$order['price']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Versand</td>
                                                    <td>{{App\Order::getCurrency($order['quantity'])}} {{App\Order::getShippingCost($order['quantity'])}}</td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <td class="product-subtotal"
                                                        style="font-weight: bold">CHF {{$order['sub_total']}}
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <div class="product-btn-box">
                                                <button type="submit" class="btn product-btn d-block w-100">Jetzt kaufen
                                                </button>
                                            </div>
                                        </div>


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
