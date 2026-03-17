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
            'name' => 'required|min:3|max:255|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:60|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O cmpo Nome é obrigatório',
            'name.min' => 'O campo Nome deve ter pelo menos 3 caracteres',
            'name.max' => 'O campo Nome deve ter até 255 caracteres',
            'name.string' => 'O campo Nome deve ser um texto',


            'email.email' => 'O campo Email deve ser um email válido',
            'email.required' => 'O campo Email é obrigatório',
            'email.unique' => 'O email informado já esta em uso',



            'password.required' => 'O campo senha é obrigatório',
            'password.confirmed' => 'As senhas devem ser iguais',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres',
            'password.max' => 'A senha deve ter até 60 caracteres',

        ];
    }
}
