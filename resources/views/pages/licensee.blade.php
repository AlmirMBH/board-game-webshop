@extends('layouts.app')

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
                        <h2>Hier finden Sie alle <span class="section-title-prominent">
                            zertifizierten Lizenznehmer</span>, gegliederten nach Kantone und Gemeinde
                        </h2>
                        <a class="btn slider-btn" href="{{route('licensee-list')}}">Zertifzierte Lizenznehmer</a>
                    </div>

                    <div class="border-top pt-5 mt-5">
                        <h2>Bei unseren Lizenznehmer können Sie gerne nachfragen bzgl. zukünftigen Erscheinungen.</h2>
                        <a class="btn slider-btn" href="{{route('contact')}}">Lizenznehmer kontaktieren</a>
                    </div>

                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="licensee-image">
                    <img src="{{asset('img/licenseePhoto2.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
