<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workout;
use App\Models\Exercise;

class ExerciseWorkoutSeeder extends Seeder
{
    public function run()
    {
        // Dla każdego treningu, przypisz losowe ćwiczenia
        Workout::all()->each(function ($workout) {
            // Losowo wybierz ćwiczenia (np. 5 ćwiczeń dla każdego treningu)
            $exercises = Exercise::inRandomOrder()->take(5)->pluck('id')->toArray();
            
            // Przypisz ćwiczenia do treningu
            $workout->exercises()->attach($exercises);
        });
    }
}
