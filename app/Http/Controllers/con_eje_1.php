<?php

//comando: php artisan make:controller ___nombre____

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//para llamar un modelo use App\Entities\modelo
//para llamar varios modelos use App\Entities\{modelo1, modelo2}

use App\Entities\model_ejemplo_1;

use Carbon\Carbon;

class con_eje_1 extends Controller
{
    //

    public function saludo()
    {
      // code...

      echo "Te saluda el controlador \"con_eje_1\". La fecha y hora es: ";

      $mutable = Carbon::now();

      echo $mutable;

    }

    public function ver1($variable)
    {
      // code...

      echo "El valor que enviaste es $variable";

    }

    public function ver2($variable = null)
    {
      // code...

      echo "El valor que enviaste es $variable";

    }

    public function blade_eje_1()
    {
      // code...

      return view('view/blade_eje_1');

    }

    public function blade_eje_2()
    {
      // code...

      return view('view/blade_eje_2',
        [
          'mensaje' => 'mensaje',
          'html' => '<h1>html</h1>',
        ]
      );

    }

    //eloquent
    //get es para traer todos los resultados
    //first para traer el primer resultado
    public function eloquent_eje_1()
    {

      //para traer toda la tabla
      $result = model_ejemplo_1::all();

      echo 'Ejemplo con <b>all()</b>';

      echo '<table border=1>';

      echo '<tr><th>id</th><th>nombre</th><th>apellido</th><th>correo</th></tr>';

      foreach ($result as $valor) {

        echo '<tr>';
        echo '<td>' . $valor->id . '</td>';
        echo '<td>' . $valor->nombre . '</td>';
        echo '<td>' . $valor->apellido . '</td>';
        echo '<td>' . $valor->correo . '</td>';
        echo '</tr>';

      }

      echo '<table><br><hr><br>';

      //para usar un where
      $result = model_ejemplo_1::where('id', '<', 13)->get();

      echo "Ejemplo con <b>where('campo', 'operador', valor)->get()</b>";

      echo '<table border=1>';

      echo '<tr><th>id</th><th>nombre</th><th>apellido</th><th>correo</th></tr>';

      foreach ($result as $valor) {

        echo '<tr>';
        echo '<td>' . $valor->id . '</td>';
        echo '<td>' . $valor->nombre . '</td>';
        echo '<td>' . $valor->apellido . '</td>';
        echo '<td>' . $valor->correo . '</td>';
        echo '</tr>';

      }

      echo '<table><br><hr><br>';

      //para usar doble where
      $result = model_ejemplo_1::where('id', '>', 14)->where('id', '<', 16)->get();

      echo "Ejemplo con <b>multimples where('campo', 'operador', valor)->where('campo', 'operador', valor)->..->get()</b>";

      echo '<table border=1>';

      echo '<tr><th>id</th><th>nombre</th><th>apellido</th><th>correo</th></tr>';

      foreach ($result as $valor) {

        echo '<tr>';
        echo '<td>' . $valor->id . '</td>';
        echo '<td>' . $valor->nombre . '</td>';
        echo '<td>' . $valor->apellido . '</td>';
        echo '<td>' . $valor->correo . '</td>';
        echo '</tr>';

      }

      echo '<table><br><hr><br>';

      //para buscar por id
      $result = model_ejemplo_1::find(19);

      echo "Ejemplo con <b>find(valor) Nota:</b> solo usa el campo id";

      echo '<table border=1>';

      echo '<tr><th>id</th><th>nombre</th><th>apellido</th><th>correo</th></tr>';

      echo '<tr>';
      echo '<td>' . $result->id . '</td>';
      echo '<td>' . $result->nombre . '</td>';
      echo '<td>' . $result->apellido . '</td>';
      echo '<td>' . $result->correo . '</td>';
      echo '</tr>';

      echo '<table><br><hr><br>';

      //count - select conunt(*) from table
      $result = model_ejemplo_1::count();

      echo $result;

      //para buscar usando operador like
      $result = model_ejemplo_1::where('nombre', 'like', 'L%')->limit(10)->get();

      echo "Ejemplo con <b>where('nombre', 'like', 'L%')->get()</b>";

      echo '<table border=1>';

      echo '<tr><th>id</th><th>nombre</th><th>apellido</th><th>correo</th></tr>';

      foreach ($result as $valor) {

        echo '<tr>';
        echo '<td>' . $valor->id . '</td>';
        echo '<td>' . $valor->nombre . '</td>';
        echo '<td>' . $valor->apellido . '</td>';
        echo '<td>' . $valor->correo . '</td>';
        echo '</tr>';

      }

      echo '<table><br><hr><br>';

      //para buscar usando operador like
      $result = model_ejemplo_1::whereBetween('id', [13, 15])->get();

      echo "Ejemplo con <b>whereBetween('id', [13, 15])->get()</b>";

      echo '<table border=1>';

      echo '<tr><th>id</th><th>nombre</th><th>apellido</th><th>correo</th></tr>';

      foreach ($result as $valor) {

        echo '<tr>';
        echo '<td>' . $valor->id . '</td>';
        echo '<td>' . $valor->nombre . '</td>';
        echo '<td>' . $valor->apellido . '</td>';
        echo '<td>' . $valor->correo . '</td>';
        echo '</tr>';

      }

    }

    public function eloquent_eje_2($valor)
    {
      // code...

      $id = model_ejemplo_1::find($valor);

      // Forma 1
      $datos = ['idf1' => $id];
      return view('eloquent', $datos);

      // Forma 2
      //return view('eloquent')->with(compact('id'));

    }

}
