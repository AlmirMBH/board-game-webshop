@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<style>
    .hide {
        visibility: hidden;
    }
    .has-error {
        border: 1px solid red!important;
    }
</style>
<?php
app()->setLocale('de');
?>
@section('title', 'Zahlung')

@section('content')

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <h1>Zahlung</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-box">
                        <ul class="breadcrumbs">
                            <li>Home</li>
                            <li>Webshop</li>
                            <li>Auftrag</li>
                            <li>Auschecken</li>
                            <li>Zahlung</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop section-padding-top section-padding-bottom">
        <div class="container">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card product-card">
                        <div id="payment-padding" class="card-body product-card-body p-5">

                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-danger text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{__('payment.' . Session::get('error'))}}</p>
                                </div>
                            @endif

                            <form role="form" action="{{ route('stripe.payment') }}" method="post" class="validation"
                                  data-cc-on-file="false"
                                  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                  id="payment-form">
                                @csrf

                                <div class='form-group required'>
                                    <label for="frmNameCC">Name auf der Karte</label>
                                    <input class='form-control required' required id="frmNameCC" name="ccname" type='text' autocomplete="cc-name">
                                </div>

                                <div class='form-group required'>
                                    <label for="frmCCNum">Kartennummer</label>
                                    <input autocomplete='cc-number' class='form-control card-num' required name="cardnumber" id="frmCCNum" type='text'>
                                </div>


                                <div class='form-row row'>
                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                        <label class='frmCCCVC'>CVC</label>
                                        <input autocomplete='cc-csc' name="cvc" id="frmCCCVC" class='form-control card-cvc' placeholder='415' size='4' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='frmCEM'>Monat des Ablaufens</label>
                                        <input autocomplete="cc-exp-month" id="frmCEM" name="ccmonth" class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='frmCEY'>Ablaufjahr</label>
                                        <input autocomplete="cc-exp-year" name="ccyear" class='form-control card-expiry-year' id="frmCEY" placeholder='YYYY' size='4' type='text'>
                                    </div>
                                </div>

{{--                                <?php $next = __('home.Next');?>--}}
{{--                                <p>{{__('payment.Could not find payment information')}}</p>--}}

                                <div class='form-row row'>
                                    <div class='col-md-12 hide error form-group'>
                                        <div class='alert-danger alert'>{{__('payment.Fix the errors before you begin.')}}</div>
                                    </div>
                                </div>

                                <button class="btn btn-danger btn-lg btn-block" type="submit">Jetzt Kaufen (CHF {{$subTotal}})</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
        let $form         = $(".validation");
        $('form.validation').bind('submit', function(e) {
            let $form         = $(".validation"),
                inputVal = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputVal),
                $errorStatus = $form.find('div.error'),
                valid         = true;
            $errorStatus.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                let $input = $(el);
                if ($input.val() === '') {
                    $input.addClass('has-error');
                    $errorStatus.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey('pk_live_8id5EBqCR0K5cU8h6cPZtrTB');
                Stripe.createToken({
                    number: $('.card-num').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeHandleResponse);
            }

        });

        let errorMessages = {
            missing_payment_information: "Beheben Sie die Fehler, bevor Sie beginnen.",
            incorrect_number: "Ihre Kartennummer ist falsch.",
            invalid_expiry_year: "Das Ablaufjahr Ihrer Karte ist ungültig.",
            invalid_expiry_month: "Der Ablaufmonat Ihrer Karte ist ungültig.",
            invalid_number: "Die Kartennummer ist keine gültige Kreditkartennummer."
        };

        function stripeHandleResponse(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(errorMessages[response.error.code]);
            } else {
                let token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
