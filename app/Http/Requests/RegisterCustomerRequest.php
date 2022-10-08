<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCustomerRequest extends FormRequest
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
            'username' => 'required|min:6|unique:customers',
            'password' => 'required|min:8|max:64',
            'firstName'=> 'required|max:50',
            'lastName' => 'required|max:50',
            'email'    => 'required|max:254|email|unique:customers'
        ];
    }
}
