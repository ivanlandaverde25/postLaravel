<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'slug',
        'direccion',
        'fecha_apertura'
    ];

    // La variable guarded se utiliza para indicar cuales campos no se van a permitir por medio de asignacion masiva
    protected $guarded = [
        
    ];

    protected function casts():array
    {
        return [
            'fecha_apertura' => 'date',
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
