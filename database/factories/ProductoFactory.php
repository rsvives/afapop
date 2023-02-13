<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->word(),
            'descripcion' => fake()->text(50),
            'stock' => fake()->numberBetween(0, 200),
            'precio' => fake()->randomFloat(2, 2, 9.99)
        ];
    }
}
