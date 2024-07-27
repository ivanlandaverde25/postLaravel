<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    use HasFactory;

    protected $table = 'dependencias';

    protected $guarded = [
        'activo',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected function casts():array
    {
        return [
            'fecha_oficial' => 'date'
        ];
    }
}
