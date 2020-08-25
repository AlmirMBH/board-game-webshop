@extends('layouts.app')


@section('content')

  <section class="page-banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="page-title">
            <h1>Teilnehmende Betriebe</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs-box">
            <ul class="breadcrumbs">
              <li>Home</li>
              <li>Teilnehmende Betriebe</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="participating-companies section-margin-top section-margin-bottom">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 col-md-8">
          <div class="participating-companies-text">

            <div class="section-title">
              <h1>Teilnehmende Betriebe/<br/>
                <span class="section-title-prominent">Verkaufsstellen (POS)</span>
              </h1>
            </div>

            <div class="participating-companies-desc">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis tempor mollis, erat augue eleifend ipsum, ut imperdiet turpis sem at nulla. Suspendisse lobortis ante ut convallis vehicula. Proin id nibh nec velit tempus gravida sed in purus. Sed suscipit leo et lorem pellentesque cursus.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis tempor mollis, erat augue eleifend ipsum, ut imperdiet turpis sem at nulla. Suspendisse lobortis ante ut convallis vehicula. Proin id nibh nec velit tempus gravida sed in purus. Sed suscipit leo et lorem pellentesque cursus.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis tempor mollis, erat augue eleifend ipsum, ut imperdiet turpis sem at nulla. Suspendisse lobortis ante ut convallis vehicula. Proin id nibh nec velit tempus gravida sed in purus. Sed suscipit leo et lorem pellentesque cursus.</p>
            </div>

            <div class="participating-companies-btn">
              <buttton class="btn slider-btn">Verkaufsstellen</buttton>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="licensee-image">
            <img src="img/teilnehmendeBetriebePhoto1.jpg" alt="">
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
