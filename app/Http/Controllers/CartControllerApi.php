<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartControllerApi extends Controller
{
    public function orderNumber($session_id)
    {
        $allOrder = Cart::where('session_id', $session_id)->get();
        return response()->json($allOrder, Response::HTTP_OK);
    }

    public function deleteOrder($id)
    {
        $order = Cart::where('id', $id)->first();
        $order->delete();
        return response()->json($order, Response::HTTP_OK);
    }
}
