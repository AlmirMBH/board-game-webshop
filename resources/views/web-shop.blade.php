@extends('layouts.app')


@section('content')

  <section class="page-banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="page-title">
            <h1>Webshop</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs-box">
            <ul class="breadcrumbs">
              <li>Home</li>
              <li>Webshop</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="shop section-padding-top section-padding-bottom">
    <div class="container">
      <div class="row d-flex justify-content-center my-5">
        <div class="col-md-8">
          <div class="card product-card">
            <div class="card-body product-card-body">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <div class="product-image-box">
                    <img src="img/product/product-image.png" alt="">
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <div class="product-title">
                    <h3>GEWERBE-SPIEL</h3>
                  </div>
                  <div class="product-price">
                    <span class="currency">CHF</span>
                    <span class="price">100.00</span>
                  </div>
                  <div class="product-desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis tempor
                      mollis, erat augue eleifend ipsum, ut imperdiet turpis sem at nulla.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, magna quis tempor
                      mollis, erat augue eleifend ipsum, ut imperdiet turpis sem at nulla.</p>
                  </div>
                  <div class="product-btn-box">
                    <a href="#" class="btn product-btn">Kaufe jetzt</a>
                  </div>
                </div>
              </div>
            </div>
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
