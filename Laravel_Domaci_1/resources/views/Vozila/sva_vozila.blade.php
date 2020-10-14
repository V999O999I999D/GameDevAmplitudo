@extends('Vozila.index')

@section('title')
    <title>Sva vozila</title>
@endsection

@section('content')

    <h1 style="text-align: center">Sva vozila</h1>

    <div style="text-align: center">
        <a href="/vehicle/create">
            <button>Dodaj Vozilo</button>
        </a>
    </div>

    @foreach($vozila as $vozilo)
        <div>
            <h2>Proizvodjac: {{ $vozilo->proizvodjac }}</h2>
            <h3>Model: {{ $vozilo->model }}</h3>
            <div>
                <a href="/vehicle/{{ $vozilo->id }}">
                    <button>Pogledaj vise</button>
                </a>
            </div>
        </div>
        <hr>
    @endforeach

@endsection
