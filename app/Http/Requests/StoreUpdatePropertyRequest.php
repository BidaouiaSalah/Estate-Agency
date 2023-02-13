<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePropertyRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:properties|max:255',
            'description' => 'required',
            'address' => 'required',
            'postale_code' => 'required|min:4|max:5',
            'city' => 'required',
            'space' => 'required',
            'price' => 'required',
            'balconies' => 'nullable',
            'bedrooms' => 'nullable',
            'bathrooms' => 'nullable',
            'garages' => 'nullable',
            'parking_spaces' => 'nullable',
            'pets_allowed' => 'nullable',
            'available' => 'nullable',
            'user_id'=> 'nullable',
            'transaction_type'=> 'required',
            'type_id'=> 'required',
            'amenities'=> 'required'
        ];
    }
}
