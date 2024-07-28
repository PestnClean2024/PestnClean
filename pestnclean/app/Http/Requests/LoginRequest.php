<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'login_id' => 'required',
            'password' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'login_id.required' => 'Vui lòng nhập email hoặc sdt.',
            'password.required' => 'Vui lòng nhập password.',
        ];
    }
}
