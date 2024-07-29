<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDependenciaRequest extends FormRequest
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
    // Funcioin donde se retornan todas las validaciones que se quieran hacer con el formulario
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|min:5|max:255',
            'nombre_corto' => 'nullable|string|min:2|max:255',
            'tipo_dependencia' => 'required|string',
            'fecha_oficial' => 'required|date',
            'slug' => 'required|string|unique:dependencias,slug',
        ];
    }

    // Funcion donde se retornan todos los mensajes personalizados para mostrar para cada una de las validaciones
    public function messages()
    {
        return [
            'nombre.required' => 'El campo :attribute es necesario para completar el registro'
        ];
    }

    // Campo donde puede realizar el campo de nombre de cada uno de los atributos al momento de mostrar un mensje de error
    public function attributes()
    {
        return [
            'nombre' => 'Nombre de dependencia',
        ];
    }
}
