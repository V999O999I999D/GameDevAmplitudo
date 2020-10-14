<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){

        $vozila = Vehicle::get();

        return view('Vozila.sva_vozila', [
            'vozila' => $vozila
        ]);

    }


    public function create(){

        $route = '/vehicle';

        return view('Vozila.dodaj_izmijeni_vozilo', [
            'route' => $route
        ]);

    }


    public function store(Request $request){

        $godina = now()->year;

        Vehicle::create($request->validate([
            'proizvodjac' => 'required',
            'model' => 'required',
            'godina_proizvodnje' => "required|integer|before:$godina",
            'registarske_oznake' => 'max:7',
            'broj_vrata' => 'required|integer|min:2|max:4',
            'boja' => 'required',
            'tip_pogonskog_goriva' => 'required',
            'zapremina_motora' => 'nullable|numeric',
            'snaga_motora' => 'nullable|numeric',
        ]));

        return redirect('/');

    }


    public function show($id){

        $vozilo = Vehicle::get()->where('id', $id)->first();

        return view('Vozila.vozilo', [
            'vozilo' => $vozilo
        ]);

    }

    public function edit($id){

        $route = "/vehicle/$id";
        $vozilo = Vehicle::get()->where('id', $id)->first();

        return view('Vozila.dodaj_izmijeni_vozilo', [
            'route' => $route,
            'vozilo' => $vozilo
        ]);

    }


    public function update(Request $request, $id){

        $godina = now()->year;
        $vozilo = Vehicle::get()->where('id', $id)->first();

        $vozilo->update($request->validate([
            'proizvodjac' => 'required',
            'model' => 'required',
            'godina_proizvodnje' => "required|integer|before:$godina",
            'registarske_oznake' => 'max:7',
            'broj_vrata' => 'required|integer|min:2|max:4',
            'boja' => 'required',
            'tip_pogonskog_goriva' => 'required',
            'zapremina_motora' => 'nullable|numeric',
            'snaga_motora' => 'nullable|numeric',
        ]));

        return redirect("/vehicle/$vozilo->id");

    }


    public function destroy($id){

        Vehicle::get()->where('id', $id)->first()->delete();

        return redirect('/');

    }
}
