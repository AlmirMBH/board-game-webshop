<?php

namespace App\Http\Controllers;

use App\Canton;
use App\Provider;
use App\CantonProviderGroup;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminProvidersController extends Controller
{
    public function index()
    {
        $providers = Provider::all();
        return view('admin.providers.index', compact('providers'));
    }

    public function create()
    {
        $cantons = Canton::all();
        return view('admin.providers.create', compact('cantons'));
    }

    public function edit($id)
    {
        $provider = Provider::findOrFail($id);
        $cantons = Canton::all();

        return view('admin.providers.edit', compact('provider', 'cantons'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->except('canton_id');
        $provider = Provider::findOrFail($id);

        if ($request['canton_id'] > 0) {
            CantonProviderGroup::where('provider_id', $provider->id)->delete();
            foreach($request['canton_id'] as $cantonId) {
                CantonProviderGroup::create([
                    'canton_id' => $cantonId,
                    'provider_id' => $provider->id,
                ]);
            }
        } else {
            CantonProviderGroup::where('provider_id', $provider->id)->delete();
        }

        $provider->update($input);
        Session::flash('update_providers', 'Update was successful');
        return redirect()->back();
    }

    public function store(Request $request)
    {

        $input = $request->except('canton_id');
        $input['slug'] = Str::slug($input['company']);
        $provider = Provider::create($input);

        if ($request['canton_id'] > 0) {
            foreach($request['canton_id'] as $cantonId) {
                CantonProviderGroup::create([
                    'canton_id' => $cantonId,
                    'provider_id' => $provider->id,
                ]);
            }
        }

        return redirect('/admin/providers');
    }

    public function destroy($id)
    {
        $provider = Provider::findOrFail($id);
        CantonProviderGroup::where('provider_id', $provider->id)->delete();
        $provider->delete();
        return redirect('/admin/providers');
    }

}
