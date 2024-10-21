<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * UsersStoreRequest
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */

class UsersStoreRequest extends FormRequest
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
            'code' => ['required', 'max:20', 'string', 'unique:users'],
            'name' => ['required', 'max:255', 'string'],
            'email' => ['required', 'max:255', 'string', 'unique:users'],
            'mobile' => ['required', 'max:20', 'string', 'unique:users'],
            'password' => ['required', 'max:255', 'min:8'],
        ];
    }
}