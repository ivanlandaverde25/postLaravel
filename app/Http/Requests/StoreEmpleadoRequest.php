<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleadoRequest extends FormRequest
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
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'slug' => 'required|max:100|unique:empleados',
            'telefono' => 'nullable|max:20',
            'fecha_ingreso' => 'nullable|date',
            'salario' => 'nullable|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nombres' => 'El campo :attribute es requerido para completar el registro',
        ];
    }

    public function attributes()
    {
        return [
            'nombres' => 'Nombres de empleado'
        ];
    }
}
