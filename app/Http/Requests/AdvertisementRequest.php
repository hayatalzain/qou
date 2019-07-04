<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
//        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        return [
            "details"   =>"required",
            "title"     =>"required|max:250",
//            "adv_image" =>"image|mimes:jpeg,png,jpg,gif,svg|required|max:100000",
            "link"      =>"nullable|url",
        ];
    }
}
