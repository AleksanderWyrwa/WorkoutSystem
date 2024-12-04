@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edytuj ćwiczenie</h1>
        <form action="{{ route('exercises.update', $exercise->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Metoda PUT do aktualizacji -->
            <div class="form-group">
                <label for="name">Nazwa</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $exercise->name) }}" required>
            </div>
            <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', $exercise->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="duration">Czas trwania (min)</label>
                <input type="number" class="form-control" id="duration" name="duration" value="{{ old('duration', $exercise->duration) }}" required min="1">
            </div>
            <div class="form-group">
                <label for="calories_burned">Spalone kalorie</label>
                <input type="number" class="form-control" id="calories_burned" name="calories_burned" value="{{ old('calories_burned', $exercise->calories_burned) }}" required min="1">
            </div>
            <button type="submit" class="btn btn-success mt-3">Zapisz zmiany</button>
        </form>
    </div>
@endsection
