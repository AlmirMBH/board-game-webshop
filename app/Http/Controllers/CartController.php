<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $items = Cart::where('session_id', $request->session()->getId())->get();

        $grandTotal = null;
        $quantity = null;
        $subtotal = null;

        foreach ($items as $item) {
            $quantity += $item->item_quantity;
            $subtotal += $item->item_sub_total;
        }

        if ($quantity < 3) {
            $grandTotal = $subtotal + 7;
        } else {
            $grandTotal = $subtotal;
        }

        $cartQuantity = $this->getCartQuantity($items);
        //$grandTotal = $this->grandTotal($items);
        $currency = Order::$currency;
        $isCartEmpty = $this->isCartEmpty($items);
        return view('cart.index', compact('items', 'grandTotal', 'currency', 'isCartEmpty', 'cartQuantity', 'subtotal'));
    }


    public function getCartQuantity($items) {
        $quantity = null;

        foreach ($items as $item) {
            $quantity += $item->item_quantity;
        }

        return $quantity;
    }



    public function store(Product $product, Request $request)
    {
        Cart::create([
            'session_id' => $request->session()->getId(),
            'product_id' => $product->id,
            'item_image' => $product->featured_image,
            'item_name' => $product->name,
            'item_price' => $product->price,
            'item_quantity' => $request->get('quantity'),
            'item_sub_total' => $this->subtotal($product->price, $request->get('quantity')),
        ]);

        return back()->with('status', $request->get('quantity') . 'x ' . $product->name . ' wurden Ihrem Warenkorb hinzugefügt.');
    }

    public function grandTotal($items)
    {
        $grandTotal = null;

        foreach ($items as $item) {
            $grandTotal += $item->item_sub_total;
        }

        return $grandTotal;
    }

    private function subtotal($price, $quantity)
    {
        return $price * $quantity;
    }

    private function isCartEmpty($items): bool
    {
        return $items ? true : false;
    }
}
