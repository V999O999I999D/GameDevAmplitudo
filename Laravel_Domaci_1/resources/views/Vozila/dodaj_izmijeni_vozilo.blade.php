@extends('Vozila.index')

<style>
    .label{
        text-align: right;
    }
</style>

@section('title')
    <title>{{ isset($vozilo) ? 'Izmijeni vozilo' : 'Dodaj vozilo' }}</title>
@endsection

@section('content')

    <h2>{{ isset($vozilo) ? 'Izmijeni vozilo' : 'Dodaj vozilo' }}</h2>

    <form action="{{ $route }}" method="POST">
        @csrf
        @if(isset($vozilo) && $route === "/vehicle/$vozilo->id")
            @method('PUT')
        @endif

        <table  style="border-collapse: collapse">
            <tr>
                <td class="label">
                    <label for="proizvodjac">Proizvodjac: </label>
                </td>
                <td>
                    <input type="text"
                           name="proizvodjac"
                           id="proizvodjac"
                           value="{{ isset($vozilo) ? $vozilo->proizvodjac:old('proizvodjac') }}"
                           required
                    >
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="model">Model: </label>
                </td>
                <td>
                    <input type="text"
                           name="model"
                           id="model"
                           value="{{ isset($vozilo) ? $vozilo->model:old('model') }}"
                           required
                    >
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="godina_proizvodnje">Godina proizvodnje: </label>
                </td>
                <td>
                    <input type="text"
                           name="godina_proizvodnje"
                           id="godina_proizvodnje"
                           value="{{ isset($vozilo) ? $vozilo->godina_proizvodnje:old('godina_proizvodnje') }}"
                           required
                    >
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="registarske_oznake">Registarske oznake: </label>
                </td>
                <td>
                    <input type="text"
                           name="registarske_oznake"
                           id="registarske_oznake"
                           value="{{ isset($vozilo) ? $vozilo->registarske_oznake:old('registarske_oznake') }}"
                    >
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="broj_vrata">Broj vrata: </label>
                </td>
                <td>
                    <input type="text"
                           name="broj_vrata"
                           id="broj_vrata"
                           value="{{ isset($vozilo) ? $vozilo->broj_vrata:old('broj_vrata') }}"
                           required
                    >
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="boja">Boja: </label>
                </td>
                <td>
                    <input type="text"
                           name="boja"
                           id="boja"
                           value="{{ isset($vozilo) ? $vozilo->boja:old('boja') }}"
                           required
                    >
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="tip_pogonskog_goriva">Tip pogonskog goriva: </label>
                </td>
                <td>
                    <input type="text"
                           name="tip_pogonskog_goriva"
                           id="tip_pogonskog_goriva"
                           value="{{ isset($vozilo) ? $vozilo->tip_pogonskog_goriva:old('tip_pogonskog_goriva') }}"
                           required
                    >
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="zapremina_motora">Zapremina motora: </label>
                </td>
                <td>
                    <input type="text"
                           name="zapremina_motora"
                           id="zapremina_motora"
                           value="{{ isset($vozilo) ? $vozilo->zapremina_motora:old('zapremina_motora') }}"
                    >
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="snaga_motora">Snaga motora: </label>
                </td>
                <td>
                    <input type="text"
                           name="snaga_motora"
                           id="snaga_motora"
                           value="{{ isset($vozilo) ? $vozilo->snaga_motora:old('snaga_motora') }}"
                    >
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: right">
                    <input type="submit" value="Izmijeni" style="margin-top: 5px">
                </td>
            </tr>
        </table>

    </form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color:red;">{{ $error }}</p>
        @endforeach
    @endif

@endsection
