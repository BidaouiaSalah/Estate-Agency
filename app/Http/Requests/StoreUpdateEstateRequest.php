<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEstateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'postale_code' => 'max:5',
            'space' => 'required',
            'price' => 'required',
            'balconies' => 'nullable',
            'bedrooms' => 'nullable',
            'bathrooms' => 'nullable',
            'garages' => 'nullable',
            'parking_spaces' => 'nullable',
            'pets_allowed' => 'nullable',
            'available' => false,
            'assigned' => 'required',
            'assignment_date' => 'required',
        ];
    }
}
