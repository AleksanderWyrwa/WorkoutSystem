@extends('layouts.app')

@section('content')
    <h1>Wyniki treningów</h1>

    <a href="{{ route('workout_results.create') }}" class="btn btn-primary">Dodaj nowy wynik</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Trening</th>
                <th>Data</th>
                <th>Wynik</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
                <tr>
                    <td>{{ $result->workout->name }}</td>
                    <td>{{ $result->date }}</td>
                    <td>{{ $result->performance }}</td>
                    <td>
                        <form action="{{ route('workout_results.destroy', $result->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
