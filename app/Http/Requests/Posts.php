<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Posts extends FormRequest
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
            'category_id' => 'required',
            'title_uz' => 'required',
            'title_ru' => 'required',
            'description_uz' => 'required',
            'description_ru' => 'required',
            'body_uz' => 'required',
            'body_ru' => 'required',
            'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title_uz.required' => 'Title O\'zbek Tilida To\'ldirilsin',
            'title_ru.required' => 'Title Rus Tilida To\'ldirilsin',
            'body_uz.required' => 'Body O\'zbek Tilida To\'ldirilsin',
            'body_ru.required' => 'Body Rus Tilida To\'ldirilsin',
            'description_uz.required' => 'O\'zbek Tilida To\'ldirilsin',
            'description_ru.required' => 'Rus Tilida To\'ldirilsin',
            'image.required' => 'Rasm kiritilsin',
            'category_id.required' => 'Raqam kiritilsin',
        ];
        
    }
}
