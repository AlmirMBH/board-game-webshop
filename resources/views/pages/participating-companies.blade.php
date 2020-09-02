@extends('layouts.app')

@section('content')
<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h1>Teilnehmende Betriebe / Verkaufsstellen</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-box">
                    <ul class="breadcrumbs">
                        <li>Home</li>
                        <li>Teilnehmende Betriebe - Verkaufsstellen</li>
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
                        <h1>Teilnehmende Betriebe /<br/>
                            <span class="section-title-prominent">Verkaufsstellen (POS)</span>
                        </h1>
                    </div>

                    <div class="participating-companies-desc mt-5">
                        <p>Hier finden Sie alle teilnehmenden Betriebe, Geschäfte, Büros,
                            Praxen usw.., sowie auch alle öffentliche Verkaufstellen (wo Sie die GEWERBE-SPIELE kaufen
                            können) gegliedert nach Kantone und Gemeinde.
                        </p>
                    </div>

                    <div class="participating-companies-btn mt-5">
                        <a href="{{route('outlets-list')}}" class="btn slider-btn">Teilnehmende Betriebe</a>
                        <a href="#" class="btn slider-btn">Verkaufsstellen (POS)</a>
                    </div>

                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="licensee-image">
                    <img src="{{asset('img/teilnehmendeBetriebePhoto1.jpg')}}" alt="">
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
