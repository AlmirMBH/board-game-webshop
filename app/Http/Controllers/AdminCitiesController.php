<?php

namespace App\Http\Controllers;

use App\Canton;
use App\City;
use App\Helpers\UserHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCitiesController extends Controller
{
    private $isAvailable;

    public function __construct(Request $request)
    {
        $this->isAvailable = UserHelper::isAvailableProperty($request['is_available']);
    }

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

        $this->createCity($input);

        Session::flash('create_city', $input['name'] . ' Created Successfully');
        return redirect('/admin/cities');
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $input['is_available'] = $this->isAvailable;

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
     */
    private function createCity(array $input): void
    {
        City::create([
            'name' => $input['name'],
            'is_available' => $this->isAvailable,
            'canton_id' => $input['canton_id'],
        ]);
    }
}
