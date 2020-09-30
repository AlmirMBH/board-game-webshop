<?php

namespace App\Http\Controllers;

use App\City;
use App\Outlets;
use App\Product;
use App\Provider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $providers = Provider::all()->count();
        $outlets = Outlets::all()->count();
        $cities = City::all()->count();
        $products = Product::all()->count();

        return view('admin.dashboard', compact('providers', 'outlets', 'cities', 'products'));
    }
}
