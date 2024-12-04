<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workout;

class WorkoutSeeder extends Seeder
{
    public function run()
    {
        // Tworzenie 1000 treningów
        \App\Models\Workout::factory(1000)->create();
    }
}
