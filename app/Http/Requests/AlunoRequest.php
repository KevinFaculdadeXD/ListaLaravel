<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|min:3|max:100',
            'curso' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres.',
            'nome.max' => 'O nome não pode ter mais que 100 caracteres.',
            'curso.required' => 'O campo curso é obrigatório.',
            'curso.max' => 'O curso não pode ter mais que 100 caracteres.',
        ];
    }
}
