<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    // La variable fillable se utiliza para indicar cuales son las variables que si se van a poder guardar por medio de asignacion masiva
    protected $fillable = [
        'nombres',
        'apellidos',
        'slug',
        'telefono',
        'fecha_ingreso',
        'salario'
    ];

    // La variable guarded se utiliza para indicar cuales campos no se van a permitir por medio de asignacion masiva
    protected $guarded = [
        
    ];

    protected function casts():array
    {
        return [
            'fecha_ingreso' => 'date',
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
