<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * ProductChildCategoryUpdateRequest
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */

class ProductChildCategoryUpdateRequest extends FormRequest
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
            'name' => ['required'],
            'product_sub_categories_id' => ['required'],
        ];
    }
}