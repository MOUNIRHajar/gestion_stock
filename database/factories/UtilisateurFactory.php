<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Utilisateur;


class UtilisateurFactory extends Factory
{
    protected $model = Utilisateur::class;

    public function definition()
    {
        return [
            'login' => $this->faker->userName,
            'password' => bcrypt('password'),
            'type' => $this->faker->randomElement(['admin', 'normal']),
        ];
    }
}
