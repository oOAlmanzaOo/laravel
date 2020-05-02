<?php

//php artisan make_controller __nombre__ --resource

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entities\usuarios;

class con_eje_2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $show = usuarios::select('nombre', 'correo')->get();

        #***********************************************

        return view('view.consultar', [

          'show' => $show

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $create = usuarios::select('id', 'nombre', 'correo')->get();

      #***********************************************

      return view('view.editar', compact('create'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      #opcion 1

      $usuario = new usuarios;

      $usuario->nombre = $request->input('nombre');
      $usuario->correo = $request->input('correo');
      $usuario->password = $request->input('pswd');

      $usuario->save();

      #***********************************************

      return view('CRUD',
        [

          'store' => 'completada'

        ]
      );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $show = usuarios::findOrFail($id);

      return view('view.editar', compact('show'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $edit = usuarios::select('id', 'nombre', 'correo')->where('id', '=', $id)->get();

      return view('view.editar', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      //para editar necesitas especificar las columnas que podras editar con $fillable = ['', ..]; en el modelo

        $update = usuarios::findOrFail($id);

        $update->update($request->all());

        return redirect('/ejemplo_CRUD/crear/create');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $update = usuarios::findOrFail($id);

      $update->delete();

      return redirect('/ejemplo_CRUD/crear/create');
    }
}
