<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StudentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            "course_id"=>"required",
//            "coach_id"=>"required",
   'name' => 'required|string|max:255|',
            "email"     => "required|email",
            'gender' => [
                'required',
                Rule::in(['M', 'F']),
            ],
           "mobile"        =>"required|digits:10|",
            "id_number"    =>"required|digits:9",
//            "id_number"    =>"required|digits:9|unique:Student",
            "address"      =>"required",
            "date_of_birth"=>"required|date",
//            "degree_id"    =>"required",
        ];
    }
}
