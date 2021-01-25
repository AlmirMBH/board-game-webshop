<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50|regex:/^[\pL\0-9\s\-]+$/u',
            'short_description' => 'required|max:1000',
            'long_description' => 'required|max:2000',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Dieses Feld ist forderlich',
            'file' => 'Dieses feld soll die Product Photo sein',
            'max' => 'Die Anzahl der Zeichen ist begrenzt',
            'regex' => 'Ungültige Eingabe',
            'numeric' => 'Nur Zahlen erlaubt'
        ];
    }
}
