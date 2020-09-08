<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class AdminCitiesController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('admin.cities.index', compact('cities'));
    }
}
