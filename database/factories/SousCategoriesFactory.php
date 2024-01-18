<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SousCategories;
use App\Models\Categories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SousCategories>
 */
class SousCategoriesFactory extends Factory
{
    protected $model = SousCategories::class;

    public function definition()
    {
        return [
            'id_categories' => Categories::factory(), // Assurez-vous d'avoir la factory pour Categories
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
        ];
    }
}
