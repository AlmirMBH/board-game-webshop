<?php

namespace App\Http\Controllers;

use App\City;
use App\ParticipatingCompanies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AdminPartCompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partcompanies = ParticipatingCompanies::all();

        return view('admin.partcompanies.index', compact('partcompanies'));
    }

    public function create(){
        $cities = City::orderBy('name')->pluck('name', 'id');

        return view('admin.partcompanies.create', compact('cities'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $this->createPartCompanies($input);

        Session::flash('create_partComp', $input['name'] . ' Created Successfully');
        return redirect()->route('index-partcompanies');
    }

    public function destroy($id)
    {
        $partcompanies = ParticipatingCompanies::findOrFail($id);
        $partcompanies->delete();

        return redirect()->route('index-partcompanies');
    }


    public function edit($id)
    {
        $partcompanies = ParticipatingCompanies::findOrFail($id);
        $cities = City::orderBy('name')->pluck('name', 'id');

        return view('admin.partcompanies.edit', compact('partcompanies', 'cities'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $partcompanies = ParticipatingCompanies::findOrFail($id);
        $partcompanies->update($input);

        Session::flash('update_partcompanies', 'Update was successful');
        return redirect()->route('index-partcompanies');
    }

    /**
     * @param array $input
     */
    private function createPartCompanies(array $input): void
    {
        $phone = $input['phone'];

        $https = Str::contains($phone, 'https://');
        $http = Str::contains($phone, 'http://');

        if($http){
            $phone = Str::replaceFirst('http://', '', $phone);
        }elseif($https){
            $phone = Str::replaceFirst('https://', '', $phone);
        }

        ParticipatingCompanies::create([
            'name' => $input['name'],
            'address' => $input['address'],
            'phone' => $phone,
            'email' => $input['email'],
            'city_id' => $input['city_id'],
            'slug' => Str::slug($input['name']),
        ]);
    }


}
