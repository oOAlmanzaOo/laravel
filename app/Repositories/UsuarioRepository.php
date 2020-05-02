<?php

namespace App\Repositories;

use App\Entities\usuarios;

class UsuarioRepository{

  public function buscar_usu($id)
  {

    return usuarios::find($id);

  }

  public function buscar_usu_con_inf($id)
  {

    return usuarios::join('table_info', 'table_user.id', '=', 'table_info.id')
    ->where('table_user.id', $id)
    ->getQuery()
    ->get();

  }

}

?>
