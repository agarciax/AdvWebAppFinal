<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_id' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'num_of_units_sold' => ['required'],
            'item_name' => ['required'],
            'price' => ['required']
        ];
    }
}
