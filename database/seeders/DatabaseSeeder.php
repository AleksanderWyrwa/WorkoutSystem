<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Tworzymy ćwiczenia
        $this->call(ExerciseSeeder::class);
        
        // Tworzymy treningi
        $this->call(WorkoutSeeder::class);
        
        // Przypisujemy ćwiczenia do treningów
        $this->call(ExerciseWorkoutSeeder::class);
        
        // Tworzymy wyniki treningów
        $this->call(WorkoutResultSeeder::class);
    }
}
