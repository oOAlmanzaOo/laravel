<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>@yield('titulo')</title>

    <style>

    html, body {

        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;

    }

    </style>

    @yield('style')

  </head>
  <body>

    <!-- Estas usando el layout 'layout_basico' -->

      <header>

        @yield('header')

      </header>

      <div>

        {{ config('app.name', 'Laravel') }}

        @yield('body');

      </div>

      <footer>

        @yield('footer');

      </footer>

  </body>
</html>
