<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'titulo',
        'slug',
        'detalle',
        'categoria',
    ];

    // La variable guarded se utiliza para indicar cuales campos no se van a permitir por medio de asignacion masiva
    protected $guarded = [
        
    ];

    protected function casts():array
    {
        return [
            'fecha_publicacion' => 'datetime',
            'mostrar' => 'boolean',
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
