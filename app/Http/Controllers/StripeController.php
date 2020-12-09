<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripeController extends Controller
{
    /**
     * payment view
     */
    public function handleGet()
    {
        return view('payment.index');
    }

    /**
     * handling payment with POST
     * @throws Stripe\Exception\ApiErrorException
     */
    public function handlePost(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_IzEl2v1duO0rkxXiXHoF8hl600X7tJ2OkF');
        Stripe\Charge::create ([
            "amount" => 100 * 10,
            "currency" => "USD",
            "source" => $request->stripeToken,
            "description" => "Making test payment."
        ]);

        Session::flash('success', 'Payment has been successfully processed.');

        return back();
    }
}
