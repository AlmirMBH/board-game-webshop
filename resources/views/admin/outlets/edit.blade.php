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
                                <h3 class="card-title">Edit</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                {!! Form::model($outlets, ['method'=>'PATCH', 'action'=>['AdminOutletsController@update', $outlets->id], 'role'=>'form', 'id'=>'quickForm']) !!}
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {!! Form::label('city_id', 'City') !!}
                                            {!! Form::select('city_id', $cities, null, ['class'=>'custom-select']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('name', 'Name') !!}
                                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('address', 'Address') !!}
                                            {!! Form::text('address', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('phone', 'Phone') !!}
                                            {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('email', 'Email') !!}
                                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger">
{{--                                                {!! Form::checkbox('is_availability', null, ['class' => 'custom-control-input', 'id' => 'customSwitch3']) !!}--}}
{{--                                                {!! Form::label('customSwitch3', 'Is Available', ['class' => 'custom-control-label']) !!}--}}
                                                <input type="checkbox" @if($outlets->is_availability == true) checked @else @endif name="is_availability" class="custom-control-input" id="customSwitch3">
                                                <label class="custom-control-label" for="customSwitch3">Is Available</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button class="btn btn-primary">Update</button>
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
                    name: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                    phone: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
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
