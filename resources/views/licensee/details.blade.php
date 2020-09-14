@extends('layouts.app')

@section('title', 'Lizenznehmer - Anbieter')

@section('content')
    <section class="provider-profile section-padding-top section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h2>{{ $provider->company }}</h2>
                            <h5>{{ $provider->name }}</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="md-v-line"></div><i class="fas fa-map-marked-alt mr-5"></i>{{ $provider->address }}
                                </li>
                                <li class="list-group-item">
                                    <div class="md-v-line"></div><i class="fas fa-phone mr-5"></i>{{ $provider->phone }}
                                </li>
                                @if ($provider->mobile)
                                    <li class="list-group-item">
                                        <div class="md-v-line"></div><i class="fas fa-mobile mr-5"></i>{{ $provider->mobile }}
                                    </li>
                                @endif
                                @if ($provider->web_url)
                                    <li class="list-group-item">
                                        <div class="md-v-line"></div><i class="fas fa-globe mr-5"></i>{{ $provider->web_url }}
                                    </li>
                                @endif
                                <li class="list-group-item">
                                    <div class="md-v-line"></div><i class="fas fa-envelope mr-5"></i>{{ $provider->email }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
