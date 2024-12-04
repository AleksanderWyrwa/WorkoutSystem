<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WorkoutResult;
use App\Models\Workout;

class WorkoutResultSeeder extends Seeder
{
    public function run()
    {
        // Dla każdego treningu, dodaj wyniki
        Workout::all()->each(function ($workout) {
            WorkoutResult::create([
                'workout_id' => $workout->id,
                'date' => now()->subDays(rand(0, 30)), // losowa data w ciągu ostatnich 30 dni
                'performance' => 'Wykonano 100 powtórzeń', // przykładowe dane, możesz dostosować
            ]);
        });
    }
}
