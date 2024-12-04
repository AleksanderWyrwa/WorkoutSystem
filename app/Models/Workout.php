<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'duration'];

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'exercise_workout');
    }

    public function results()
    {
        return $this->hasMany(WorkoutResult::class);
    }
    
    public function totalCaloriesBurned()
    {
        return $this->exercises->sum('calories_burned');
    }
}
