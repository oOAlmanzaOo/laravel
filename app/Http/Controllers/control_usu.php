<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entities\usuarios;
use App\Entities\informacion;

use App\Repositories\UsuarioRepository;//uso de repositorios

class control_usu extends Controller
{
    //

    public function __construct(UsuarioRepository $usuario)
    {

      $this->usuario = $usuario;

    }

    public function index()
    {
      // code...

      $usu = $this->usuario->buscar_usu(4);
      echo 'Nombre: ' . $usu->nombre;

      echo '<br><hr><br>';

      $usu_info = $this->usuario->buscar_usu_con_inf(4);

      foreach ($usu_info as $valor) {

        echo 'Nombre: ' . $valor->nombre;
        echo '<br>';
        echo 'Apellido: ' . $valor->apellido;

      }

      echo '<br><hr><br>';

      //$usu->informacion()->attach(4);

    }

}
