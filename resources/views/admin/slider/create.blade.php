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
                                <h3 class="card-title">Add New Slider Image</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                {!! Form::open(['method'=>'POST', 'action'=>'AdminSliderController@store', 'enctype' => 'multipart/form-data', 'files' => true, 'id' => 'image-upload']) !!}
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" id="sliderImage">
                                                    <label class="custom-file-label" for="sliderImage">Choose file</label>
                                                </div>
                                            </div>
                                            @error('image')
                                                <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group">
                                                <img src="#" alt="Preview Image" class="d-none img-thumbnail" id="previewImage">
                                            </div>
                                            <div class="form-group">
                                                <label>Short description</label>
                                                <textarea type="text" name="description"
                                                          class="form-control"></textarea>
                                                @error('description')
                                                    <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end">
                                    <button class="btn btn-primary">Upload</button>
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
    <script>
        $('#sliderImage').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);

            sliderImagePreview(this);
        });

        function sliderImagePreview(input) {
            if (input.files && input.files[0]) {
                var fileReader = new FileReader();

                fileReader.onload = function (e) {
                    $("#previewImage").attr('src', e.target.result);
                    $("#previewImage").removeClass('d-none');
                }

                fileReader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    </script>
@endsection
