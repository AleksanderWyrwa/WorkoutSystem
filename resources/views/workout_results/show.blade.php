@extends('layouts.app')

@section('content')
    <h1>Wynik treningu: {{ $result->workout->name }}</h1>

    <p><strong>Data:</strong> {{ $result->date }}</p>
    <p><strong>Wynik:</strong> {{ $result->performance }}</p>

    <a href="{{ route('workout_results.index') }}" class="btn btn-primary">Powrót do listy</a>
@endsection
