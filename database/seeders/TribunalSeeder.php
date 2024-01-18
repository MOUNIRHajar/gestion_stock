<?php

namespace Database\Seeders;

use App\Models\Tribunal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TribunalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tribunal::factory(2)->create();
    }
}
