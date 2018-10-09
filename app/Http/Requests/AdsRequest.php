<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
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
            'ads_title' => 'required|unique:ads,ads_title',
            'type' => 'required',
            'ads_month' => 'required',
            'target_age' => 'required',
            'target_date'  => 'required',
            'area' => 'required'
        ];
    }
}
