<?php

namespace Database\Factories;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseFactory extends Factory
{
    protected $model = Exercise::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'duration' => $this->faker->numberBetween(5, 30), // Czas trwania ćwiczenia od 5 do 30 minut
            'calories_burned' => $this->faker->numberBetween(10, 100), // Spalone kalorie
        ];
    }
}
