<?php

namespace App\Http\Controllers;

use App\Product;
//use App\ProductGallery;
use App\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

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


    public function store(Request $request)
    {
        //$file = $request->file('file');


        $messages = [
            'required' => 'Dieses Feld ist forderlich',
            'file' => 'Dieses feld soll die Product Photo sein',
            'max' => 'Die Anzahl der Zeichen ist begrenzt',
            'regex' => 'Ungültige Eingabe',
            'numeric' => 'Nur Zahlen erlaubt'
        ];

        $request->validate([
            'name' => 'required|max:50|regex:/^[\pL\0-9\s\-]+$/u',
            'short_description' => 'required|max:1000',
            'long_description' => 'required|max:2000',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'featured_image' => 'required|file',
            'gallery.*' => 'required|file'
        ], $messages);

        $name = $request->input('name');
        $short_description = $request->input('short_description');
        $long_description = $request->input('long_description');
        $string_price = $request->input('price');
        $quantity = $request->input('quantity');

        $featured_image = $request->file('featured_image');
        $image_name = $featured_image->getClientOriginalName();
        $featured_image->move('img/product/', time() . $image_name);

        $product = new Product();
        $product->name = $name;
        $product->short_description = $short_description;
        $product->long_description = $long_description;
        $product->price = floatval($string_price);
        $product->quantity = $quantity;
        $product->featured_image = time() . $image_name;
        $product->save();

        $files = $request->file('gallery');
        if($request->hasFile('gallery')) {
            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('img/product/', time() . $name);
                ProductGallery::create(['image'=> time() . $name, 'product_id' => $product->id ]);
            }
        }
        return redirect()->route('index-products');
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
             'name' => 'required|max:50|regex:/^[\pL\0-9\s\-]+$/u',
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
        $gallery_images = $request->file('gallery');

        if($featured_image && $gallery_images){
            $product = Product::find($id);
            $product->name = $name;
            $product->short_description = $short_description;
            $product->long_description = $long_description;
            $product->price = $price;
            $product->quantity = $quantity;
            $image_name = $featured_image->getClientOriginalName();
            $featured_image->move('img/product/', time() . $image_name);
            $product->featured_image = time() . $image_name;

            foreach($gallery_images as $image) {
                $name = $image->getClientOriginalName();
                $image->move('img/product/', time() . $name);
                ProductGallery::create(['image'=> time() . $name, 'product_id' => $product->id ]);
            }
            $product->update();
            return redirect()->route('index-products');
        }
        elseif ($featured_image){
            $product = Product::find($id);
            $product->name = $name;
            $product->short_description = $short_description;
            $product->long_description = $long_description;
            $product->price = $price;
            $product->quantity = $quantity;
            $image_name = $featured_image->getClientOriginalName();
            $featured_image->move('img/product/', time() . $image_name);
            $product->featured_image = time() . $image_name;
            $product->update();
            return redirect()->route('index-products');
        }
        elseif($gallery_images){
            $product = Product::find($id);
            $product->name = $name;
            $product->short_description = $short_description;
            $product->long_description = $long_description;
            $product->price = $price;
            $product->quantity = $quantity;

            foreach($gallery_images as $image) {
                $name = $image->getClientOriginalName();
                $image->move('img/product/', time() . $name);
                ProductGallery::create(['image'=> time() . $name, 'product_id' => $product->id ]);
            }
            $product->update();
            return redirect()->route('index-products');
        }else{
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


    public function destroy($id)
    {
        $product = Product::find($id);
        $image = public_path('img/product/' . $product->featured_image);
        if(File::exists($image)){
            File::delete($image);
        }

        $galleries = ProductGallery::where('product_id', $id)->get();
        foreach ($galleries as $item){
        $gallery = public_path('img/product/' . $item->image);
            if(File::exists($gallery)){
                File::delete($gallery);
                $item->delete();
            }
        }

        $product->delete();
        return redirect()->route('index-products');
    }
}
