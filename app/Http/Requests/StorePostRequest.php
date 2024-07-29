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
    // Metodo donde se retornan todas las validaciones de los campos del fomrulario
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|min:5|max:255',
            'slug'=> ['required','string', 'min:5', 'max:255','unique:posts,slug'],
            'categoria' => ['required','string', 'min:5', 'max:255'],
            'detalle' => ['required','string', 'min:5', 'max:2000'],
        ];
    }

    // Metodo donde se retornan todos los mensajes disponibles por cada una de las validaciones de los campos del formulario
    public function messages()
    {
        return [
            'titulo.required' => 'El :attribute es requerido para completar el registro',
        ];
    }

    // Metodo donde se retornan los nombres que se le asignaran a los atributos disponibles dentro del formulario
    public function attributes()
    {
        return [
            'titulo' => 'Titulo del Post',
        ];
    }
}
