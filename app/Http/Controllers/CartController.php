<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Product $product, Request $request)
    {
        Cart::create([
            'session_id'    => $request->session()->getId(),
            'product_id'    => $product->id,
            'item_image'    => $product->featured_image,
            'item_name'     => $product->name,
            'item_price'    => $product->price,
            'item_quantity' => $request->get('quantity'),
            'item_sub_total' => $this->subtotal($product->price, $request->get('quantity')),
        ]);

        return back()->with('status', $request->get('quantity') . 'x ' . $product->name . ' wurden Ihrem Warenkorb hinzugefügt.');
    }

    private function subtotal($price, $quantity)
    {
        return $price * $quantity;
    }
}
