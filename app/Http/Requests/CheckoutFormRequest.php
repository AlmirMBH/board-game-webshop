<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutFormRequest extends FormRequest
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
            'first_name' => 'required', // allows (German) letters and spaces
            'last_name' => 'required',
            'company' => 'required',  // allows (German) letters, numbers and spaces
            'state' => 'required',
            'address' => 'required',
            'post_code' => 'required|numeric',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required'      => 'Name ist erforderlich!',
            'last_name.required'     => 'E-Mail ist erforderlich!',
            'company.required'   => 'Unternehmen ist erforderlich!',
            'state.required'   => 'Kanton ist erforderlich!',
            'address.required'   => 'Adresse ist erforderlich!',
            'post_code.required'   => 'Postleitzahl ist erforderlich!',
            'post_code.numeric'   => 'Nur Zahlen erlaubt!',
            'city.required'   => 'Stadt ist erforderlich!',
            'phone.required'   => 'Telefon ist erforderlich!',
            'email.required'   => 'E-Mail ist erforderlich!',
            'email.email'   => 'Falsches E-Mail Format!',
        ];
    }
}
