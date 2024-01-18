<?php

namespace Database\Seeders;

use App\Models\Utilisateurs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UtilisateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Utilisateurs::factory(2)->create();
    }
}
