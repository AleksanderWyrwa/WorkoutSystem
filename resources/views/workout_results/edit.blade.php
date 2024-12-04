@extends('layouts.app')

@section('content')
    <h1>Edytuj wynik treningu</h1>

    <form action="{{ route('workout_results.update', $result->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="workout_id" class="form-label">Trening</label>
            <select name="workout_id" id="workout_id" class="form-control">
                @foreach ($workouts as $workout)
                    <option value="{{ $workout->id }}" @if ($workout->id == $result->workout_id) selected @endif>{{ $workout->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Data</label>
            <input type="date" name="date" id="date" value="{{ $result->date }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="performance" class="form-label">Opis wyniku</label>
            <textarea name="performance" id="performance" class="form-control">{{ $result->performance }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Zaktualizuj wynik</button>
    </form>
@endsection
