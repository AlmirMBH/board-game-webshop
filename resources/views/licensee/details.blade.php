@extends('layouts.app')

@section('title', 'Lizenznehmer - Anbieter')

@section('content')
    <section class="provider-profile section-padding-top section-padding-bottom d-flex h-100 align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card provider-profile-card">
                        <div class="card-header">
                            <h2>{{ $provider->company }}</h2>
                            <h5 class="text-secondary">{{ $provider->name }}</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li  id="address" class="list-group-item">
                                    <div class="md-v-line"></div><i class="fas fa-map-marked-alt mr-5"></i>{{ $provider->address }}
                                </li>
                                <li id="phone" class="list-group-item">
                                    <div class="md-v-line"></div><i class="fas fa-phone mr-5"></i><a href="tel:{{ $provider->phone }}">{{ $provider->phone }}</a>
                                </li>
                                @if ($provider->mobile)
                                    <li id="mobile" class="list-group-item">
                                        <div class="md-v-line"></div><i class="fas fa-mobile mr-5"></i><a href="tel:{{ $provider->mobile }}">{{ $provider->mobile }}</a>
                                    </li>
                                @endif
                                @if ($provider->web_url)
                                    <li id="webUrl" class="list-group-item">
                                        <div class="md-v-line"></div><i class="fas fa-globe mr-5"></i><a href="http://{{ $provider->web_url }}" target="_blank">{{ $provider->web_url }}</a>
                                    </li>
                                @endif
                                <li id="email" class="list-group-item">
                                    <div class="md-v-line"></div><i class="fas fa-envelope mr-5"></i><a href="mailto:{{ $provider->email }}">{{ $provider->email }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div id="map" class="contact-map mt-0" style="width: 100%; height: 450px;"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNml5REt6UV2TpjsHpCG4vJg4UV-edmDo&callback=initMap"></script>
    <script>
        let geocoder, map;

        function initMap() {
            geocoder = new google.maps.Geocoder();
            codeAddress(geocoder);

            let latlng = {lat: 47.376888, lng: 8.541694};
            let mapOptions = {
                zoom: 16,
                center: latlng
            }

            map = new google.maps.Map(document.getElementById('map'), mapOptions);
        }

        function codeAddress(geocoder) {
            let addressElement = document.getElementById('address');
            let address = addressElement.innerText;

            geocoder.geocode({'address': address}, function (results, status) {
                if (status == 'OK') {
                    map.setCenter(results[0].geometry.location);
                    let marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });
                } else {
                    alert('Geocode war aus folgendem Grund nicht erfolgreich: ' + status);
                }
            });
        }
    </script>
@endsection
