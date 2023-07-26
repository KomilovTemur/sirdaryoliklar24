<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Tags extends FormRequest
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
            'slug' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_uz.required' => "O'zbek tilida to'ldirilsin",
            'name_ru.required' => "Rus tilida to'ldirilsin",
            'slug.required' => "Slug to'ldirilsin",
        ];
    }
}
