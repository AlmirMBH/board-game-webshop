@extends('layouts.admin')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Add Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                {!! Form::open(['method'=>'POST', 'action'=>'AdminProductsController@store', 'enctype' => 'multipart/form-data', 'files' => true, 'class' => 'dropzone', 'id' => 'image-upload']) !!}
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control">
                                            @error('name')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Short description</label>
                                            <textarea type="text" name="short_description"
                                                      class="form-control"></textarea>
                                            @error('short_description')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Long description</label>
                                            <textarea type="text" name="long_description"
                                                      class="form-control"></textarea>
                                            @error('long_description')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <div class="input-group-append">
                                                <input type="text" name="price" class="form-control">
                                                <span class="input-group-text">CHF</span>
                                            </div>
                                            @error('price')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" name="quantity" class="form-control">
                                            @error('quantity')
                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
{{--                                        <div class="form-group">--}}
{{--                                            <label>Featured image</label>--}}
{{--                                            <input type="file" name="featured_image"--}}
{{--                                                   class="form-control product-featured-image"--}}
{{--                                                   style="width: 200px; height: 200px">--}}
{{--                                            @error('featured_image')--}}
{{--                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Gallery</label>--}}
{{--                                            <input type="file" name="gallery"--}}
{{--                                                   class="form-control product-featured-image">--}}
{{--                                            @error('gallery')--}}
{{--                                            <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
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
    <!-- Dropzone JS -->
    <script src="{{asset('js/admin/dropzone.js')}}"></script>
    <script src="{{asset('js/admin/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/admin/additional-methods.min.js')}}"></script>
    <script>
        Dropzone.options.imageUpload = {
            maxFilesize: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            success: function(file, response)
            {
                console.log(response);
            },
            error: function(response)
            {
                return false;
            }
        };

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
                    featured_image: {
                        required: true,
                    },
                    gallery: {
                        required: true,
                    }
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
                    featured_image: {
                        required: "Feld ist forderlich",
                    },
                    gallery: {
                        required: "Feld ist forderlich",
                    }
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
