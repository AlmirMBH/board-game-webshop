@extends('layouts/app')


@section('content')

  <section class="page-banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="page-title">
            <h1>Lizenznehmer</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs-box">
            <ul class="breadcrumbs">
              <li>Home</li>
              <li>Lizenznehmer</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="licensee-section section-margin-top section-margin-bottom">
    <div class="container">
      <div class="row">

        <div class="col-sm-12 col-md-8">
          <div class="licensee-text">

            <div class="section-title">
              <h1>Hier finden Sie alle <span class="section-title-prominent">
                                zertifizierten Lizenznehmer</span>, gegliederten nach Kantone und Gemeinde
              </h1>
            </div>

            <div class="paragraph-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis tempor mollis, erat augue eleifend ipsum, ut imperdiet turpis sem at nulla. Suspendisse lobortis ante ut convallis vehicula. Proin id nibh nec velit tempus gravida sed in purus. Sed suscipit leo et lorem pellentesque cursus.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis tempor mollis, erat augue eleifend ipsum, ut imperdiet turpis sem at nulla. Suspendisse lobortis ante ut convallis vehicula. Proin id nibh nec velit tempus gravida sed in purus. Sed suscipit leo et lorem pellentesque cursus.</p>

              <button class="btn slider-btn"><a href="{{route('list-lizenznehmer')}}">Zertifzierte Lizenznehmer</a></button>

            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="licensee-image">
            <img src="img/licenseePhoto2.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection


@section('footer')
@endsection

@section('script')
@endsection
