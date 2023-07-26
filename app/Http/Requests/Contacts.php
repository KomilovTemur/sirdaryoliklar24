<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contacts extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'topic' => 'required',
            'text' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ism to\'ldirilsin',
            'email.required' => 'Email toldirilsin',
            'phone.required' => 'Raqam kiriting',
            'topic.required' => 'mavzu polyasini kiriting',
            'text.required' => 'text polyasini kiriting',
        ];
    }
}
