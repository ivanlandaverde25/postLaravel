<?php

namespace Database\Seeders;

use App\Models\Dependencia;
use App\Models\Empleado;
use App\Models\Empresa;
use App\Models\Post;
use App\Models\Proveedor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Post::factory(100)->create();
        Empresa::factory(20)->create();
        Empleado::factory(100)->create();
        Dependencia::factory(80)->create();
        Proveedor::factory(50)->create();
    }
}
