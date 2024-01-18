<?php

namespace Database\Seeders;

use App\Models\Sous_Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SousCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sous_Categories::factory(4)->create();
    }
}
