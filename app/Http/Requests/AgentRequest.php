<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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
            'first_name' => 'required|min:2|max:30',
            'last_name' => 'required|min:2|max:30',
            'email' => 'required|min:5|max:50|unique:users,email,',
            'phone' => 'required|min:5|max:50',
            'password' => 'required|min:6|max:25|confirmed',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Emri eshte fushe e detyrueshme',
            'first_name.min' => 'Emri duhet te permbaje me shume se 2 shkronja',
            'first_name.max' => 'Emri nuk duhet te jete me shume se 30 karaktere',

            'last_name.required' => 'Mbiemri eshte fushe e detyrueshme',
            'last_name.min' => 'Mbiemri duhet te permbaje me shume se 2 shkronja',
            'last_name.max' => 'Mbiemri nuk duhet te jete me shume se 30 karaktere',

            'username.required' => 'Username eshte fushe e detyrueshme ',
            'username.min' => 'Username duhet te permbaje te pakten 2 shkronja',
            'username.max' => 'Username nuk mund te permbaje me shume se 50 shkronja',
            'username.unique' => 'Username nuk eshte i lire!',
            'email.required' => 'Email eshte fushe e detyrueshme',
            'email.email' => 'Email duhet te permbaje @',



        ];
    }
}
