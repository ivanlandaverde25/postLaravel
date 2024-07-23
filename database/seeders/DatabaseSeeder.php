<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Post::factory(100)->create();
        Empresa::factory(20)->create();
    }
}
