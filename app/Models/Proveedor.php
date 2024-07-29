<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $guarded = [
        'activo'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
