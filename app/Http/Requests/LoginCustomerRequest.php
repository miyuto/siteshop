<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:2|max:20',
        ];
    }
    public function messages()
    {
       return [
           'email.required' => 'Vui lòng nhập Email',
           'email.email' => 'Không đúng định dạng Email',
           'password.required' => 'Vui lòng nhập mật khẩu',
           'password.min' => 'Mật khẩu không được dưới 6 ký tự',
           'password.max' => 'Mật khẩu không được lớn hơn 20 ký tự',
       ];
    }
}
