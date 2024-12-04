<!-- resources/views/workouts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Treningi</h1>
        <a href="{{ route('workouts.create') }}" class="btn btn-primary mb-3">Dodaj nowy trening</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nazwa</th>
                    <th>Opis</th>
                    <th>Czas trwania (min)</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach($workouts as $workout)
                    <tr>
                        <td>{{ $workout->id }}</td>
                        <td>{{ $workout->name }}</td>
                        <td>{{ $workout->description }}</td>
                        <td>{{ $workout->duration }}</td>
                        <td>
                            <a href="{{ route('workouts.show', $workout->id) }}" class="btn btn-info">Pokaż</a>
                            <a href="{{ route('workouts.edit', $workout->id) }}" class="btn btn-warning">Edytuj</a>
                            <form action="{{ route('workouts.destroy', $workout->id) }}" method="POST" style="display:inline;">
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
