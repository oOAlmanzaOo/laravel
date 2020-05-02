@extends('layouts.layout_form') <!-- Aqui extienes a un layout -->

@section('titulo', 'Consulta') <!-- Escribir en el yield -->

@section('style')

<style>

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

  tr th:nth-child(2) {

    border-right: none;

  }

  td{

    border-bottom: solid 1px #000000;

  }

</style>

@endsection

@section('body')

@if (@isset($show))

  <table>
    <tr>
      <th>nombre</th>
      <th>correo</th>
    </tr>
  @foreach ($show as $valor)
    <tr>
      <td>{{ $valor->nombre }}</td>
      <td>{{ $valor->correo }}</td>
    </tr>
  @endforeach
  </table>
@endif

@endsection
