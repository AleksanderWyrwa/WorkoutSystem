<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'duration', 'calories_burned'];

    public function workouts()
    {
        return $this->belongsToMany(Workout::class, 'exercise_workout');
    }
}
