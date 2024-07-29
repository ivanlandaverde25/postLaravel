<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'titulo' => 'required|string|min:5|max:255',
            'slug'=> ['required','string', 'min:5', 'max:255','unique:posts,slug'],
            'categoria' => ['required','string', 'min:5', 'max:255'],
            'detalle' => ['required','string', 'min:5', 'max:2000'],
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El :attribute es requerido para completar el registro',
        ];
    }

    public function attributes()
    {
        return [
            'titulo' => 'Titulo del Post',
        ];
    }
}
