<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>Ejemplo CRUD</title>

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

    <h1>Hola Fabian este es un ejemplo de CRUD</h1>

    <ul>

      <li><a href="/ejemplo_CRUD/form_crear">Formulario crear</a></li>
      <li><a href="/ejemplo_CRUD/crear">Mostrar tabla 'table_user'</a></li>
      <li><a href="/ejemplo_CRUD/crear/create">Editar</a></li>

    </ul>

    @if (isset($store))

      <h6>Se registro un nuevo usuario</h6>

    @endif

  </body>
</html>
