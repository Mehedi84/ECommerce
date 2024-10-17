<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UsersUpdateRequest extends FormRequest
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
        // return [
        //     'code' => 'required|max:20|string|' . Rule::unique('users', 'code')->ignore($this->id, 'id'),
        //     'name' => ['required', 'max:255', 'string'],
        //     'email' => 'required|max:255|string|' . Rule::unique('users', 'email')->ignore($this->id, 'id'),
        //     'mobile' => 'required|max:20|string|' . Rule::unique('users', 'mobile')->ignore($this->id, 'id'),
        // ];

        return [
            'code' => [
                'required',
                'max:20',
                'string',
                Rule::unique('users', 'code')->ignore($this->id, 'id')
            ],
            'name' => [
                'required',
                'max:255',
                'string'
            ],
            'email' => [
                'required',
                'max:255',
                'string',
                Rule::unique('users', 'email')->ignore($this->id, 'id')
            ],
            'mobile' => [
                'required',
                'max:20',
                'string',
                Rule::unique('users', 'mobile')->ignore($this->id, 'id')
            ],
        ];
    }
}
