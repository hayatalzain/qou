<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class CoachRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:Coach,name,',
            "email"     => "required|email|unique:coach",
            'gender' => [
                'required',
                Rule::in(['M', 'F']),
            ],
            "mobile"=>"required|digits:10",
            "id_number"=>"required|digits:9|unique:Coach|",
            "address"=>"required",
            "degree_id"=>"required",
        ];
    }
}
