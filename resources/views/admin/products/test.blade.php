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


                                {!! Form::open(['method'=>'POST', 'action'=>'AdminProductsController@store', 'class' => 'dropzone',
                                    'enctype' => 'multipart/form-data', 'files' => 'true']) !!}
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
{{--                                        <div class="col-sm-12 col-md-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                    <div class="fallback">--}}
{{--                                                        <input name="file" type="file" multiple />--}}
{{--                                                    </div>--}}
{{--                                                <label>Featured image</label>--}}
{{--                                                <input type="file" name="featured_image"--}}
{{--                                                       class="form-control product-featured-image"--}}
{{--                                                       style="width: 200px; height: 200px">--}}
{{--                                                @error('featured_image')--}}
{{--                                                <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            {!! Form::close() !!}



{{--                        <!--GALLERY-->--}}
{{--                            <div class="row">--}}
{{--                                <div class='list-group gallery'>--}}
{{--                                    @if($images->count())--}}
{{--                                        @foreach($images as $image)--}}
{{--                                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>--}}
{{--                                                <a class="thumbnail fancybox" rel="ligthbox" href="/img/product/{{ $image->image }}">--}}
{{--                                                    <img class="img-responsive" alt="" src="/img/product/{{ $image->image }}" />--}}
{{--                                                    <div class='text-center'>--}}
{{--                                                        <small class='text-muted'>{{ $image->title }}</small>--}}
{{--                                                    </div> <!-- text-center / end -->--}}
{{--                                                </a>--}}
{{--                                                <form action="{{ url('product-gallery',$image->id) }}" method="POST">--}}
{{--                                                    <input type="hidden" name="_method" value="delete">--}}
{{--                                                    {!! csrf_field() !!}--}}
{{--                                                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>--}}
{{--                                                </form>--}}
{{--                                            </div> <!-- col-6 / end -->--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
{{--                                </div> <!-- list-group / end -->--}}
{{--                            </div> <!-- row / end -->--}}
{{--                            --}}{{--END GALLERY--}}
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

            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });


    </script>
@endsection
