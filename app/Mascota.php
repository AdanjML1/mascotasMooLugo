<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    //
    protected $table='mascotas';
    protected $primaryKey='id_mascota';

    public $timestamps=false;

    public $fillable=[
    	'id_mascota',
    	'id_especie',
    	'id_raza',
    	'id_propietario',
    	'nombre',
    	'edad',
    	'peso',
    	'genero'
    ];


}
