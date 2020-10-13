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

                        @if(Session::has('update_outlets'))
                            <span id="update_outlets"></span>
                        @endif

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
                                                <input type="checkbox" @if($outlets->is_availability == true) checked @else @endif name="is_availability" class="custom-control-input" id="customSwitch3">
                                                <label class="custom-control-label" for="customSwitch3">Is Game Available</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="button" class="btn btn-danger mr-2" data-toggle="modal" data-target="#modal-default">
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
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminOutletsController@destroy', $outlets->id]]) !!}
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

            if ( $( "#update_outlets" ).length ) {
                toastr.success('Update was successful.')
            }

        });
    </script>
@endsection
