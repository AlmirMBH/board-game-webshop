<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminOrdersController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $currentDate = Carbon::now()->format('d-m-Y');
        $order = Order::where('id', $id)->first();

        return view('admin.orders.show', compact('order', 'currentDate'));
    }
}
