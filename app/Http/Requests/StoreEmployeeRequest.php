<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'company_id' => 'required|exists:companies,id',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'The first name field is required.',
            'first_name.string' => 'The first name must be a valid string.',

            'last_name.required' => 'The last name field is required.',
            'last_name.string' => 'The last name must be a valid string.',

            'company_id.required' => 'The company field is required.',
            'company_id.exists' => 'The selected company does not exist.',

            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already in use by another employee.',

            'phone.string' => 'The phone number must be a valid string.',
        ];
    }
}
