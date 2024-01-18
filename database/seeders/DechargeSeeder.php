<?php

namespace Database\Seeders;

use App\Models\Decharge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DechargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Decharge::factory(2)->create();
    }
}
