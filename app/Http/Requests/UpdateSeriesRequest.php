<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeriesRequest extends FormRequest
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
            'titulo' => 'required|min:3'
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'O campo deve ser preenchido',
            'titulo.min' => 'O texto deve ter no mínimo 3 caracteres',
        ];
    }
}
