@extends('layouts.app')

@section('content')
    <h1>Dodaj nowy wynik treningu</h1>

    <form action="{{ route('workout_results.store') }}" method="POST">
        @csrf

        <!-- Wybór treningu -->
        <div class="mb-3">
            <label for="workout_id" class="form-label">Trening</label>
            <select name="workout_id" id="workout_id" class="form-control" onchange="updateCalories()">
                <option value="">Wybierz trening</option>
                @foreach ($workouts as $workout)
                    <option value="{{ $workout->id }}" data-calories="{{ $workout->exercises->sum('calories_burned') }}">
                        {{ $workout->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Wyświetlenie spalonych kalorii -->
        <div class="mb-3">
            <label for="calories_burned" class="form-label">Spalone kalorie</label>
            <input type="text" id="calories_burned" class="form-control" readonly>
        </div>

        <!-- Data -->
        <div class="mb-3">
            <label for="date" class="form-label">Data</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Zapisz wynik</button>
    </form>

    <script>
        // Funkcja, która będzie aktualizować pole 'Spalone kalorie' po wybraniu treningu
        function updateCalories() {
            const workoutSelect = document.getElementById('workout_id');
            const selectedOption = workoutSelect.options[workoutSelect.selectedIndex];
            const caloriesBurned = selectedOption ? selectedOption.dataset.calories : 0;

            document.getElementById('calories_burned').value = caloriesBurned;
        }
    </script>
@endsection
