<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class informacion extends Model
{
    //para especificar una tabla se usa protected $table = 'nombre de tabla';
    protected $table = 'table_info';

    //para especificar que campos va a poder usar se usa protected $fillable = ['', ..];
    protected $fillable = ['apellido', 'calle', 'telefono'];

    //Para hacer relaciones
    public function usuarios()
    {

      return $this->hasOne(usuarios::class);

    }

}
