<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';

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
