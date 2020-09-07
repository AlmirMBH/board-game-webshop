<?php

namespace App\Http\Controllers;

use App\City;
use App\Outlets;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminOutletsController extends Controller
{
    public function index()
    {
        $outlets = Outlets::all();
        return view('admin.outlets.index', compact('outlets'));
    }

    public function create()
    {
        $cities = City::orderBy('name')->pluck('name', 'id');
        return view('admin.outlets.create', compact('cities'));
    }

    public function edit($id)
    {
        $outlets = Outlets::findOrFail($id);
        $cities = City::orderBy('name')->pluck('name', 'id');
        return view('admin.outlets.edit', compact('outlets', 'cities'));
    }

    public function update()
    {

    }

    public function store(Request $request)
    {
        $input = $request->all();

        if(isset($input['is_availability'])) {
            $state = true;
        } else {
            $state = false;
        }

        Outlets::create([
            'name' => $input['name'],
            'address' => $input['address'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'city_id' => $input['city_id'],
            'slug' => Str::slug($input['name']),
            'is_availability' => $state,
        ]);

        return redirect('/admin/outlets');
    }
}
