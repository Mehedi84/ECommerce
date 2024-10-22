<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * ProductBrandController
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */

class CouponUpdateRequest extends FormRequest
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
                Rule::unique('coupons', 'name')->ignore($this->id, 'id')
            ]
        ];
    }
}
