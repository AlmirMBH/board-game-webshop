<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderCustomer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ShopController extends Controller
{
    public function webShop()
    {
        $products = Product::all();
        return view('pages.web-shop', compact('products'));
    }


    public function order($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.order', compact('product'));
    }


    public function confirmOrder(Request $request)
    {
        $quantity = $request['quantity'];

        if($quantity < 3){
            $subTotal =  number_format($request['price'] * $request['quantity'] + Order::getShippingCost($quantity), 2);
        }else{
            $subTotal = number_format($request['price'] * $request['quantity'], 2);
        }

        $randomNumLet = $this->generateOrderId();

        $id = $request['id'];

        $product_name = (new Product())->getProductName($id);

        $order = [
            'order_id' => $randomNumLet,
            'product_id' => $request['id'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'sub_total' => $subTotal,
            'product_name' => $product_name,
        ];

        session()->put('order', $order);
        session()->save();
        return view('pages.checkout', compact('order'));
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


    public function confirmCheckout(Request $request)
    {
        $sessionOrder = $request->session()->get('order');

        if(!$sessionOrder['order_id']) return redirect()->route('order');

        $customerInput = $request->all();

        $messages = [
            'required' => 'Dieses Feld wird benötigt',
            'max' => 'Zeichenbegrenzung überschritten',
            'regex' => 'Ungültige Eingabe',
            'numeric' => 'Nur Zahlen erlaubt',
            'alpha' => 'Nur Buchstaben erlaubt',
            'email' => 'Falsches E-Mail-Format',
        ];

        $request->validate([
            'first_name' => 'required|max:50|regex:/^[\pL\s\-]+$/u', // allows (German) letters and spaces
            'last_name' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            'company' => 'required|max:50|regex:/^[\pL\0-9\s\-]+$/u',  // allows (German) letters, numbers and spaces
            'state' => 'required|max:50|alpha',
            'address' => 'required|max:50|regex:/^[\pL\0-9\s\-]+$/u',
            'post_code' => 'required|numeric',
            'city' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            'phone' => 'required|numeric',
            'email' => 'required|email|max:50'

        ], $messages);

        $customerInput['order_id'] = $sessionOrder['order_id'];

        $customer = OrderCustomer::create($customerInput);


        session()->forget('order');



        $order = Order::create([
            'order_id' => $sessionOrder['order_id'],
            'customer_id' => $customer->id,
            'product_id' => $sessionOrder['product_id'],
            'price' => $sessionOrder['price'],
            'quantity' => $sessionOrder['quantity'],
            'sub_total' => $sessionOrder['sub_total']
        ]);
        session()->put('order', $order);

        $name = $order->products->name;

        $sessionData = [
            'order_id' => $sessionOrder['order_id'],
            'product_id' => $order['product_id'],
            'product_name' => $name,
            'price' => $sessionOrder['price'],
            'quantity' => $sessionOrder['quantity'],
            'sub_total' => $sessionOrder['sub_total'],
            'created_at' => $order['created_at']->format('Y.m.d H:i:s'),
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


        Mail::send('order-email', ['sessionData' => $sessionData], function($message) use ($sessionData) {
            $message->to('your@email.com')->subject('Ihre Bestellung wurde erfolgreich versendet');
        });

        return redirect()->route('order-successful')->with(['status' => 'order_successful']);
    }


    public function orderSuccessful()
    {
        if(session('status'))
        {
            if (session()->get('order')) {
                $order = session()->get('order');
                $customer = OrderCustomer::findOrFail($order->customer_id);
                session()->forget(['order']);
                return view('pages.order-successful', compact('order','customer'));
            } else {
                return redirect('/web-shop/auftrag/auschecken');
            }
        }
        return redirect('/');
    }
















}
