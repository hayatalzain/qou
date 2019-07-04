<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
//        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        return [
            "details"=>"required",
            "title"=>"required|max:250",
//            "image"=>"required|mimes:jpeg,png,jpg,gif,svg|max:2048",
//             "image"=>"required|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "link"=>"nullable|url",
        ];
    }
}
