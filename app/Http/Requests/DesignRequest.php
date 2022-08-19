<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesignRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category_id' => 'required',
            'name'        => 'required|unique:designs,name,' .$this->id,
        ];
    }

    public function messages()
    {
        return [
            'category_id.required'    => 'الاسم مطلوب',
            'name.required'  => 'الرقم مطلوب',
            'name.unique'    => 'هذاالرقم تم استخدامه مسبقا',
        ];
    }
}
