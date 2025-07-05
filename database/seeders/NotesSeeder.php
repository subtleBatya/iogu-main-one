<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notes;

class NotesSeeder extends Seeder
{
    public function run()
    {
        Notes::factory()->count(10)->create();
    }
}
