<?php

namespace App\Http\Controllers;

use App\Outlets;
use Illuminate\Http\Request;

class AdminOutletsController extends Controller
{
    public function index()
    {
        $outlets = Outlets::all();
        return view('admin.outlets.index', compact('outlets'));
    }
}
