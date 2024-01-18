<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UtilisateursSeeder::class,
            BureauSeeder::class,
            CategoriesSeeder::class,
            SousCategoriesSeeder::class,
            FournisseurSeeder::class,
            AchatSeeder::class,
            StockeSeeder::class,
            ProduitsSeeder::class,
            MaintenanceSeeder::class,
            TribunalSeeder::class,
            DemandeSeeder::class,
            DechargeSeeder::class,



        ]);
    }
}
