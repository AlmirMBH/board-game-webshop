<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{

  public function home(){
    return view('index');
  }


   public function uber_uns(){
     return view('uber-uns');
   }

  public function web_shop(){
    return view('web-shop');
  }

  public function lizenznehmer(){
    return view('lizenznehmer');
  }

  public function betriebe(){
    return view('teilnehmende-betriebe');
  }

  public function kontakt(){
     return view('kontakt');
  }

}

