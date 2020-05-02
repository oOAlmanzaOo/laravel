@extends('layouts.layout_form') <!-- Aqui extienes a un layout -->

@section('titulo', 'Editar') <!-- Escribir en el yield -->

@section('style')

<style>

  html, body{

    width: 100%;
    height: 100%;

  }

  html, body{

    width: 100%;
    height: 100%;

  }

  table{

    position: absolute;

    top: 50%;
    left: 50%;

    transform: translate( -50%, -50%);

    text-align: center;

  }

  th{

    width: 6rem;

    border-right: solid 1px #000000;
    border-bottom: solid 1px #000000;

  }

  tr th:nth-child(4) {

    border-right: none;

  }

  td{

    border-bottom: solid 1px #000000;

  }

  #editar{

    position: absolute;

    top: 50%;
    left: 50%;

    transform: translate( -50%, -50%);

    text-align: center;

  }

  #editar input{

    margin: 0.3rem;

  }

  .borrar{

    padding: 0;
    margin: 0;
    border: none;
    background: transparent;


  }

</style>

@endsection

@section('body')

@if (isset($create))

  <table>
    <tr>
      <th>id</th>
      <th>nombre</th>
      <th>correo</th>
      <th>accion</th>
    </tr>
  @foreach ($create as $valor)
    <tr>
      <td>{{ $valor->id }}</td>
      <td>{{ $valor->nombre }}</td>
      <td>{{ $valor->correo }}</td>
      <td><a href="/ejemplo_CRUD/crear/{{ $valor->id }}/edit">Editar</a>

        <form action="/ejemplo_CRUD/crear/{{ $valor->id }}" method="post">

          @csrf

          <input class="borrar" type="submit" value="Borrar">

          <input type="hidden" name="_method" value="DELETE">

        </form>

      </td>
    </tr>
  @endforeach
  </table>

@endif

@if (isset($edit))

  @foreach ($edit as $valor)

    <form id="editar" method="post" action="/ejemplo_CRUD/crear/{{ $valor->id }}">

      @csrf

      <label><h1>Editar</h1></label>

      <input type="hidden" id="id" name="id" value="{{ $valor->id }}">

      <input type="text" id="nombre" name="nombre" value="{{ $valor->nombre }}" required>
      <br>
      <input type="email" id="correo" name="correo" value="{{ $valor->correo }}" required>

      <br>

      <input type="submit" value="Aceptar">

      <input type="hidden" name="_method" value="PUT">

    </form>

  @endforeach

@endif

@endsection
