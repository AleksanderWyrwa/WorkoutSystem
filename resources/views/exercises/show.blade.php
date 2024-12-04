@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalowe ćwiczenie: {{ $exercise->name }}</h1>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Opis</h5>
                <p class="card-text">{{ $exercise->description ?: 'Brak opisu.' }}</p>

                <h5 class="card-title">Czas trwania</h5>
                <p class="card-text">{{ $exercise->duration }} minut</p>

                <h5 class="card-title">Spalone kalorie</h5>
                <p class="card-text">{{ $exercise->calories_burned }} kcal</p>
            </div>
        </div>

        <a href="{{ route('exercises.index') }}" class="btn btn-primary mt-4">Powrót do listy ćwiczeń</a>
    </div>
@endsection
