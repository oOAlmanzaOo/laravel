<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>Ejemplo 2</title>

  </head>
  <body>

      @for ($i = 1 ; $i < 4 ; $i++)

        @php

          echo "<h$i>h$i</h$i>";

        @endphp

      @endfor

      <hr>

      <p>{{ $mensaje }}</p>

      <hr>

      <p>{{ $html }}</p> {{-- Este muestra el texto tal cual --}}
      <p>{!! $html !!}</p> {{-- Este muestra el texto y permite interpretar por el navegador --}}

      <hr>

      @if (isset($valor))

        {{ $valor }}

      @else

        no existe esa variable

      @endif

      {{-- Esto es un comentario que solo se visualiza en el archivo y no en el navegador --}}

  </body>
</html>
