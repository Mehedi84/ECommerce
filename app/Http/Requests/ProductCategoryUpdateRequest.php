<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * ProductCategoryUpdateRequest
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */

class ProductCategoryUpdateRequest extends FormRequest
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
            'name' => [
                'required',
                'max:250',
                'string',
                Rule::unique('product_categories', 'name')->ignore($this->id, 'id')
            ]
        ];
    }
}