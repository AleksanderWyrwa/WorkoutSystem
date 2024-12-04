<!-- resources/views/workouts/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $workout->name }}</h1>
        <p><strong>Opis:</strong> {{ $workout->description }}</p>
        <p><strong>Czas trwania:</strong> {{ $workout->duration }} minut</p>
        <h3>Ćwiczenia w tym treningu:</h3>
        <ul>
            @foreach($workout->exercises as $exercise)
                <li>{{ $exercise->name }} - {{ $exercise->duration }} minut</li>
            @endforeach
        </ul>
        <a href="{{ route('workouts.index') }}" class="btn btn-secondary">Powrót</a>
    </div>
@endsection
