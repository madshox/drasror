<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        if ($this->isMethod('get'))
            return [];

        return [
            'title' => 'required|min:3',
            'head_image' => 'required',
            'description' => 'required',
            'long_d' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательна для заполнения',
            'min' => 'Поле :attribute должна иметь минимум :min символа',
        ];
    }
}
