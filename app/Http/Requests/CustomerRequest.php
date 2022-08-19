<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'   => 'required',
            'number' => 'required|unique:customers,number,' .$this->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'الاسم مطلوب',
            'number.required'  => 'الرقم مطلوب',
            'number.unique'    => 'هذاالرقم تم استخدامه مسبقا',
        ];
    }
}
