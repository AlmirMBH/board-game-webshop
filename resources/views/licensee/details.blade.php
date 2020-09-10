@extends('layouts.app')

@section('title', 'Lizenznehmer - Anbieter')

@section('content')
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <h1>Anbieter - {{ $provider->company }}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-box">
                        <ul class="breadcrumbs">
                            <li>Home</li>
                            <li>Lizenznehmer</li>
                            <li>Anbieter @empty($prvider->company) - @endempty {{ $provider->company }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="provider-profile section-padding-top section-padding-bottom">
        <div class="container">
            <div class="row d-flex">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h2>{{ $provider->company }}</h2>
                            <h5>{{ $provider->name }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
