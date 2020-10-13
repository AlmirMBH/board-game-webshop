<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminProductsController extends Controller
{

    public function index()
    {
        $products = Product::latest()->get();
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
         $messages = [
             'required' => 'Dieses Feld ist forderlich',
             'file' => 'Dieses feld soll die Product Photo sein',
             'max' => 'Die Anzahl der Zeichen ist begrenzt',
             'regex' => 'Ungültige Eingabe',
             'numeric' => 'Nur Zahlen erlaubt'
         ];

         $request->validate([
             'name' => 'required|max:50',
             'short_description' => 'required|max:1000',
             'long_description' => 'required|max:2000',
             'price' => 'required|numeric',
             'quantity' => 'required|numeric',
         ], $messages);

        $name = $request->input('name');
        $short_description = $request->input('short_description');
        $long_description = $request->input('long_description');
        $string_price = $request->input('price');
        $price = floatval($string_price);
        $quantity = $request->input('quantity');

        $featured_image = $request->file('featured_image');
        $gallery = $request->file('gallery');

        if ($featured_image && $gallery){
            $image_name = $featured_image->getClientOriginalName();
            $featured_image->move('img/product/', time() . $image_name);

            $gallery_name = $gallery->getClientOriginalName();
            $gallery->move('img/product/',time() . $gallery_name);

            $product = Product::find($id);
            $product->name = $name;
            $product->short_description = $short_description;
            $product->long_description = $long_description;
            $product->price = $price;
            $product->quantity = $quantity;
            $product->featured_image = time() . $image_name;
            $product->gallery = time() . $gallery_name;

            $product->update();
            return redirect()->route('index-products');
        }
        elseif($featured_image){
            $image_name = $featured_image->getClientOriginalName();
            $featured_image->move('img/product/', time() . $image_name);

            $product = Product::find($id);
            $product->name = $name;
            $product->short_description = $short_description;
            $product->long_description = $long_description;
            $product->price = $price;
            $product->quantity = $quantity;
            $product->featured_image = time() . $image_name;

            $product->update();
            return redirect()->route('index-products');
        }
        elseif ($gallery){
            $gallery_name = $gallery->getClientOriginalName();
            $gallery->move('img/product/', time() . $gallery_name);

            $product = Product::find($id);
            $product->name = $name;
            $product->short_description = $short_description;
            $product->long_description = $long_description;
            $product->price = $price;
            $product->quantity = $quantity;
            $product->gallery = time() . $gallery_name;

            $product->update();
            return redirect()->route('index-products');
        }
        else{
            $product = Product::find($id);
            $product->name = $name;
            $product->short_description = $short_description;
            $product->long_description = $long_description;
            $product->price = $price;
            $product->quantity = $quantity;

            $product->update();
            return redirect()->route('index-products');
        }
    }


    public function store(Request $request)
    {
        $messages = [
            'required' => 'Dieses Feld ist forderlich',
            'file' => 'Dieses feld soll die Product Photo sein',
            'max' => 'Die Anzahl der Zeichen ist begrenzt',
            'regex' => 'Ungültige Eingabe',
            'numeric' => 'Nur Zahlen erlaubt'
        ];

        $request->validate([
            'name' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            'short_description' => 'required|max:1000',
            'long_description' => 'required|max:2000',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'featured_image' => 'required|file',
            'gallery' => 'required|file'
        ], $messages);

        $name = $request->input('name');
        $short_description = $request->input('short_description');
        $long_description = $request->input('long_description');
        $string_price = $request->input('price');
        $quantity = $request->input('quantity');

        $featured_image = $request->file('featured_image');
        $image_name = $featured_image->getClientOriginalName();
        $featured_image->move('img/product/', time() . $image_name);

        $gallery = $request->file('gallery');
        $gallery_name = $gallery->getClientOriginalName();
        $gallery->move('img/product/', time() . $gallery_name);

        $product = new Product();
        $product->name = $name;
        $product->short_description = $short_description;
        $product->long_description = $long_description;
        $product->price = floatval($string_price);
        $product->quantity = $quantity;
        $product->featured_image = time() . $image_name;
        $product->gallery = time() . $gallery_name;

        $product->save();
        return redirect()->route('index-products');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $image = public_path('img/product/' . $product->featured_image);
        if(File::exists($image)){
            File::delete($image);
        }
        $gallery = public_path('img/product/' . $product->gallery);
        if(File::exists($gallery)){
            File::delete($gallery);
        }
        $product->delete();
        return redirect()->route('index-products');
    }
}
