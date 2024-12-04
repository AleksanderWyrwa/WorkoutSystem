@extends('layouts.app')

@section('content')
    <h1>Edytuj Trening</h1>

    <form action="{{ route('workouts.update', $workout->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nazwa</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $workout->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Opis</label>
            <textarea class="form-control" id="description" name="description" required>{{ $workout->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Czas Trwania (min)</label>
            <input type="number" class="form-control" id="duration" name="duration" value="{{ $workout->duration }}" required>
        </div>

        <div class="mb-3">
            <label for="exercises" class="form-label">Wybierz ćwiczenia</label>
            <div>
                @foreach($exercises as $exercise)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exercises[]" value="{{ $exercise->id }}" id="exercise{{ $exercise->id }}"
                            @if($workout->exercises->contains($exercise->id)) checked @endif>
                        <label class="form-check-label" for="exercise{{ $exercise->id }}">
                            {{ $exercise->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-success">Zapisz Zmiany</button>
    </form>
@endsection
