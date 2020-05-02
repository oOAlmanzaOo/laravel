<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>Ejemplo con rutas</title>

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

    <h1>Hola Fabian estos son ejemplos con rutas</h1>

    <ul>

      <li><a href="/con_eje_1_saludo">Conectar con un controlador por url</a></li>
      <li><a href="{{ route('con.eje.1.saludo') }}">Conectar con un controlador por nombre de ruta</a></li>
      <li>Paso de parametros por url (obligado el parametro)

        <ul>

          <li><a href="/con_eje_1_ver1/abc">Mandar parametro abc</a></li>
          <li><a href="/con_eje_1_ver1/">No mandar parametro</a></li>

        </ul>

      </li>
      <li>Paso de parametros por nombre (obligado el parametro)

        <ul>

          <li><a href="{{ route('con.eje.1.ver1.nombre', ['id' => 123]) }}">Mandar parametro 123</a></li>

        </ul>

      </li>
      <li>Paso de parametros por url (opcional el parametro)

        <ul>

          <li><a href="/con_eje_1_ver2/cba">Mandar parametro cba</a></li>
          <li><a href="/con_eje_1_ver2/">No mandar parametro</a></li>

        </ul>

      </li>
      <li>Paso de parametros por nombre (opcional el parametro)

        <ul>

          <li><a href="{{ route('con.eje.1.ver2.nombre', ['id' => 'bca']) }}">Mandar parametro bca</a></li>
          <li><a href="{{ route('con.eje.1.ver2.nombre') }}">No mandar parametro</a></li>

        </ul>

      </li>

    </ul>

  </body>
</html>
