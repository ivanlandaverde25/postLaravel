<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => fake()->slug(),
            'nombres' => fake()->name(),
            'apellidos' => fake()->lastName(),
            'telefono' => fake()->optional(60)->numerify('####-####'),
            'fecha_ingreso' => fake()->date(),
            'salario' => fake()->randomFloat(2, 600, 2000),
        ];
    }
}
