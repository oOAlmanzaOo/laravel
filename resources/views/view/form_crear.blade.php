@extends('layouts.layout_form') <!-- Aqui extienes a un layout -->

@section('titulo', 'Crear') <!-- Escribir en el yield -->

@section('style')

<style>

  html, body{

    width: 100%;
    height: 100%;

  }

  form{

    position: absolute;

    top: 50%;
    left: 50%;

    transform: translate( -50%, -50%);

    text-align: center;

  }

  form input{

    margin: 0.3rem;

  }

</style>

@endsection

@section('body')

<form method="post" action="/ejemplo_CRUD/crear">

  @csrf

  <label><h1>Crear</h1></label>

  <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
  <br>
  <input type="email" id="correo" name="correo" placeholder="Correo" required>
  <br>
  <input type="password" id="pswd" name="pswd" placeholder="Contraseña" required>

  <br>

  <input type="submit" value="Aceptar">

</form>

@endsection
