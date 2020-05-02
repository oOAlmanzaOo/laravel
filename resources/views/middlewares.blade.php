<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>Ejemplo con middlewares</title>

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

    <h1>Hola Fabian estos son ejemplos con middlewares</h1>

    <ul>

      <li>Ejemplo Middleware 1 asignar middleware

        <ul>

          <li><a href="/con_eje_2/123">Mandar id 123</a></li>
          <li><a href="/con_eje_2">No mandar id 123</a></li>

        </ul>

      </li>
      <li>Ejemplo Middleware 2 agrupando y asignando middleware

        <ul>

          <li><a href="administrador/con_eje_2/123">Mandar id 123</a></li>
          <li><a href="administrador/con_eje_2">No mandar id 123</a></li>

        </ul>

      </li>


    </ul>

  </body>
</html>
