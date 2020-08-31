<?php

namespace App\Http\Controllers;

use App\Canton;
use App\City;
use App\Outlets;
use App\Provider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PagesControllerApi extends Controller
{
    public function list_cities($id)
    {
      $cities = City::where('canton_id', $id)->get();
      return response()->json($cities, Response::HTTP_OK);
    }

    public function list_providers($id)
    {
      $providers = Provider::where('city_id', $id)->get();
      return response()->json($providers, Response::HTTP_OK);
    }

    public function list_outlets($id)
    {
      $outlets = Outlets::where('city_id', $id)
        ->where('is_availability', true)
        ->get();
      return response()->json($outlets, Response::HTTP_OK);
    }
}
