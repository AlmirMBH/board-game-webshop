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
                                {!! Form::model($provider, ['method'=>'PATCH', 'action'=>['AdminProvidersController@update', $provider->id], 'role'=>'form', 'id'=>'quickForm']) !!}
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>Cantons</h4>
                                        @foreach($cantons as $canton)
                                            <div class="custom-control custom-checkbox">
                                                <input @if($provider->cantons->contains('id', $canton->id)) checked @endif class="custom-control-input" name="canton_id[]" type="checkbox" id="customCheckbox{{$canton->id}}" value="{{$canton->id}}">
                                                <label for="customCheckbox{{$canton->id}}" class="custom-control-label">{{$canton->name}}</label>
                                            </div>
                                        @endforeach

                                        <div class="form-group mt-3">
                                            {!! Form::label('company', 'Company') !!}
                                            {!! Form::text('company', null, ['class'=>'form-control']) !!}
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
                                            {!! Form::label('mobile', 'Mobile') !!}
                                            {!! Form::text('mobile', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('web_url', 'Web Url') !!}
                                            {!! Form::text('web_url', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('email', 'Email') !!}
                                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
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
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminProvidersController@destroy', $provider->id]]) !!}
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

            if ( $( "#update_providers" ).length ) {
                toastr.success('Update was successful.')
            }

        });
    </script>
@endsection
