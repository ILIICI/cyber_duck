<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeValidation extends FormRequest
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
            'firstname' => 'required|regex:/^[a-zA-Z]+$/u',
            'lastname' => 'required|regex:/^[a-zA-Z]+$/u',
            'email' => 'email',
            'phone' => 'regex:/^[\d ()+-]+$/'
        ];
    }
}