<?php

namespace Database\Factories;

use App\Models\Workout;
use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkoutFactory extends Factory
{
    protected $model = Workout::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'duration' => $this->faker->numberBetween(30, 120), // Czas trwania od 30 do 120 minut
        ];
    }

    // Dodanie ćwiczeń do treningu po jego stworzeniu
    public function configure()
    {
        return $this->afterCreating(function (Workout $workout) {
            // Przypisanie losowych ćwiczeń do treningu
            $exercises = Exercise::inRandomOrder()->limit(5)->pluck('id'); // Losowanie 5 ćwiczeń
            $workout->exercises()->attach($exercises); // Przypisanie ćwiczeń
        });
    }
}
