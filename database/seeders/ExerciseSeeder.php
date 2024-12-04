<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExerciseSeeder extends Seeder
{
    public function run()
    {
        // Tworzenie 1000 ćwiczeń
        \App\Models\Exercise::factory(1000)->create();
    }
}
