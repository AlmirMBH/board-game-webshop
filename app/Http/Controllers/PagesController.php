<?php

namespace App\Http\Controllers;

use App\Canton;
use App\Http\Requests\ContactFormRequest;
use App\Order;
use App\OrderCustomer;
use App\Outlets;
use App\ParticipatingCompanies;
use App\Product;
use App\Provider;
use App\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{

    public function home()
    {
        $products = Product::all();
        $sliders = Slider::all();
        return view('index', compact('products', 'sliders'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function licensee()
    {

        return view('pages.licensee');
    }

    public function participatingCompanies()
    {
        return view('pages.participating-companies');
    }

    public function participatingCompaniesList()
    {
        $cantons = Canton::all();
        return view('partcompanies.list', compact('cantons'));
    }

    public function participatingCompaniesDetails($slug){
        $partcompanies = ParticipatingCompanies::where('slug', $slug)->firstOrFail();
        return view('partcompanies.details', compact('partcompanies'));
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

}

