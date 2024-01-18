<?php

namespace Database\Seeders;

use App\Models\Stocke;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stocke::factory(3)->create();
    }
}
