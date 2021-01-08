<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\OrderCustomer;
use App\OrderProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripeController extends Controller
{
    /**
     * payment view
     */
    public function handleGet()
    {
        $subTotal = number_format(session()->get('subTotal'),2);
        return view('payment.index', compact('subTotal'));
    }

    /**
     * handling payment with POST
     */
    public function handlePost(Request $request)
    {
        try {
            Stripe\Stripe::setApiKey('sk_live_PPdpb8HHAyBvpXyTOY7C9HbS');
            $subTotalData = session()->get('subTotal');
            $charge = Stripe\Charge::create([
                "amount" => 100 * $subTotalData,
                "currency" => "CHF",
                "source" => $request->stripeToken,
                "description" => "Purchase"
            ]);

            if ($charge['status'] == 'succeeded') {

                $orderCustomerData = session()->get('orderCustomerData');
                $requestItems = session()->get('requestItems');

                $orderCustomer = OrderCustomer::create($orderCustomerData);
                if ($orderCustomer) {
                    Order::create([
                        'order_id'      => $orderCustomerData['order_id'],
                        'customer_id'   => $orderCustomer->id,
                        'sub_total'     => $subTotalData
                    ]);
                }

                foreach($requestItems as $jsonObjectItem) {
                    $item = json_decode($jsonObjectItem, true);

                    $orderProduct[] = OrderProducts::create([
                        'order_id'      => $orderCustomerData['order_id'],
                        'product_id'    => $item['product_id'],
                        'price'         => $item['item_price'],
                        'quantity'      => $item['item_quantity'],
                        'product_name'  => $item['item_name']
                    ]);
                }

                $orderProducts[] = $orderProduct;

                $userInput = [
                    'order_id' => $orderCustomerData['order_id'],
                    'orderProducts' => $orderProducts,
                    'sub_total' => $subTotalData,
                    'created_at' => $orderCustomer['created_at']->format('Y.m.d H:i:s'),
                    'first_name' => $orderCustomerData['first_name'],
                    'last_name' => $orderCustomerData['last_name'],
                    'address' => $orderCustomerData['address'],
                    'company' => $orderCustomerData['company'],
                    'state' => $orderCustomerData['state'],
                    'address2' => $orderCustomerData['address2'],
                    'post_code' => $orderCustomerData['post_code'],
                    'city' => $orderCustomerData['city'],
                    'phone' => $orderCustomerData['phone'],
                    'email' => $orderCustomerData['email'],
                ];

                $emails = ['admin@gewerbe-spiel.ch', $orderCustomerData['email']];

                Mail::send('order-email', ['userInput' => $userInput], function($message) use ($emails, $userInput) {
                    $message->to($emails)->subject('Ihre Bestellung wurde erfolgreich versendet');
                });

                Cart::where('session_id', $request->session()->getId())->delete();

                session()->forget('orderCustomerData');
                session()->forget('subTotal');
                session()->forget('requestItems');

//                Session::flash('success', 'Zahlung wurde erfolgreich verarbeitet.');
                return view('pages.order-successful', compact('userInput'));
            } else {
                Session::flash('error', 'Geld nicht in Brieftasche hinzufügen!');
                return back();
            }

        } catch (\Stripe\Exception\CardException $e) {
            // Since it's a decline, \Stripe\Exception\CardException will be caught
            echo 'Status is:' . $e->getHttpStatus() . '\n';
            echo 'Type is:' . $e->getError()->type . '\n';
            echo 'Code is:' . $e->getError()->code . '\n';
            // param is '' in this case
            echo 'Param is:' . $e->getError()->param . '\n';
            echo 'Message is:' . $e->getError()->message . '\n';
        } catch (\Stripe\Exception\RateLimitException $e) {
            Session::flash('error', $e->getMessage());
            return back();
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            Session::flash('error', $e->getMessage());
            return back();
        } catch (\Stripe\Exception\AuthenticationException $e) {
            Session::flash('error', $e->getMessage());
            return back();
        } catch (\Stripe\Exception\ApiConnectionException $e) {
            Session::flash('error', $e->getMessage());
            return back();
        } catch (\Stripe\Exception\ApiErrorException $e) {
            Session::flash('error', $e->getMessage());
            return back();
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
            return back();
        }


    }
}
