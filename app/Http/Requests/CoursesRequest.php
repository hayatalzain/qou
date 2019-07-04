<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|',
            "details"=>"required",
            "coach_id"=>"required",
            "start_course"=>"required|date",
            "end_course"=>"required|date",
            "hours_count"=>"required",
            "address"=>"required",
            "days_count"=>"required",
            "time"=>"required",

        ];
    }
}
