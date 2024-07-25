<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

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
