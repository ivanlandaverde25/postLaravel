<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

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
