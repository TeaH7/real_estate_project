<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:2|max:30|regex:/^[\pL\s]+$/u',
            'email' => 'required|email',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Emri eshte fushe e detyrueshme',
            'name.min' => 'Emri duhet te permbaje me shume se 2 shkronja',
            'name.max' => 'Emri nuk duhet te jete me shume se 30 karaktere',
            'name.regex' => 'Emri duhet te permbaje vetem shkronja',
            'email.required' => 'Email eshte fushe e detyrueshme',
            'email.email' => 'Email duhet te permbaje @',
            'message.required' => 'Mesazhi eshte fushe e detyrueshme',
        ];
}
}
