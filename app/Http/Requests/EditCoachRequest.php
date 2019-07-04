<?php

namespace App\Http\Requests;
use App\model\Coach;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class EditCoachRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "name"=>'required|string|max:255|',
            "email"     => "required|email",
            'gender' => [
                'required',
                Rule::in(['M', 'F']),
            ],
            "mobile"=>"required|digits:10",
//            "id_number"=>"required|min:9|max:9",
            "address"=>"required",
            "degree_id"=>"required",
        ];
    }
}
