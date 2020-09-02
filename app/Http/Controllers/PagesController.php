<?php

namespace App\Http\Controllers;

use App\Canton;
use App\Outlets;
use App\Provider;
use Illuminate\Http\Request;

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

    public function outletsList()
    {
        $cantons = Canton::all();
        return view('outlet.list', compact('cantons'));
    }

}

