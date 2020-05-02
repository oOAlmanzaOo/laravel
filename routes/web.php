<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::accion(...);

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/error', function ()
{
    return view('error');
});

//Route::resource('con_eje_1', 'con_eje_1@saludo');

//**************Ejemplos con rutas**************

Route::get('/ejemplos_rutas', function()
{
  // code...
    return view('rutas');

});

//Route::get('/url', 'controlador')->name('nombre');

Route::get('/con_eje_1_saludo', 'con_eje_1@saludo')->name('con.eje.1.saludo');

//Route::get('/url/{variable}', 'controlador') pasar parametro por url (obligatorio)

Route::get('/con_eje_1_ver1/{id}', 'con_eje_1@ver1');

//Route::get('/url/{variable?}', 'controlador') pasar parametro por url (oopcionar)

Route::get('/con_eje_1_ver2/{id?}', 'con_eje_1@ver2');

//Route::get('/url/{variable}', 'controlador') pasar parametro por nombre de ruta (obligatorio)

Route::get('/con_eje_1_ver1_nombre/{id}', 'con_eje_1@ver1')->name('con.eje.1.ver1.nombre');

//Route::get('/url/{variable?}', 'controlador') pasar parametro por nombre de ruta (opcional)

Route::get('/con_eje_1_ver2_nombre/{id?}', 'con_eje_1@ver2')->name('con.eje.1.ver2.nombre');

//**********************************************

//**************Ejemplos con middleware**************

//crear en artisan y declarar en kernel dentro de la carpeta app/Http

Route::get('/ejemplos_middlewares', function()
{
  // code...
    return view('middlewares');

});

//ejemplo 1 puedes asignar mas de un middleware ->middleware('uno', 'dos'..);
Route::get('/con_eje_2/{id?}', 'con_eje_2@index')->middleware('middwa1');

//ejemplo 2
Route::group(['prefix' => 'administrador', 'middleware' => 'middwa1', 'as' => 'eje1.'], function ()
{
  // code...
  Route::get('/con_eje_2/{id?}', 'con_eje_2@index');

});

//**********************************************

//**************Uso de blade**************

Route::get('/ejemplos_blades', function()
{
  // code...
    return view('blades');

});

//pedir una vista a un controlador
Route::get('/ejemplos_blades/ejemplo_1', 'con_eje_1@blade_eje_1')->name('blade_eje_1');

Route::get('/ejemplos_blades/ejemplo_2', 'con_eje_1@blade_eje_2')->name('blade_eje_1');

//**********************************************

//**************Uso de eloquent**************

Route::get('/ejemplos_eloquent', function()
{
  // code...
    return view('eloquent');

});

Route::group(['prefix' => '/ejemplos_eloquent'], function ()
{

  Route::get('/ejemplo_1', 'con_eje_1@eloquent_eje_1');
  Route::get('/ejemplo_2/{id}', 'con_eje_1@eloquent_eje_2');
  Route::get('/ejemplo_2', 'con_eje_1@eloquent_eje_2');

  Route::get('/usuario', 'control_usu@index');

});


//**********************************************

//**************Uso de dormularios**************

Route::get('/ejemplo_CRUD', function()
{
  // code...
    return view('CRUD');

});

Route::group(['prefix' => '/ejemplo_CRUD'], function ()
{

  Route::get('/form_crear', function (){ return view('view.form_crear'); });

  Route::resource('/crear', 'con_eje_2');

});

//**********************************************
