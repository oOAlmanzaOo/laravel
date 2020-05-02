<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
  //para especificar una tabla se usa protected $table = 'nombre de tabla';
  protected $table = 'table_user';

  //para especificar que campos va a poder usar se usa protected $fillable = ['', ..];
  protected $fillable = ['id', 'nombre', 'correo'];

  public function informacion()
  {

    return $this->hasOne(informacion::class);

  }

}
