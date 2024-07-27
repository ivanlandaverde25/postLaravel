<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dependencia>
 */
class DependenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'nombre_corto' => fake()->optional(70)->word(),
            'tipo_dependencia' => fake()->randomElement(['Oficial', 'No Oficial']),
            'fecha_oficial' => fake()->date(),
            'activo' => fake()->randomElement([true, false]),
            'slug' => fake()->slug(),
        ];
    }
}
