<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'destination' => 'required',
            'date_trip' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "VUi long nhap ten chuyen di (name)",
            'destination.required' => "Vui long nhap diem den (destination)",
            'date_trip.required' => "VUi long nhap ngay (Day)"
        ];
    }
}
