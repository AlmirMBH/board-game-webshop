@extends('layouts.app')

@section('title', 'Lizenznehmer')

@section('content')
<section class="page-banner">
    <div class="container text-medium-center">
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

                    <div class="section-title text-medium-center">
                        <h2>Hier finden Sie alle zertifizierten Lizenznehmer gegliedert nach Kantonen und Gemeinden.
                        </h2>
                        <h3>Bei unseren Lizenznehmern können Sie gerne über zukünftige Gewerbe-Spiele nachfragen.</h3>
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
                <img src="{{asset('img/Spielfeld-mit-Angaben-Feldergrossen.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
