<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\WorkoutResultController;
use App\Http\Controllers\ExerciseWorkoutController;

Route::resource('workout_results', WorkoutResultController::class);

// CRUD dla treningów
Route::resource('workouts', WorkoutController::class);

// CRUD dla ćwiczeń
Route::resource('exercises', ExerciseController::class);

// CRUD dla wyników treningów
Route::resource('workout_results', WorkoutResultController::class);

// Trasy dla relacji ćwiczeń i treningów (N:M)
Route::post('exercise_workout', [ExerciseWorkoutController::class, 'store'])->name('exercise_workout.store');
Route::delete('exercise_workout/{workout}/{exercise}', [ExerciseWorkoutController::class, 'destroy'])->name('exercise_workout.destroy');

// Strona główna
Route::get('/', function () {
    return view('home');
});
