<?php

namespace Database\Seeders;

use App\Models\Solar;
use Illuminate\Database\Seeder;

class SolarSeeder extends Seeder
{
    public function run(): void
    {
        Solar::factory(10)->create();
    }
}
