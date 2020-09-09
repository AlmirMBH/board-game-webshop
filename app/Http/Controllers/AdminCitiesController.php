<?php

namespace App\Http\Controllers;

use App\Canton;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCitiesController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('admin.cities.index', compact('cities'));
    }

    public function create()
    {
        $cantons = Canton::orderBy('name')->pluck('name', 'id');
        return view('admin.cities.create', compact('cantons'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if (isset($input['is_available'])) {
            $state = true;
        } else {
            $state = false;
        }

        City::create([
            'name' => $input['name'],
            'is_available' => $state,
            'canton_id' => $input['canton_id'],
        ]);

        return redirect('/admin/cities');
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $input = $this->isAvailable($input);
        $city = City::findOrFail($id);
        $city->update($input);
        Session::flash('update_city', 'Update was successful');
        return redirect()->back();
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        $cantons = Canton::orderBy('name')->pluck('name', 'id');
        return view('admin.cities.edit', compact('cantons', 'city'));
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return redirect('/admin/cities');
    }

    /**
     * @param array $input
     * @return array
     */
    public function isAvailable(array $input): array
    {
        if (isset($input['is_available'])) {
            $input['is_available'] = true;
        } else {
            $input['is_available'] = false;
        }
        return $input;
    }
}
