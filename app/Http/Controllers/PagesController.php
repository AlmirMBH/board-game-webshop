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

  public function list_lizenznehmer()
  {
    $cantons = Canton::all();
    return view('list-lizenznehmer', compact('cantons'));
  }

  public function get_provider($slug)
  {
    $provider = Provider::where('slug', $slug)->firstOrFail();
    return view('provider', compact('provider'));
  }

  public function get_place($slug)
  {
    $place = Outlets::where('slug', $slug)->firstOrFail();
    return view('point-of-sale-details', compact('place'));
  }

  public function outlets()
  {
    $cantons = Canton::all();
    return view('outlets', compact('cantons'));
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

