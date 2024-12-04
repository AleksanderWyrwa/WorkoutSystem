<!-- resources/views/exercises/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ćwiczenia</h1>
        <a href="{{ route('exercises.create') }}" class="btn btn-primary mb-3">Dodaj nowe ćwiczenie</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nazwa</th>
                    <th>Opis</th>
                    <th>Czas trwania (min)</th>
                    <th>Spalone kalorie</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach($exercises as $exercise)
                    <tr>
                        <td>{{ $exercise->id }}</td>
                        <td>{{ $exercise->name }}</td>
                        <td>{{ $exercise->description }}</td>
                        <td>{{ $exercise->duration }}</td>
                        <td>{{ $exercise->calories_burned }}</td>
                        <td>
                            <a href="{{ route('exercises.show', $exercise->id) }}" class="btn btn-info">Pokaż</a>
                            <a href="{{ route('exercises.edit', $exercise->id) }}" class="btn btn-warning">Edytuj</a>
                            <form action="{{ route('exercises.destroy', $exercise->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Usuń</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
