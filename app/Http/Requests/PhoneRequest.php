<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PhoneRequest extends FormRequest
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
            'phone' => 'required|min:11'
        ];
    }
    public function attributes()
    {
        return [
            'phone' => 'Телефон'
        ];
    }
    public function messages()
    {
        return [
            'phone.required' => 'Введите корректный номер телефона',
            'phone.min' => 'Введите корректный номер телефона'
        ];
    }
}
