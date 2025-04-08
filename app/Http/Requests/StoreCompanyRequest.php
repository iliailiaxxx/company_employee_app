<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
        $companyId = $this->route('company')->id;

        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:companies,email,' . $companyId,
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:min_width=100,min_height=100',
            'website' => 'nullable|url',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The company name is required.',
            'name.string' => 'The name must be a valid string.',

            'email.email' => 'Please enter a valid email address.',

            'logo.image' => 'The logo must be an image file.',

            'website.url' => 'Please provide a valid URL for the website.',
        ];
    }
}
