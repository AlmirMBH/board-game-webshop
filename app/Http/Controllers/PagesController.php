<?php

namespace App\Http\Controllers;

use App\Canton;
use App\Http\Requests\ContactFormRequest;
use App\Order;
use App\OrderCustomer;
use App\Outlets;
use App\Product;
use App\Provider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{

    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function webShop()
    {
        $product = Product::where('name', 'GEWERBE-SPIEL')->first();
        return view('pages.web-shop', compact('product'));
    }

    public function order()
    {
        $product = Product::where('name', 'GEWERBE-SPIEL')->first();
        return view('pages.order', compact('product'));
    }

    public function confirmOrder(Request $request)
    {
        $subTotal = number_format($request['price'] * $request['quantity'], 2);

        $randomNumLet = $this->generateOrderId();

        $order = Order::create([
            'order_id' => $randomNumLet,
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'sub_total' => $subTotal
        ]);

        session()->put('order', $order);
        session()->put('productName', $request['name']);
        session()->save();

        return redirect()->route('checkout');
    }

    public function checkout()
    {
        if (session()->get('order')) {
            $order = session()->get('order');
            $productName = session()->get('productName');
            return view('pages.checkout', compact('order', 'productName'));
        } else {
            return redirect('/web-shop/auftrag');
        }
    }

    public function confirmCheckout(Request $request)
    {
        $input = $request->all();
        OrderCustomer::create($input);

        $sessionOrder = $request->session()->get('order');

        $sessionData = [
            'order_id' => $sessionOrder['order_id'],
            'price' => $sessionOrder['price'],
            'quantity' => $sessionOrder['quantity'],
            'sub_total' => $sessionOrder['sub_total'],
            'created_at' => $sessionOrder['created_at']->format('Y.m.d H:i:s'),
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'address' => $request['address'],
            'company' => $request['company'],
            'state' => $request['state'],
            'address2' => $request['address2'],
            'post_code' => $request['post_code'],
            'city' => $request['city'],
            'phone' => $request['phone'],
            'email' => $request['email']
        ];

        Mail::send('order-email', ['sessionData' => $sessionData], function($message) use ($sessionData) {
            $message->to('your@email.com')->subject('subject');
        });

        session()->forget(['order', 'productName']);
        return redirect()->route('order-successful')->with('status', 'order_successful');
    }

    public function orderSuccessful()
    {
        if(session('status'))
        {
            return view('pages.order-successful');
        }

        return redirect('/');
    }

    public function licensee()
    {

        return view('pages.licensee');
    }

    public function participatingCompanies()
    {
        return view('pages.participating-companies');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function licenseeList()
    {
        $cantons = Canton::all();
        return view('licensee.list', compact('cantons'));
    }

    public function licenseeDetails($slug)
    {
        $provider = Provider::where('slug', $slug)->firstOrFail();
        return view('licensee.details', compact('provider'));
    }

    public function outletDetails($slug)
    {
        $place = Outlets::where('slug', $slug)->firstOrFail();
        return view('outlet.details', compact('place'));
    }

    public function outletsList()
    {
        $cantons = Canton::all();
        return view('outlet.list', compact('cantons'));
    }

    public function send_contact(ContactFormRequest $request)
    {
        $data = $request->validated();
        try {
            Mail::send('email', $data, function($message) use ($data) {
                $message->to('verkauf@rueegg-management.ch')->subject($data['email']);
            });
            return redirect()->back()->with('success', 'Danke für deine Nachricht. Es wurde gesendet.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Beim Versuch, Ihre Nachricht zu senden, ist ein Fehler aufgetreten. Bitte versuchen Sie es später noch einmal.');
        }
    }

    /**
     * @return string
     */
    public function generateOrderId(): string
    {
        $randomLetter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5);
        $randomNumber = substr(str_shuffle("0123456789"), 0, 5);
        $randomNumLet = $randomLetter . '-' . $randomNumber;

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

