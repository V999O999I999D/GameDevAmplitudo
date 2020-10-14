<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model{

    use HasFactory;

    protected $fillable = [
        'proizvodjac',
        'model',
        'godina_proizvodnje',
        'registarske_oznake',
        'broj_vrata',
        'boja',
        'tip_pogonskog_goriva',
        'zapremina_motora',
        'snaga_motora'
    ];

}
