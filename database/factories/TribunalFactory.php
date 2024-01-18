<?php

namespace Database\Factories;
use App\Models\Tribunal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tribunal>
 */
class TribunalFactory extends Factory
{
    protected $model = Tribunal::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'type' => $this->faker->word,
            'adresse' => $this->faker->address,
        ];
    }
}
