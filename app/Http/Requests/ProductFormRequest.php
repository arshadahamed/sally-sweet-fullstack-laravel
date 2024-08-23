<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'name' => 'required','integer',
            'slug' => 'required','string','max:225',
            'description' => 'required','string',
            'small_decription' => 'nullable','string',
            'original_price' => 'required','integer',
            'selling_price' => 'required','integer',
            'category_id' => 'required', 'integer',
            'brand' => 'required','string','max:225',
            'quantity' => 'required','integer',
            'trending' => 'nullable',
            'status' => 'nullable',
            'meta_title' => 'required','string','max:225',
            'meta_description' => 'required','string',
            'meta_keyword' => 'required','string',

            'image' => [
                'nullable',
                // 'image|mimes:png,jpg,jpeg,gif'
            ],

        ];
    }
}
