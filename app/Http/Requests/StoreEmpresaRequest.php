<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpresaRequest extends FormRequest
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
            'nombre' => 'required|string|min:5|max:255',
            'slug' => 'required|string|min:3|max:255|unique:empresas,slug',
            'direccion' => 'required|string|min:10|max:255',
            'fecha_apertura' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'nombre' => 'El :attribute es requerido para completar el registro',
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'Nombre de empresa',
        ];
    }
}
