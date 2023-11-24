<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequestForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'property_type' => 'required',
            'house_type' => 'required',
            'budget' => 'required|numeric',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
        ];
    }
}