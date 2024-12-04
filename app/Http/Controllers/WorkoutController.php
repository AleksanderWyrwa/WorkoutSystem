<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\Models\Exercise;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    // Wyświetlanie listy treningów
    public function index()
    {
        $workouts = Workout::all();
        return view('workouts.index', compact('workouts'));
    }

    // Wyświetlanie pojedynczego treningu (dodajemy tę metodę)
    public function show($id)
    {
        $workout = Workout::findOrFail($id);
        return view('workouts.show', compact('workout'));
    }

    // Tworzenie nowego treningu
    public function create()
    {
        $exercises = Exercise::all();  // Pobierz wszystkie ćwiczenia
        return view('workouts.create', compact('exercises'));
    }

    // Zapisz nowy trening
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required|integer',
            'exercises' => 'required|array',  // Wymagamy tablicy ćwiczeń
            'exercises.*' => 'exists:exercises,id', // Upewnij się, że ćwiczenie istnieje w bazie
        ]);

        $workout = Workout::create($request->all());  // Tworzymy trening

        // Przypisujemy ćwiczenia do treningu
        $workout->exercises()->sync($request->input('exercises'));

        return redirect()->route('workouts.index');
    }

    // Edytowanie istniejącego treningu
    public function edit($id)
    {
        $workout = Workout::find($id);
        $exercises = Exercise::all();  // Pobierz wszystkie ćwiczenia
        return view('workouts.edit', compact('workout', 'exercises'));
    }

    // Zaktualizowanie treningu
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required|integer',
            'exercises' => 'required|array',  // Wymagamy tablicy ćwiczeń
            'exercises.*' => 'exists:exercises,id', // Upewnij się, że ćwiczenie istnieje w bazie
        ]);

        $workout = Workout::find($id);
        $workout->update($request->all());  // Zaktualizuj trening

        // Zaktualizuj przypisane ćwiczenia do treningu
        $workout->exercises()->sync($request->input('exercises'));

        return redirect()->route('workouts.index');
    }

    // Usunięcie treningu
    public function destroy($id)
    {
        $workout = Workout::find($id);
        $workout->delete();  // Usuń trening

        return redirect()->route('workouts.index');
    }
}
