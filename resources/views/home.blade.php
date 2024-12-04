<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Witaj w aplikacji Fitness!</h1>
        <p class="lead">Zarządzaj swoimi treningami, ćwiczeniami i wynikami w jednym miejscu.</p>
        <hr class="my-4">
        <p>Rozpocznij swoją przygodę z fitnessu:</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Treningi</h5>
                        <p class="card-text">Zarządzaj swoimi treningami. Dodawaj nowe, edytuj i przeglądaj wykonane treningi.</p>
                        <a href="{{ route('workouts.index') }}" class="btn btn-primary">Zobacz treningi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ćwiczenia</h5>
                        <p class="card-text">Dodawaj nowe ćwiczenia, edytuj je i przypisuj do treningów.</p>
                        <a href="{{ route('exercises.index') }}" class="btn btn-primary">Zobacz ćwiczenia</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Wyniki</h5>
                        <p class="card-text">Zarządzaj swoimi wynikami. Zapisuj dane dotyczące wykonanych treningów.</p>
                        <a href="{{ route('workout_results.index') }}" class="btn btn-primary">Zobacz wyniki</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
