<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'   => 'required|unique:categories,name,' .$this->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'الاسم مطلوب',
            'name.unique'    => 'هذاالاسم تم استخدامه مسبقا',
        ];
    }
}
