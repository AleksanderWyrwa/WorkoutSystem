<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all(); // Pobierz wszystkie ćwiczenia
        return view('exercises.index', compact('exercises'));
    }

    public function create()
    {
        return view('exercises.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'duration' => 'required|integer|min:1',
            'calories_burned' => 'required|integer|min:1',
        ]);

        Exercise::create($validated);
        return redirect()->route('exercises.index');
    }

    public function show(Exercise $exercise)
    {
        return view('exercises.show', compact('exercise'));
    }

    public function edit(Exercise $exercise)
    {
        return view('exercises.edit', compact('exercise'));
    }

    public function update(Request $request, Exercise $exercise)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'duration' => 'required|integer|min:1',
            'calories_burned' => 'required|integer|min:1',
        ]);

        $exercise->update($validated);
        return redirect()->route('exercises.index');
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->delete();
        return redirect()->route('exercises.index');
    }
}
