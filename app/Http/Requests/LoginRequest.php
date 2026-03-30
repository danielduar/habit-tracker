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
            "email" => "required|email",
            "password" => "required|min:6|max:60",
        ];
    }

    public function messages()
    {
        return [
            "email.required" => "O e-mail é obrigatório",
            "email.email" => "O campo e-mail deve ser um endereço valido",
            "password.required" => "O campo senha é obrigatório",
            "password.min" => "O campo de senha deve ter no mínimo 6 caracteres",
            "password.max" => "O campo de senha deve ter no maximo 60 caracteres",
        ];
    }
}
