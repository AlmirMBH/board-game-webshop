<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class AdminProductsController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }


    public function create()
    {
        return view('admin.products.create');
    }



    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $string_regular_price = $request->input('regular_price');
        $regular_price = floatval($string_regular_price);
        $string_discount_price = $request->input('discount_price');
        $discount_price = floatval($string_discount_price);
        $quantity = $request->input('quantity');

        $product = Product::find($id);

        $product->name = $name;
        $product->description = $description;
        $product->regular_price = $regular_price;
        $product->discount_price = $discount_price;
        $product->quantity = $quantity;

        $product->update();

        return redirect()->route('index-products');
    }


    public function store(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $string_regular_price = $request->input('regular_price');
        $string_discount_price = $request->input('discount_price');
        $quantity = $request->input('quantity');

        $product = new Product();

        $product->name = $name;
        $product->description = $description;
        $regular_price = floatval($string_regular_price);
        $product->regular_price = $regular_price;
        $discount_price = floatval($string_discount_price);
        $product->discount_price = $discount_price;
        $product->quantity = $quantity;

        $product->save();
        return redirect()->route('index-products');
    }


    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('index-products');
    }
}
