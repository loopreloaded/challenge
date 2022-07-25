<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeatherRequest extends FormRequest
{
    public function rules()
    {
        return [
            'query' => 'required|string|max:255'
        ];
    }

    public function messages()
    {
        return [
            'query.required' => 'You have to specify a city.',
        ];
    }
    public function authorize()
    {
        return true;
    }
}
