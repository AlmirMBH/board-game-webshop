@extends('layouts.admin')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Invoice</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="callout callout-info">
                            <h5><i class="fas fa-info"></i> Note:</h5>
                            This page has been enhanced for PDF. Click the Generate PDF button at the bottom of the invoice to PDF.
                        </div>


                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        Board Game
                                        <small class="float-right">Date: {{$currentDate}}</small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong>{{$order->customer->first_name . ' ' . $order->customer->last_name}}</strong><br>
                                        {{$order->customer->address}}<br>
                                        {{$order->customer->address2}}<br>
                                        Phone: {{$order->customer->phone}}<br>
                                        Email: {{$order->customer->email}}
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    To
                                    <address>
                                        <strong>Thomas Thomas</strong><br>
                                        Address 1<br>
                                        Address 2<br>
                                        Phone: number<br>
                                        Email: email
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <br>
                                    <b>Order ID:</b> {{$order->order_id}}<br>
                                    <b>Order Due:</b> {{$order->created_at->format('d-m-Y')}}<br>
{{--                                    <b>Account:</b> 968-34567--}}
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Product</th>
                                            <th>Regular Price</th>
                                            <th>Description</th>
                                            <th>Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{$order->quantity}}</td>
                                            <td>GEWERBE-SPIEL</td>
                                            <td>29.90 CHF</td>
                                            <td>Das Gewerbe-Spiel.ch ist zur Zeit für nachfolgende Gemeinde/ Dörfer der Schweiz erhältlich...</td>
                                            <td>{{$order->sub_total}} CHF</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-6">
                                    <p class="lead">Payment Methods:</p>
                                    <img src="{{ asset('img/admin/visa.png') }}" alt="Visa">
                                    <img src="{{ asset('img/admin/mastercard.png') }}" alt="Mastercard">
                                    <img src="{{ asset('img/admin/paypal2.png') }}" alt="Paypal">

                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                                        plugg
                                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                    <p class="lead">Amount Due {{$order->created_at->format('d-m-Y')}}</p>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Subtotal:</th>
                                                <td>{{$order->sub_total}} CHF</td>
                                            </tr>
                                            <tr>
                                                <th>Tax (0.0%)</th>
                                                <td>00.0 CHF</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping:</th>
                                                <td>00.0 CHF</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td>{{$order->sub_total}} CHF</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> <a style="color: white;" href="{{route('generate-pdf', $order->id)}}">Generate PDF</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

@section('script')

@endsection
