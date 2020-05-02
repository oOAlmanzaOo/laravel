<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>Ejemplo con Eloquent</title>

    <style>

    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    a{

      text-decoration: none;
      color: #000;

    }

    </style>

  </head>
  <body>

    <h1>Hola Fabian estos son ejemplos con Eloquent</h1>

    <ul>

      <li><a href="/ejemplos_eloquent/ejemplo_1">Peticion de datos sintaxis</a></li>
      <li><a href="/ejemplos_eloquent/ejemplo_2/11">Mandar parametro: 11</a></li>
      <li><a href="/ejemplos_eloquent/usuario">Relacion de tablas</a></li>

    </ul>

    @if (isset($idf1))

      <b>Forma 1</b>
      {{ $idf1->nombre }}

    @endisset
    @if (isset($id))

      <b>Forma 2</b>
      {{ $id->nombre }}

    @endisset

  </body>
</html>
