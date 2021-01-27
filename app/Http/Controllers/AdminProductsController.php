<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
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


    public function store(ProductRequest $request)
    {
        $input = $request->except('gallery');

        $featured_image = $request->file('featured_image');
        $image_name = $featured_image->getClientOriginalName();
        $featured_image->move('img/product/', time() . $image_name);

        $input['featured_image'] = time() . $image_name;
        $input['price'] = floatval($request['price']);
        $product = Product::create($input);

        $this->uploadGalleryIfExists($request, $product);

        return redirect()->route('index-products');
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }


    public function update(ProductUpdateRequest $request, $id)
    {
        $input = $request->except('gallery');

        if (isset($request['featured_image'])) {
            $featured_image = $request->file('featured_image');
            $image_name = $featured_image->getClientOriginalName();
            $featured_image->move('img/product/', time() . $image_name);
            $input['featured_image'] = time() . $image_name;
        }

        $input['price'] = floatval($request['price']);
        $product = Product::findOrFail($id);
        $product->update($input);

        $this->uploadGalleryIfExists($request, $product);

        return redirect()->route('index-products');
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

    /**
     * @param Request $request
     * @param $product
     */
    private function uploadGalleryIfExists(Request $request, $product): void
    {
        $files = $request->file('gallery');
        if ($request->hasFile('gallery')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('img/product/', time() . $name);
                ProductGallery::create(['image' => time() . $name, 'product_id' => $product->id]);
            }
        }
    }
}
