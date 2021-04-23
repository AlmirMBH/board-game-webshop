<?php

namespace App\Http\Controllers;

use App\City;
use App\Order;
use App\Outlets;
use App\ParticipatingCompanies;
use App\Product;
use App\Provider;
use App\VisitCounter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $providers = Provider::all()->count();
        $outlets = Outlets::all()->count();
        $cities = City::all()->count();
        $products = Product::all()->count();
        $partcompanies = ParticipatingCompanies::all()->count();
        $orders = Order::all()->count();
        $visits = VisitCounter::all()->count();

//        $visits = DB::table('visit_counters')->distinct()->count('session_id');
        return view('admin.dashboard', compact('providers', 'outlets', 'cities', 'products', 'partcompanies', 'orders', 'visits'));
    }
}
