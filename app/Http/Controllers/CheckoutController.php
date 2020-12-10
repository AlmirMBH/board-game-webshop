<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\CheckoutFormRequest;
use App\Order;
use App\OrderCustomer;
use App\OrderProducts;
use Illuminate\Contracts\Validation\Validator;
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
        $subTotal = $request['sub_total'];
        if(!$subTotal) return redirect()->back();

        $input = $request->except('items', 'sub_total');
        $orderId = $this->generateOrderId();
        $input['order_id'] = $orderId;

        $orderCustomerData = [
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'company' => $input['company'],
            'state' => $input['state'],
            'address' => $input['address'],
            'address2' => $input['address2'],
            'post_code' => $input['post_code'],
            'city' => $input['city'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'order_id' => $input['order_id']
        ];

        $requestItems = $request['items'];

        $request->session()->put('orderCustomerData', $orderCustomerData);
        $request->session()->put('subTotal', $subTotal);
        $request->session()->put('requestItems', $requestItems);

        return redirect(route('stripe.get'));
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
