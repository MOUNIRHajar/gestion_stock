<?php

namespace Database\Factories;

use App\Models\Utilisateurs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bureau>
 */
class BureauFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'utilisateurs_id'=>Utilisateurs::all()->random()->id,
            'nom'=>fake()->word(),
            'typeB'=>fake()->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
