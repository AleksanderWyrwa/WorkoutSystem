<!-- resources/views/exercises/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dodaj nowe ćwiczenie</h1>
        <form action="{{ route('exercises.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nazwa</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="duration">Czas trwania (min)</label>
                <input type="number" class="form-control" id="duration" name="duration" required min="1">
            </div>
            <div class="form-group">
                <label for="calories_burned">Spalone kalorie</label>
                <input type="number" class="form-control" id="calories_burned" name="calories_burned" required min="1">
            </div>
            <button type="submit" class="btn btn-success mt-3">Zapisz</button>
        </form>
    </div>
@endsection
