<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->sentence(),
            'detalle' => fake()->text(1000),
            'categoria' => fake()->word(),
            'mostrar' => fake()->randomElement([true, false]),
            'fecha_publicacion' => fake()->dateTime(),
        ];
    }
}