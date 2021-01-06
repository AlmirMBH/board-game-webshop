<?php

namespace App\Http\Controllers;


use App\Order;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PDFController extends Controller
{

    public function generatePdf($id)
    {
        $order = Order::where('id', $id)->firstOrFail();

        $data = [
            'order_id' => $order['order_id'],
            'orderProducts' => $order->orderProducts,
//            'name' => $order->products->name,
//            'short_description' => $order->products->short_description,
//            'price' => $order['price'],
//            'quantity' => $order['quantity'],
            'sub_total' => $order['sub_total'],
            'created_at' => $order['created_at']->format('d-m-Y'),
            'first_name' => $order->customer->first_name,
            'last_name' => $order->customer->last_name,
            'company' => $order->customer->company,
            'state' => $order->customer->state,
            'address' => $order->customer->address,
            'address2' => $order->customer->address2,
            'post_code' => $order->customer->post_code,
            'city' => $order->customer->city,
            'phone' => $order->customer->phone,
            'email' => $order->customer->email,
            'date' => Carbon::now()->format('d-m-Y'),
        ];

        $pdf = PDF::loadView('generate_pdf', $data);

        return $pdf->download($data['first_name'] . '_' . $data['last_name'] . '.pdf');
    }
}
