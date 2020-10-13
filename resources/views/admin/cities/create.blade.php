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
                                @if(count($cantons) > 0)
                                    {!! Form::open(['method'=>'POST', 'action'=>'AdminCitiesController@store', 'role'=>'form', 'id'=>'quickForm']) !!}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                {!! Form::label('canton_id', 'Canton') !!}
                                                {!! Form::select('canton_id', $cantons, null, ['class'=>'custom-select']) !!}
                                            </div>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger">
                                                    <input type="checkbox" checked name="is_available" class="custom-control-input" id="customSwitch3">
                                                    <label class="custom-control-label" for="customSwitch3">Is Game Available</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                            {!! Form::close() !!}
                            @else
                                <p>There are currently no Cantons entered!</p>
                            @endif
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
                },
                messages: {
                    name: {
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
