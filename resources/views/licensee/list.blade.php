@extends('layouts.app')

@section('title', 'Lizenznehmer aufgelistet')

@section('content')
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <h1>Lizenznehmer aufgelistet</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-box">
                        <ul class="breadcrumbs">
                            <li>Home</li>
                            <li>Lizenznehmer</li>
                            <li>Aufgelistet</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="d-flex justify-content-center row mt-5">
            <div class="col-lg-8">
                <div class="alert alert-success mt-5 mb-5 rounded-0 alert-theme-default" role="alert">
                    <h4 class="alert-heading">Vor dem Start lesen!</h4>
                    <p>Um Ihren Lizenznehmer zuerst zu finden, müssen Sie Ihren Kanton und Ihre Stadt auswählen. Danach
                        erhalten Sie eine Tabelle mit allen Lizenznehmern in der ausgewählten Stadt.</p>
                    <hr>
                    <p class="mb-0">Wenn Sie kein Ergebnis finden, bedeutet dies, dass wir derzeit keine Lizenz für
                        diesen Sektor vergaben haben.</p>
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

                <div class="text-center">
                    <div id="no-entry-for-cities"></div>
                </div>
            </div>
        </div>
        <div class="row overflow-auto">
            <div class="col-12">
                <table class="table mb-5" id="table">
                    <thead>
                    <tr>
                        <th scope="col">Name der Firma</th>
                        <th scope="col">Name</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Mobiltelefon</th>
                        <th scope="col">Webseite</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Aktionen</th>
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
            let base_url = '{{ url('/')  }}';
            $("#select-option-api-cantons").change(function (data) {
                let value = data.currentTarget.value
                $("#select-option-api-providers").empty().hide();
                $("#no-entry-for-cities").empty().hide();
                $(".second-spinner").css('visibility', 'visible');

                $.ajax({
                    url: base_url + '/api/providers/list/' + value,
                    data: {
                        format: 'json'
                    },
                    type: 'GET',
                    success: function (data) {

                        let text = "";
                        for (let i = 0; i < data.length; i++) {
                            if (data[i].mobile == null) {
                                data[i].mobile = '';
                            }
                            text +=
                                '<tr>' +
                                '<td data-label="Name der Firma" class="licensee-td">' + data[i].company + '</td>' +
                                '<td data-label="Name" class="licensee-td">' + data[i].name + '</td>' +
                                '<td data-label="Adresse" class="licensee-td">' + data[i].address + '</td>' +
                                '<td data-label="Telefon" class="licensee-td"><a href="tel:' + data[i].phone + '">' + data[i].phone + '</a></td>' +
                                '<td data-label="Mobiltelefon" class="licensee-td"><a href="tel:' + data[i].mobile + '">' + data[i].mobile + '</a></td>' +
                                '<td data-label="Webseite" class="licensee-td"><a href="http://' + data[i].web_url + '" target="_blank">' + data[i].web_url + '</a></td>' +
                                '<td data-label="E-Mail" class="licensee-td"><a href="mailto:' + data[i].email + '">' + data[i].email + '</a></td>' +
                                '<td data-label="Aktionen" class="licensee-td"><a class="btn slider-btn p-2 mt-0" href=" ' + base_url + '/lizenznehmer-details/' + data[i].slug + '">Details anzeigen</a></td>' +
                                '</tr>';
                        }

                        if (value == 'dada') {
                            console.log('selektovan cc2')
                        } else {
                            if (data.length == 0) {
                                $("#no-entry-for-cities").css("display", "block").append('<p class="alert alert-info p-3 rounded-0">Es tut uns leid, aber in diesem Sektor haben wir momentan noch keine Lizenz vergeben. <a href="mailto:verkauf@rueegg-management.ch">Interessiert?</a></p>')
                                $(".second-spinner").css('visibility', 'hidden')
                                $("#table").css("visibility", "hidden")
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



