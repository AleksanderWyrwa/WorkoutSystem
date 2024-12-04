<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutResult extends Model
{
    use HasFactory;

    protected $fillable = ['workout_id', 'date', 'performance'];

    public function workout()
    {
        return $this->belongsTo(Workout::class);
    }
}
