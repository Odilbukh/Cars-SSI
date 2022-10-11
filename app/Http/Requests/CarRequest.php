<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'car_model_id' => 'required|integer|exists:car_models,id',
            'year_issue' => 'required|integer|min:4',
            'car_number' => 'required|max:255',
            'color' => 'required|max:255',
            'daily_coast' => 'required|numeric',
            'image' => 'nullable|image'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'car_model_id.required' => 'Поля Модель обязательный',
            'car_model_id.exists' => 'Модель не существует',
            'year_issue.required' => 'Поля Год выпуска обязательный',
            'year_issue.integer' => 'Можно только число',
            'year_issue.min' => 'Минимум 4 символа',
            'car_number.required' => 'Поля Госномер автомобиля обязательный',
            'color.required' => 'Поля Цвет обязательный',
            'daily_coast.required' => 'Поля Цена аренды в сутки обязательный',
            'image.image' => 'Можно загрузить только фото'
        ];
    }
}
