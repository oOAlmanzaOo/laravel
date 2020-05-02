<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

//BD -> model_ejemplo_1: usa la tabla que tenga el nombre de la clase

class model_ejemplo_1 extends Model
{
    //para especificar una tabla se usa protected $table='nombre de tabla'

    protected $table='faker';


}
