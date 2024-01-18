<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word, // Vous pouvez utiliser d'autres méthodes de Faker pour générer des noms
        'description' => fake()->paragraph, // Vous pouvez ajuster cela en fonction de vos besoins
        'created_at' => now(),
        'updated_at' => now(),
        ];
    }
}
