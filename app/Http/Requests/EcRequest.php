<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EcRequest extends FormRequest
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
            'name' => 'required',
            'designation'=> 'required',
            'office'=> 'required',
            'year'=> 'required',
            'ec_role' => 'required',
            'photo' => 'image|max:5000'
        ];
    }
}
