<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Stocke;
use App\Models\SousCategories; // Assurez-vous d'importer le modèle SousCategories
use App\Models\Achat;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stocke>
 */
class StockeFactory extends Factory
{
    protected $model = Stocke::class;

    public function definition()
    {
        return [
            'qts' => $this->faker->numberBetween(1, 100),
            'id_souscategories' => SousCategories::factory(),
            'qtE' => $this->faker->numberBetween(1, 100),
            'model' => $this->faker->word,
            'name' => $this->faker->word,
            'prix' => $this->faker->randomFloat(2, 10, 1000),
            'garantie' => $this->faker->numberBetween(1, 24),
            'id_achat' => Achat::factory(),
        ];
    }
}
