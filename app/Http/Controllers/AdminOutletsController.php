<?php

namespace App\Http\Controllers;

use App\City;
use App\Outlets;
use App\Helpers\UserHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AdminOutletsController extends Controller
{
    private $isAvailable;

    public function __construct(Request $request)
    {
        $this->isAvailable = UserHelper::isAvailableProperty($request['is_availability']);
    }

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
        $input['is_availability'] = $this->isAvailable;

        $outlets = Outlets::findOrFail($id);
        $outlets->update($input);

        Session::flash('update_outlets', 'Update was successful');
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $this->createOutlets($input);

        Session::flash('create_outlets', $input['name'] . ' Created Successfully');
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
     */
    private function createOutlets(array $input): void
    {
        Outlets::create([
            'name' => $input['name'],
            'address' => $input['address'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'city_id' => $input['city_id'],
            'slug' => Str::slug($input['name']),
            'is_availability' => $this->isAvailable,
        ]);
    }
}
