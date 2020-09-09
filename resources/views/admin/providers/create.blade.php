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
                                    {!! Form::open(['method'=>'POST', 'action'=>'AdminProvidersController@store', 'role'=>'form', 'id'=>'quickForm']) !!}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>Cantons</h4>

                                            @foreach($cantons as $item)
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" name="canton_id[]" type="checkbox" id="customCheckbox{{$item->id}}" value="{{$item->id}}">
                                                <label for="customCheckbox{{$item->id}}" class="custom-control-label">{{$item->name}}</label>
                                            </div>
                                            @endforeach

                                            <div class="form-group mt-3">
                                                <label>Company</label>
                                                <input type="text" name="company" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" name="mobile" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Web Url</label>
                                                <input type="text" name="web_url" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control">
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
                    email: {
                        required: true,
                        email: true,
                    },
                    company: {
                        required: true,
                    },
                    name: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                    phone: {
                        required: true,
                    },
                    "canton_id[]": {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
                    },
                    company: {
                        required: "Field is required",
                    },
                    name: {
                        required: "Field is required",
                    },
                    address: {
                        required: "Field is required",
                    },
                    phone: {
                        required: "Field is required",
                    },
                    "canton_id[]": {
                        required: "Select an option",
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
