<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\Models\WorkoutResult;
use Illuminate\Http\Request;

class WorkoutResultController extends Controller
{
    // Wyświetlanie wyników wszystkich treningów
    public function index()
    {
        $results = WorkoutResult::with('workout')->get();  // Pobieramy wyniki związaną z treningami
        return view('workout_results.index', compact('results'));
    }

    // Formularz dodawania nowego wyniku
    public function create()
    {
        $workouts = Workout::all();  // Pobieramy wszystkie treningi
        return view('workout_results.create', compact('workouts'));
    }

    // Zapisz nowy wynik
    public function store(Request $request)
    {
        $request->validate([
            'workout_id' => 'required|exists:workouts,id',  // Musi istnieć trening
            'date' => 'required|date',  // Walidacja daty
            'performance' => 'required|string',  // Opis wyniku
        ]);

        // Tworzymy wynik
        WorkoutResult::create([
            'workout_id' => $request->workout_id,
            'date' => $request->date,
            'performance' => $request->performance,
        ]);

        return redirect()->route('workout_results.index');
    }

    // Wyświetlanie szczegółów wyniku
    public function show($id)
    {
        $result = WorkoutResult::with('workout')->findOrFail($id);  // Pobieramy wynik z powiązanym treningiem
        return view('workout_results.show', compact('result'));
    }

    // Formularz edytowania wyniku
    public function edit($id)
    {
        $result = WorkoutResult::findOrFail($id);  // Pobieramy wynik do edycji
        $workouts = Workout::all();  // Pobieramy wszystkie treningi
        return view('workout_results.edit', compact('result', 'workouts'));
    }

    // Aktualizowanie wyniku
    public function update(Request $request, $id)
    {
        $request->validate([
            'workout_id' => 'required|exists:workouts,id',
            'date' => 'required|date',
            'performance' => 'required|string',
        ]);

        // Aktualizowanie wyniku
        $result = WorkoutResult::findOrFail($id);
        $result->update([
            'workout_id' => $request->workout_id,
            'date' => $request->date,
            'performance' => $request->performance,
        ]);

        return redirect()->route('workout_results.index');
    }

    // Usunięcie wyniku
    public function destroy($id)
    {
        $result = WorkoutResult::findOrFail($id);
        $result->delete();  // Usunięcie wyniku
        return redirect()->route('workout_results.index');
    }
}
