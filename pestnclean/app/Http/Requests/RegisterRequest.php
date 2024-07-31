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
            'passwordRe' => 'required|string|min:6|confirmed',
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
            'passwordRe.required' => 'Vui lòng nhập mật khẩu.',
            'passwordRe.string' => 'Mật khẩu phải là chuỗi ký tự.',
            'passwordRe.min' => 'Mật khẩu phải có ít nhất :min ký tự.',
            'passwordRe.confirmed' => 'Mật khẩu xác nhận không khớp.',
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
