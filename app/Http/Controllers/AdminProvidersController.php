<?php

namespace App\Http\Controllers;

use App\Canton;
use App\CantonProviderGroup;
use App\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
}
