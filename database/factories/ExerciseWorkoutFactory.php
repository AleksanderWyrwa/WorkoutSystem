<?php

namespace Database\Factories;

use App\Models\ExerciseWorkout;
use App\Models\Workout;
use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseWorkoutFactory extends Factory
{
    protected $model = ExerciseWorkout::class;

    public function definition()
    {
        return [
            'workout_id' => Workout::factory(),
            'exercise_id' => Exercise::factory(),
        ];
    }
}
