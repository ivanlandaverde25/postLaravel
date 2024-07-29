<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProveedorRequest extends FormRequest
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
            'nombre' => 'required|string|min:3|max:255',
            'nombre_corto' => 'required|string|min:2|max:25',
            'direccion' => 'required|string|min:15|max:300',
            'telefono' => 'required|string',
            'slug' => 'required|string|min:3,max:255|unique:proveedores,slug'
        ];
    }

    // Por medio de la funcion messages se pueden modificar los mensajes por cada una de las validaciones que se realizan para los campos
    public function messages(){
        return [
            'nombre.string' => 'Debe ingresar una cadena de texto',
            'nombre.min' => 'Debe ingresar como minimo 3 caracteres',
            'nombre.max' => 'El nombre no debe exceder los 255 caracteres',
        ];
    }

    // Aqui se pueden cambiar los nombres de los atributos que se muestran en los errores
    public function attributes()
    {
        return [
            'nombre' => 'Nombre proveedor'
        ];
    }
}
