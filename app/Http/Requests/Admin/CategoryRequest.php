<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => [
                'required','string','min:3','max:255',
            ],
            'image' => [
                'required',
            ],
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'حقل الاسم مطلوب',
            'image.required'=>'يرجى إضافة صورة',
        ];
    }
}
