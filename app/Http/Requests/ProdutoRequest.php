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
          'Nome do Produto' => 'required|max:80|min:3',
          'Codigo(SKU)' => 'required|max:30|min:10|unique:usuarios,Codigo(SKU)',
          'Preço de venda' => 'required|max:10|min:5',
          'Tipo' => 'required|max:50|min:3',
          'Linha do Produto' => 'required|max:50|min:5'
        ];
    }
}

