<?php

namespace App\Http\Controllers;

use App\ProductGallery;
use Illuminate\Http\Request;

class ProductGalleryController extends Controller
{
    public function index()
    {

        $images = ProductGallery::all();
        return view('admin.products.gallery', compact('images'));
    }


    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('img/product/'), $input['image']);

        $input['title'] = $request->title;
        ProductGallery::create($input);

        return back()
            ->with('success','Image uploaded successfully.');
    }


    public function destroy($id)
    {
        ProductGallery::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');
    }


}
