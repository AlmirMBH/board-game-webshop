@extends('layouts.admin')
<link rel="stylesheet" href="{{asset('css/admin/toastr.min.css')}}">
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        @if(Session::has('update_providers'))
                            <span id="update_providers"></span>
                        @endif

                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Edit</h3>
                            </div>
                            <!-- /.card-header -->


                            <div class="card-body">
                                {!! Form::model($product, ['method'=>'PATCH', 'action'=>['AdminProductsController@update', $product->id], 'role'=>'form', 'id'=>'quickForm']) !!}
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mt-3">
                                            {!! Form::label('name', 'Name') !!}
                                            {!! Form::text('name', null, ['placeholder' => 'Product name' , 'class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('description', 'Description') !!}
                                            {!! Form::textarea('description', null, ['placeholder' => 'Product description', 'class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('regular_price', 'Regular price') !!}
                                            <div class="input-group-append">
                                                {!! Form::text('regular_price', null, ['placeholder' => 'Regular price', 'class'=>'form-control']) !!}
                                                <span class="input-group-text">CHF</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('discount_price', 'Discount price') !!}
                                            <div class="input-group-append">
                                                {!! Form::text('discount_price', null, ['placeholder' => 'Discount price', 'class'=>'form-control']) !!}
                                                <span class="input-group-text">CHF</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('quantity', 'Quantity') !!}
                                            {!! Form::number('quantity', null, ['placeholder' => 'product quantity', 'class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end">
                                <button type="button" class="btn btn-danger mr-2" data-toggle="modal"
                                        data-target="#modal-default">
                                    Delete
                                </button>
                                <button class="btn btn-primary">Update</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Are you sure you want to delete this?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminProductsController@destroy', $product->id]]) !!}
                            <button type="submit" class="btn btn-danger">Delete</button>
                            {!! Form::close() !!}

                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

        </section>
    </div>

@endsection

@section('script')
    <script src="{{asset('js/admin/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/admin/additional-methods.min.js')}}"></script>
    <script src="{{asset('js/admin/sweetalert2.min.js')}}"></script>
    <script src="{{asset('js/admin/toastr.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#quickForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    description: {
                        required: true,
                    },
                    regular_price: {
                        required: true,
                    },
                    discount_price: {
                        required: true,
                    },
                    quantity: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Please enter name",
                        name: "Please enter a valid name"
                    },
                    description: {
                        required: "Field is required",
                    },
                    regular_price: {
                        required: "Field is required",
                    },
                    discount_price: {
                        required: "Field is required",
                    },
                    quantity: {
                        required: "Field is required",
                    },
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });

            if ($("#update_providers").length) {
                toastr.success('Update was successful.')
            }

        });
    </script>
@endsection
