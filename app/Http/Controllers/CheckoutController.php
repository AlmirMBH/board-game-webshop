<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\CheckoutFormRequest;
use App\Order;
use App\OrderCustomer;
use Illuminate\Http\Request;

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
        $orderId = $this->generateOrderId();

        $orderCustomer = OrderCustomer::create([
            'order_id'      => $orderId,
            'first_name'    => $request->input('first_name'),
            'last_name'     => $request->input('last_name'),
            'company'       => $request->input('company'),
            'state'         => $request->input('state'),
            'address'       => $request->input('address'),
            'address2'      => $request->input('address2'),
            'post_code'     => $request->input('post_code'),
            'city'          => $request->input('city'),
            'phone'         => $request->input('phone'),
            'email'         => $request->input('email'),
        ]);

        if ($orderCustomer) {
            Order::create([
                'order_id'      => $orderId,
                'customer_id'   => $orderCustomer->id,
                ''
            ]);
        }
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
