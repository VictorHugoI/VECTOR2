<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
        return [
            'provinces' => 'required',
            'districts' => 'required',
            'wards' => 'required',
            'name' => 'required|string|max:255',
            'phone' => 'required|',
            'note' => 'string|max:255',
        ];
    }
}