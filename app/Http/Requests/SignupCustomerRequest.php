<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupCustomerRequest extends FormRequest
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
            'namesignup'=>'required|min:6|max:20',
            'emailsignup' => 'required|email|unique:users,email',
            'passsignup' => 'required|min:2|max:20',
            'repasssignup' => 'required|same:password'
        ];
    }
    public function messages(){
        return [
            'namesignup.required'=>'Vui lòng nhập tên tài khoản',
            'namesignup.min' => 'Mật khẩu không được dưới 6 ký tự',
            'namesignup.max' => 'Mật khẩu không được lớn hơn 20 ký tự',
            'emailsignup.required' => 'Vui lòng nhập Email',
            'emailsignup.email' => 'Không đúng định dạng Email',
            'emailsignup.unique' => 'Email đã có người sử dụng',
            'passsignup.required' => 'Vui lòng nhập mật khẩu',
            'passsignup.min' => 'Mật khẩu không được dưới 6 ký tự',
            'passsignup.max' => 'Mật khẩu không được lớn hơn 20 ký tự',
            'repasssignup.required' => 'Vui lòng nhập lại mật khẩu',
            'repasssignup.same' => 'Mật khẩu không giống nhau'
        ];
    }
}
