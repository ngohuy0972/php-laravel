<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class ProductValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Kiem tra quyen co login hay khong (true = khong can quyen, false = can quyen).
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
            //
            'idSP' => 'required | min:3 | max:20',
            'name_product' => 'required | min:5 | max:100',
            'quantity' => 'required | max:5',
            'categories' => 'required',
            'image' => 'required',
            'price' => 'required | max:20'

        ];
    }

    public function messages() {
        return [
            'idSP.required' => 'Please fill out this field',
            // 'idSP.unique' => 'This idSP is already exists',
            'idSP.min' => 'This field must be least 3 characters',
            'idSP.max' => 'This field cannot exceed 20 characters',
            'name_product.required' => 'Please fill out this field',
            'name_product.min' => 'This field must be least 5 characters',
            'name_product.max' => 'This field cannot exceed 100 characters',
            'quantity.required' => 'Please fill out this field',
            'quantity.max' => 'This field cannot exceed 5 characters',
            'categories.required' => 'Please fill out this field',
            'image.required' => 'Please fill out this field',
            'price.required' => 'Please fill out this field',
            'price.max' => 'This field cannot excced 20 characters'
        ];
    }
}