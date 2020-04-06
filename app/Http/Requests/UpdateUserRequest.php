<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name'      =>  'required',
            'email'     =>  'required|unique:users,email,' . $this->route('id')
        ];
    }

    public function messages()
    {
        return [
            'name.required'     =>  'El usuario necesita un título',
            'email.required'    =>  'El usuario necesita una url'
        ];
    }
}