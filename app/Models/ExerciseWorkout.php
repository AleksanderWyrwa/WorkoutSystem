<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseWorkout extends Model
{
    use HasFactory;

    protected $table = 'exercise_workout';

    protected $fillable = ['workout_id', 'exercise_id'];
}
