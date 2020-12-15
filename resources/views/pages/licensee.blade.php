@extends('layouts.app')

@section('title', 'Lizenznehmer')

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
                        <h3>Bei unseren Lizenznehmer können Sie gerne nachfragen bzgl. zukünftigen Erscheinungen.</h3>
                        <a class="btn slider-btn licensee-list" href="{{route('licensee-list')}}">Zertifzierte Lizenznehmer</a>
                    </div>

                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="licensee-image">
                    <img src="{{asset('img/licenseePhoto2.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row mt-5 pdf-viewer">
            <div class="col-12">
                <object data="{{ asset('/img/pdf/Spielfeld-mit-Angaben-Feldergrössen.pdf') }}" type="application/pdf" width="100%" height="100%">
                    This browser does not support PDFs. Please download the PDF to view it: Download PDF
                </object>
            </div>
        </div>
    </div>
</section>
@endsection
