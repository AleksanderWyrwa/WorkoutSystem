<?php

namespace Database\Factories;

use App\Models\WorkoutResult;
use App\Models\Workout;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkoutResultFactory extends Factory
{
    protected $model = WorkoutResult::class;

    public function definition()
    {
        return [
            'workout_id' => Workout::factory(), // Powiązanie z losowym treningiem
            'date' => $this->faker->date(),
            'performance' => $this->faker->sentence(), // Wydajność, np. liczba powtórzeń
        ];
    }
}
