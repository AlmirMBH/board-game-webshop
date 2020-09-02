<?php

namespace App\Http\Controllers;

use App\Canton;
use App\Outlets;
use App\Provider;
use Illuminate\Http\Request;
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
        return view('pages.web-shop');
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

    public function outlets()
    {
        $cantons = Canton::all();
        return view('pages.outlets', compact('cantons'));
    }

    public function send_contact(Request $request)
    {
        $data = $request->all();

        Mail::send('email', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name'])->subject($data['email']);
        });

        //Session::flash('form_submitted', 'Form is sent!');
        return redirect()->back();
    }

}

