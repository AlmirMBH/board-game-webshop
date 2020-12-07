<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\CheckoutFormRequest;
use App\Order;
use App\OrderCustomer;
use App\OrderProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $items = $items = Cart::where('session_id', $request->session()->getId())->get();
        $grandTotal = $this->grandTotal($items);
        $currency = Order::$currency;

        return view('checkout.index', compact('items', 'grandTotal', 'currency'));
    }

    public function store(CheckoutFormRequest $request)
    {
        $input = $request->except('items', 'sub_total');
        $orderId = $this->generateOrderId();
        $input['order_id'] = $orderId;
        $orderCustomer = OrderCustomer::create($input);

        if ($orderCustomer) {
            Order::create([
                'order_id'      => $orderId,
                'customer_id'   => $orderCustomer->id,
                'sub_total'     => $request['sub_total']
            ]);
        }

        foreach(($request['items']) as $jsonObjectItem) {
            $item = json_decode($jsonObjectItem, true);

            $orderProduct[] = OrderProducts::create([
                'order_id'      => $orderId,
                'product_id'    => $item['product_id'],
                'price'         => $item['item_price'],
                'quantity'      => $item['item_quantity'],
                'product_name'  => $item['item_name']
            ]);
        }


        $orderProducts[] = $orderProduct;

        $userInput = [
            'order_id' => $orderId,
            'orderProducts' => $orderProducts,
            'sub_total' => $request['sub_total'],
            'created_at' => $orderCustomer['created_at']->format('Y.m.d H:i:s'),
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'address' => $request['address'],
            'company' => $request['company'],
            'state' => $request['state'],
            'address2' => $request['address2'],
            'post_code' => $request['post_code'],
            'city' => $request['city'],
            'phone' => $request['phone'],
            'email' => $request['email'],
        ];

        $emails = ['admin@gewerbe-spiel.ch', $request['email']];

        Mail::send('order-email', ['userInput' => $userInput], function($message) use ($emails, $userInput) {
            $message->to($emails)->subject('Ihre Bestellung wurde erfolgreich versendet');
        });

        Cart::where('session_id', $request->session()->getId())->delete();

        return view('pages.order-successful', compact('userInput'));

    }


    public function grandTotal($items)
    {
        $grandTotal = null;

        foreach ($items as $item) {
            $grandTotal += $item->item_sub_total;
        }

        return $grandTotal;
    }

    public function generateOrderId(): string
    {
        $randomLetter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5);
        $randomNumber = substr(str_shuffle("0123456789"), 0, 5);
        $randomNumLet = strtoupper($randomLetter . '-' . $randomNumber);

        if ($this->orderIdExists($randomNumLet)) {
            return $this->generateOrderId();
        }

        return $randomNumLet;
    }


    public function orderIdExists($randomNumLet)
    {
        return Order::where('order_id', $randomNumLet)->exists();
    }
}
