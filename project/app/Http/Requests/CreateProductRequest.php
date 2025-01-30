<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ];
    }





    public function messages()
    {
        return [
            'name.required' => 'Product name is required.',
            'price.required' => 'Product price is required.',
            'image.required' => 'An image is required for the product.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a type of jpeg, png, jpg, gif, or svg.',
            'image.max' => 'The image must not be greater than 2MB.',
        ];
    }

}
