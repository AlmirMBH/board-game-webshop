<?php

namespace App\Http\Controllers;

use App\Canton;
use App\Http\Requests\ContactFormRequest;
use App\Outlets;
use App\ParticipatingCompanies;
use App\Product;
use App\Provider;
use App\Slider;
use App\VisitCounter;
use Exception;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function home()
    {
        $newSession = request()->session()->getId();
        $dbSession = VisitCounter::where('session_id', $newSession)->first();

        if($dbSession == null){
            $visit = new VisitCounter();
            $visit->session_id = $newSession;
            $visit->IP = request()->server('REMOTE_ADDR');
            $visit->country = "";
            $visit->city = "";
            $visit->visited_page = request()->server('REQUEST_URI');
            $visit->views = 1;
            $visit->save();
        }

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

