<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyRequest extends FormRequest
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
            'title' => ['required'],
            'type_of_property' => ['nullable'],
            'address' => ['required'],
            'location' => ['required'],
            'area' => ['nullable'],
            'cover_image' => ['nullable'],
            'img1' => ['nullable'],
            'img2' => ['nullable'],
            'img3' => ['nullable'],
            'img4' => ['nullable'],
            'nr_of_beds' => ['required'],
            'nr_of_baths' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'sale_rent' => ['required', 'boolean'],
            'status_id' => ['required'],
        ];
    }
}
