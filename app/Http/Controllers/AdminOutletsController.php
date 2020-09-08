<?php

namespace App\Http\Controllers;

use App\City;
use App\Outlets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $input = $this->isAvailable($input);
        $outlets = Outlets::findOrFail($id);
        $outlets->update($input);
        Session::flash('update_outlets', 'Update was successful');
        return redirect()->back();
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

    public function destroy($id)
    {
        $outlets = Outlets::findOrFail($id);
        $outlets->delete();
        return redirect('/admin/outlets');
    }

    /**
     * @param array $input
     * @return array
     */
    public function isAvailable(array $input): array
    {
        if (isset($input['is_availability'])) {
            $input['is_availability'] = true;
        } else {
            $input['is_availability'] = false;
        }
        return $input;
    }
}
