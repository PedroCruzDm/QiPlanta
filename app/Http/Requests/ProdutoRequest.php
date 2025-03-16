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
     */
    public function rules(): array
    {
        return [
            'name_produto' => 'required|string|max:255',
            'preco' => 'required|numeric|min:0',
            'categoria' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|url',
            'quantidade' => 'required|integer|min:0',
            'status' => 'required|boolean',
        ];
    }

    /**
     * Get custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'name_produto.required' => 'O nome do produto é obrigatório.',
            'preco.required' => 'O preço do produto é obrigatório.',
            'preco.numeric' => 'O preço deve ser um número válido.',
            'categoria.required' => 'A categoria do produto é obrigatória.',
            'imagem.image' => 'A imagem deve ser um arquivo de imagem válido.',
            'imagem.mimes' => 'A imagem deve estar no formato: jpeg, png, jpg ou gif.',
            'imagem.max' => 'A imagem não pode exceder 2MB.',
            'video.url' => 'O vídeo deve ser uma URL válida.',
            'quantidade.required' => 'A quantidade do produto é obrigatória.',
            'quantidade.integer' => 'A quantidade deve ser um número inteiro.',
            'status.required' => 'O status do produto é obrigatório.',
            'status.boolean' => 'O status deve ser verdadeiro ou falso.',
        ];
    }
}