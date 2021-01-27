<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminSliderController extends Controller
{
    public function index()
    {
        $sliderImages = Slider::all();
        return view('admin.slider.index', compact('sliderImages'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => 'Dieses Feld ist forderlich',
            'image' => 'Dieses feld soll die Slider Photo sein',
            'max' => 'Die Anzahl der Zeichen ist begrenzt',
        ];

        $request->validate([
            'image' => 'required|image',
            'description' => 'max:255'
        ], $messages);

        $description = $request->input('description');
        $image = $request->file('image');
        $imageOriginalName = $image->getClientOriginalName();
        $image->move('img/slider/', time() . $imageOriginalName);

        $slider = new Slider();
        $slider->image = time() . $imageOriginalName;
        if ( !empty($description) ) {
            $slider->description = $description;
        }
        $slider->save();

        return redirect()->route('slider-all')->with('success', 'Slider-Bild erfolgreich hochgeladen');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $sliderImage = public_path('/img/slider/' . $slider->image);

        if (File::exists($sliderImage)) {
            File::delete($sliderImage);
        }

        $slider->delete();
        return redirect()->route('slider-all')->with('success', 'Slider-Bild erfolgreich gelöscht');
    }
}
