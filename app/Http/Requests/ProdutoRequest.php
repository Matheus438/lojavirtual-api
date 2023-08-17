<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
          'nome' => 'required|max:80|min:3',
          'codigo' => 'required|max:30|min:10|unique:usuarios,Codigo(SKU)',
          'preço' => 'required|max:10|min:5',
          'tipo' => 'required|max:50|min:3',
          'linha' => 'required|max:50|min:5'
        ];
    }
}

