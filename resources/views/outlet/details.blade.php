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
                            <li>Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{$place->name}}
@endsection