@extends('layouts.layout_basico') <!-- Aqui extienes a un layout -->

@section('titulo', 'Ejemplo 1') <!-- Escribir en el yield -->

@section('style') <!-- Aqui mandas informacion al yield que se especifica -->

<style>

ul{

  padding: 0;

}

li{

  display: inline-block;
  list-style: none;
  padding-left: 2rem;

}

a{

  color: #000000;
  text-decoration: none;

}

a:hover{

  color: #555555;

}

</style>

@endsection <!-- cerramos el section -->

@section('header')

@include('partials.header_1') <!-- Para incluir algun documento -->

@endsection

@section('body')

<h1>Hola</h1>

@endsection

@section('footer')

@endsection
