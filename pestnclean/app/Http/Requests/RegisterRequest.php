<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:User',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string|max:15|unique:User',
            'address' => 'nullable|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'fullname.required' => 'Vui lòng nhập họ và tên.',
            'fullname.string' => 'Họ và tên phải là chuỗi ký tự.',
            'fullname.max' => 'Họ và tên không được vượt quá :max ký tự.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.string' => 'Email phải là chuỗi ký tự.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.max' => 'Email không được vượt quá :max ký tự.',
            'email.unique' => 'Email này đã được đăng ký.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.string' => 'Mật khẩu phải là chuỗi ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất :min ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.string' => 'Số điện thoại phải là chuỗi ký tự.',
            'phone.max' => 'Số điện thoại không được vượt quá :max ký tự.',
            'phone.unique' => 'Số điện thoại này đã được đăng ký.',
            'address.nullable' => 'Địa chỉ có thể để trống.',
            'address.string' => 'Địa chỉ phải là chuỗi ký tự.',
            'address.max' => 'Địa chỉ không được vượt quá :max ký tự.',
        ];
    }
}
