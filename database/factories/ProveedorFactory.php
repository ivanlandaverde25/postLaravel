<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'nombre_corto' => fake()->word(),
            'direccion' => fake()->text(200),
            'telefono' => fake()->numerify('####-####'),
            'activo' => fake()->randomElement([true, false]),
            'slug' => fake()->slug(),
        ];
    }
}
