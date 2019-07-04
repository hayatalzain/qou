<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class EditStudentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
//.request()->segment(3)
            "course_id"=>"required",
            "coach_id"=>"required",
            "name"=>"required",
            "email"     => "required|email",
            'gender' => [
                'required',
                Rule::in(['M', 'F']),
            ],
//            "mobil"        =>"required|digits:10",
            "mobile"        =>'required|digits:10',
            "id_number"    =>"nullable|digits:9|unique:Student|id_number",
            "address"      =>"required",
            "date_of_birth"=>"required|date",
//            "degree_id"    =>"required",
        ];
    }
}
