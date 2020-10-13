<?php

namespace App\Http\Controllers;

use App\Canton;
use App\City;
use App\Outlets;
use App\ParticipatingCompanies;
use App\Provider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PagesControllerApi extends Controller
{
    public function listCities($id)
    {
        $cities = City::where('canton_id', $id)->get();
        return response()->json($cities, Response::HTTP_OK);
    }

    public function listProviders($id)
    {
        $providers = Canton::find($id)->providers()->get();
        return response()->json($providers, Response::HTTP_OK);
    }

    public function listOutlets($id)
    {
        $outlets = Outlets::where('city_id', $id)
            ->where('is_availability', true)
            ->get();
        return response()->json($outlets, Response::HTTP_OK);
    }

    public function listPartCompanies($id){
        $partcompanies = ParticipatingCompanies::where('city_id', $id)->get();
        return response()->json($partcompanies, response::HTTP_OK);

    }
}
