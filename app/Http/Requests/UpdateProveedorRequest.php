<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProveedorRequest extends FormRequest
{
    protected $setIdProveedor;

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

     public function serIdProveedor($value){
        $this->setIdProveedor = $value;
     }

     public function setIdProveedor() {
        return $this->setIdProveedor;
     }

    public function rules(): array
    {
        return [
            'nombre' => 'required|string|min:3|max:255',
            'nombre_corto' => 'required|string|min:2|max:25',
            'direccion' => 'required|string|min:15|max:300',
            'telefono' => 'required|string',
            'slug' => "required|string|min:3,max:255|unique:proveedores,slug,{setIdProveedor()}",
        ];

    }

    public function messages()
    {
        
    }

    public function attributes()
    {
        
    }

}
