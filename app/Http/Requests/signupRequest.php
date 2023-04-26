<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'add' => 'string',
        ];
    }

    public function messages()
        {
            return [
                'name.string' => 'Vui lòng nhập tên đúng',
                'name.required' => 'Tên đã tồn tại!!',
                'age.numeric' => 'Vui lòng nhập tuổi đúng',
                'date.string' => 'Vui lòng nhập ngày đúng',
                'phone.numeric' => 'Vui lòng nhập số điện thoại đúng',
                'web.string' => 'Vui lòng nhập link web đúng',
                'add.string' => 'Vui lòng nhập địa chỉ web đúng',
            ];
        }
}
