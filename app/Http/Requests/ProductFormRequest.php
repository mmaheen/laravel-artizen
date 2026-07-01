<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
                // 'unique:products,name',
            ],

            'description' => [
                'required',
                'string',
                // 'min:10',
                'max:2000',
            ],

            'price' => [
                'required',
                'numeric',
                'min:0.01',
            ],

            'currency' => [
                'required',
                'string',
                'in:£,€,$,৳'
            ],

            'stock' => [
                'required',
                'integer',
                'min:0',
            ],

            'image' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                // 'max:2048', 
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Product title is required.',
            'name.unique' => 'This product title already exists.',

            'description.required' => 'Product description is required.',

            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be a valid number.',
            'price.min' => 'Price must be greater than 0.',

            'currency.in' => 'Please select a valid currency.',
            'currency.required' => 'Currency is required.',

            'stock.required' => 'Stock is required.',
            'stock.integer' => 'Stock must be a whole number.',
            'stock.min' => 'Stock cannot be negative.',

            'image.required' => 'Please upload a product image.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'Image must be a JPG, JPEG, PNG, or WEBP file.',
            'image.max' => 'Image size cannot exceed 2 MB.',
        ];
    }

}
