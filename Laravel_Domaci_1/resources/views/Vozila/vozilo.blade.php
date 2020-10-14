@extends('Vozila.index')

@section('title')
    <title>{{ $vozilo->proizvodjac }} {{ $vozilo->model }}</title>
@endsection


@section('content')

    <div>
        <h1>Proizvodjac: {{ $vozilo->proizvodjac }}</h1>
        <h3>Model: {{ $vozilo->model }}</h3>
        <p>Godina proizvodnje: {{ $vozilo->godina_proizvodnje }}</p>
        <p>Registarske oznake: {{ $vozilo->registarske_oznake }}</p>
        <p>Broj vrata: {{ $vozilo->broj_vrata }}</p>
        <p>Broj vrata: {{ $vozilo->boja }}</p>
        <p>Tip pogonskog goriva: {{ $vozilo->tip_pogonskog_goriva }}</p>
        <p>Zapremina motora: {{ $vozilo->zapremina_motora }}</p>
        <p>Snaga motora: {{ $vozilo->snaga_motora }}</p>
    </div>
    <div>
        <a href="/vehicle/{{ $vozilo->id }}/edit">
            <button>Izmijeni</button>
        </a>
    </div>
    <div style="margin-top: 15px">
        <form action="/vehicle/{{ $vozilo->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Obrisi">
        </form>
    </div>


@endsection
