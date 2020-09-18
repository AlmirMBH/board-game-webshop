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
                        <div class="card-body product-card-body p-5">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    {!! Form::open(['method'=>'POST', 'action'=>'PagesController@confirmCheckout', 'role'=>'form', 'id'=>'quickForm']) !!}

                                    <div class="form-group">
                                        {!! Form::label('first_name', 'First Name') !!}
                                        {!! Form::text('first_name', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('last_name', 'Last Name') !!}
                                        {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('company', 'Company') !!}
                                        {!! Form::text('company', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('state', 'State') !!}
                                        {!! Form::text('state', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('address', 'Address 1') !!}
                                        {!! Form::text('address', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('address2', 'Address 2') !!}
                                        {!! Form::text('address2', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('post_code', 'Post Code') !!}
                                        {!! Form::text('post_code', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('city', 'City') !!}
                                        {!! Form::text('city', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('phone', 'Phone') !!}
                                        {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('email', 'Email') !!}
                                        {!! Form::email('email', null, ['class'=>'form-control']) !!}
                                    </div>



                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="product-title">
                                        <h3>name</h3>
                                    </div>
                                    <div class="product-price">
                                        <span class="currency">CHF</span>
                                        <span class="price">{{$order->price}}</span>
                                    </div>
                                    <div class="product-desc">
                                        <p>Quantity: {{$order->quantity}}</p>
                                    </div>
                                    <p>Total: {{$order->sub_total}}</p>
                                    <div class="product-btn-box">
                                        <button type="submit" class="btn product-btn">Kaufe jetzt</button>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
