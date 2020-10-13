@extends('layouts.admin')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Create</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                {!! Form::open(['method'=>'POST', 'action'=>'AdminProductsController@store']) !!}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea type="text" name="description" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Regular price</label>
                                            <div class="input-group-append">
                                                <input type="text" name="discount_price" class="form-control">
                                                <span class="input-group-text">CHF</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Discount price</label>
                                            <div class="input-group-append">
                                                <input type="text" name="discount_price" class="form-control">
                                                <span class="input-group-text">CHF</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" name="quantity" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

@endsection

@section('script')
    <script src="{{asset('js/admin/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/admin/additional-methods.min.js')}}"></script>
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
        });
    </script>
@endsection
