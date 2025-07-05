<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Olympaid;

class OlympaidSeeder extends Seeder
{
    public function run()
    {
        Olympaid::factory()->count(10)->create();
    }
}
