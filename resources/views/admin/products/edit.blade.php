@extends('layouts.admin')
<link rel="stylesheet" href="{{asset('css/admin/toastr.min.css')}}">
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">

                        @if(Session::has('update_providers'))
                            <span id="update_providers"></span>
                        @endif

                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Edit</h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                {!! Form::model($product, ['method'=>'PATCH', 'action'=>['AdminProductsController@update', $product->id], 'enctype' => 'multipart/form-data',
                                'files' => 'true', 'role'=>'form', 'id'=>'quickForm']) !!}
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mt-3">
                                            {!! Form::label('name', 'Name') !!}

                                            {!! Form::text('name', $product->name, ['placeholder' => 'Product name' , 'class'=>'form-control'
                                            . ( $errors->has('name') ? ' required is-invalid' : '')]) !!}

                                            @error('name')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('short_description', 'Short description') !!}

                                            {!! Form::textarea('short_description', $product->short_description, ['placeholder' => 'Short description', 'class'=>'form-control'
                                            . ( $errors->has('short_description') ? ' required is-invalid' : '')]) !!}

                                            @error('short_description')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('long_description', 'Long description') !!}

                                            {!! Form::textarea('long_description', $product->long_description, ['placeholder' => 'Long description', 'class'=>'form-control'
                                            . ( $errors->has('long_description') ? ' required is-invalid' : '')]) !!}

                                            @error('long_description')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('price', 'Price') !!}
                                            <div class="input-group-append">
                                                {!! Form::text('price', $product->price, ['placeholder' => 'Price', 'class'=>'form-control'
                                                . ( $errors->has('price') ? ' required is-invalid' : '')]) !!}
                                                <span class="input-group-text">CHF</span>
                                            </div>

                                            @error('price')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('quantity', 'Quantity') !!}
                                            {!! Form::number('quantity', $product->quantity, ['placeholder' => 'Quantity', 'class'=>'form-control'
                                            . ( $errors->has('quantity') ? ' required is-invalid' : '')]) !!}

                                            @error('quantity')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label>Featured image</label>
                                            <input type="file" name="featured_image" class="form-control"
                                                   style="padding-top: 0px; padding-bottom: 0px; padding-left: 0px"/>
                                            @error('featured_image')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                            @if($product->featured_image == null)
                                                <div class="form-group mt-3">
                                                    <img style="width: 245px; height: 200px"
                                                         src="{{asset('img/product/imageplaceholder.png')}}"/>
                                                </div>
                                            @else
                                                <div class="form-group mt-3">
                                                    <img style="width: 245px; height: 200px"
                                                         src="{{asset('img/product/' . $product->featured_image)}}"/>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label>Gallery</label>
                                            <input type="file" name="gallery[]" multiple="true" class="form-control"
                                                   style="padding-top: 0px; padding-bottom: 0px; padding-left: 0px"/>
                                            @error('gallery')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                            @if($product->product_galleries == null)
                                                <div class="form-group mt-3">
                                                    <img style="width: 245px; height: 200px"
                                                         src="{{asset('img/product/imageplaceholder.png')}}"/>
                                                </div>
                                            @else
                                                <div class="form-group mt-3">
                                                    @foreach($product->product_galleries as $item)
                                                        <img src="{{asset('img/product/' . $item->image)}}" style="width: 100px; margin-bottom: 20px; display: inline-block">
                                                    @endforeach
                                                </div>
                                            @endif

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
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                            </button>
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
                    short_description: {
                        required: true,
                    },
                    long_description: {
                        required: true,
                    },
                    price: {
                        required: true,
                    },
                    quantity: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Feld ist forderlich",
                        name: "Ungültiger Name"
                    },
                    short_description: {
                        required: "Feld ist forderlich",
                    },
                    long_description: {
                        required: "Feld ist forderlich",
                    },
                    price: {
                        required: "Feld ist forderlich",
                    },
                    quantity: {
                        required: "Feld ist forderlich",
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
