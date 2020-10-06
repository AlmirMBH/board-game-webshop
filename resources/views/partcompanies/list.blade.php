@extends('layouts.app')

@section('title', 'Teilnehmende Betriebe')

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

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="alert alert-success mt-5 mb-5 rounded-0 alert-theme-default" role="alert">
                    <h4 class="alert-heading">Vor dem Start lesen!</h4>
                    <p>Um zuerst Ihre Filialen zu finden, müssen Sie Ihren Kanton und Ihre Stadt auswählen.</p>
                </div>
                <div class="form-group text-center pt-1">
                    <select name="" class="form-control d-inline w-100 rounded-0 p-3" id="select-option-api-cantons">
                        <option>Wählen Sie Ihren Kanton</option>
                        @foreach($cantons as $canton)
                            <option class="select-option-api-cantons" value="{{$canton->id}}">{{$canton->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center">
                    <i class="fas fa-spinner first-spinner fa-spin fa-2x"></i>
                </div>

                <div class="text-center">
                    <div id="no-entry-for-cantons"></div>
                </div>

                <div class="form-group text-center">
                    <select class="form-control w-100 rounded-0 p-3" name="" id="select-option-api-cities"></select>
                </div>

                <div class="text-center mt-5">
                    <div id="no-entry-for-cities"></div>
                </div>

                <table class="table mb-5" id="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Phone</th>
                        <th scope="col">E-Mail</th>
                    </tr>
                    </thead>
                    <tbody id="select-option-api-providers"></tbody>

                    <div class="text-center">
                        <i class="fas fa-spinner second-spinner fa-spin fa-2x"></i>
                    </div>

                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        $(document).ready(function () {
            let base_url = '{!! url('/') !!}';
            $("#select-option-api-cantons").change(function (data) {
                $("#select-option-api-cities").empty().hide();
                $("#select-option-api-providers").empty().hide();
                $("#no-entry-for-cities").css("display", "none").append('<p class="alert alert-info p-3 rounded-0">Es tut uns leid, aber wir verkaufen im Moment nicht in dieser Stadt.</p>')
                $("#table").css('visibility', 'hidden');
                $(".first-spinner").css('visibility', 'visible');
                $("#no-entry-for-cantons").css('visibility', 'hidden').empty();
                let value = data.currentTarget.value
                $.ajax({
                    url: base_url + '/api/cities/list/' + value,
                    data: {
                        format: 'json'
                    },
                    type: 'GET',
                    success: function (data) {

                        if (data != 0) {
                            let text = "";
                            for (let i = 0; i < data.length; i++) {
                                if (i == 0) {
                                    text += "<option class='cc2' value='dada'>Wählen Sie Ihre Stadt</option>";
                                }
                                text += "<option class='cc' value='" + data[i].id + "'>" + data[i].name + "</option>";
                            }
                            $("#select-option-api-cities").show().append(text);

                        } else {
                            $("#no-entry-for-cantons").css('visibility', 'visible').append('<p class="alert alert-info p-3 rounded-0">Es tut uns leid, derzeit haben wir keine registrierten Kantone.</p>')
                        }
                        $(".first-spinner").css('visibility', 'hidden')

                    }
                })
            });


            $("#select-option-api-cities").change(function (data) {
                let value = data.currentTarget.value
                let valueIs = $("#select-option-api-cities").val();
                // console.log(valueIs);

                $("#select-option-api-providers").empty().hide();
                $("#no-entry-for-cities").empty().hide();
                $(".second-spinner").css('visibility', 'visible');


                $.ajax({
                    url: base_url + '/api/partcompanies/list/' + value,
                    data: {
                        format: 'json'
                    },
                    type: 'GET',
                    success: function (data) {

                        let text = "";
                        for (let i = 0; i < data.length; i++) {
                            text += "<tr>" +
                                "<td class='licensee-td'> <a href='" + base_url + "/outlet-details/" + data[i].slug + "'>" + data[i].name + "</a> </td>" +
                                "<td class='licensee-td'>" + data[i].address + "</td>" +
                                "<td class='licensee-td'>" + data[i].phone + "</td>" +
                                "<td class='licensee-td'>" + data[i].email + "</td>" +
                                "</tr>";
                        }

                        if (value == 'dada') {
                            console.log('selektovan cc2')
                        } else {
                            if (data.length == 0) {
                                $("#no-entry-for-cities").css("display", "block").append('<p class="alert alert-info p-3 rounded-0">Es tut uns leid, aber wir haben derzeit keine Filialen in dieser Stadt.</p>')
                                $(".second-spinner").css('visibility', 'hidden')
                            } else {
                                $("#table").css("visibility", "visible")
                                $("#select-option-api-providers").show().append(text)
                                $(".second-spinner").css('visibility', 'hidden')
                            }

                        }

                    }
                })
            });


        })
    </script>
@endsection

