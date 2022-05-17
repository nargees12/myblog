<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required',
            ];
    }
    public function attributes()
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Enter your email address',
            'email.email' => 'Enter the valid email',
            'password.required' => 'Enter your password ',
        ];
    }

}