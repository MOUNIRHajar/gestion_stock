<?php

// database/factories/ProduitFactory.php

namespace Database\Factories;

use App\Models\Produit;
use App\Models\Type; // Assurez-vous d'importer le modèle Type
use App\Models\Stocke; // Assurez-vous d'importer le modèle Stocke
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    protected $model = Produit::class;

    public function definition()
    {
        return [
            'id_stocke' => Stocke::factory(),
            'numserie' => $this->faker->uuid,
            'numinv' => $this->faker->uuid,
            'fondus' => $this->faker->boolean,
            'Tribunal' => $this->faker->word,
            'nbr_maintenance' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->sentence,
            'type_id' => Type::all()->random()->id,
        ];
    }
}
