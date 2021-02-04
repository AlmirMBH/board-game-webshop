<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartControllerApi extends Controller
{
    public function orderNumber($session_id)
    {
        $allOrder = Cart::where('session_id', $session_id)->get();
        return response()->json($allOrder, Response::HTTP_OK);
    }

    public function deleteOrder($id, $session_id)
    {
        $order = Cart::where('id', $id)->first();
        $order->delete();
        $allOrders = Cart::where('session_id', $session_id)->get();
        $grandTotal = $this->grandTotal($allOrders);
        return response()->json([$allOrders, $grandTotal], Response::HTTP_OK);
    }

    public function listingCart($session_id)
    {
        $orders = Cart::where('session_id', $session_id)->get();
        $grandTotal = $this->grandTotal($orders);
        $currency = Order::$currency;
        $isCartEmpty = $this->isCartEmpty($orders);
        return response()->json([$orders, $grandTotal, $currency, $isCartEmpty], Response::HTTP_OK);
    }

    private function grandTotal($items)
    {
        $grandTotal = null;

        foreach ($items as $item) {
            $grandTotal += $item->item_sub_total;
        }

        return $grandTotal;
    }

    private function isCartEmpty($items): bool
    {
        return $items ? true : false;
    }
}
