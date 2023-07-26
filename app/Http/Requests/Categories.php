<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Categories extends FormRequest
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
            'name_uz' => 'required',
            'name_ru' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_uz.required' => 'O\'zbek Tilida To\'ldiring',
            'name_ru.required' => 'Rus Tilida To\'ldiring',
        ];
    }
}
