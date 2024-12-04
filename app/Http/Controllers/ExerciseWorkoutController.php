<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Workout;
use App\Models\ExerciseWorkout;
use Illuminate\Http\Request;

class ExerciseWorkoutController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'workout_id' => 'required|exists:workouts,id',
            'exercise_id' => 'required|exists:exercises,id',
        ]);

        ExerciseWorkout::create($validated);
        return redirect()->route('workouts.show', ['workout' => $validated['workout_id']]);
    }

    public function destroy(Workout $workout, Exercise $exercise)
    {
        $workout->exercises()->detach($exercise->id);
        return redirect()->route('workouts.show', ['workout' => $workout->id]);
    }
}
