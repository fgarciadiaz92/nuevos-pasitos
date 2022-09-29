<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prueba;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Prueba::with('tipoCalificacion')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $request=$request->all();
        $prueba=new Prueba([
            "nombre_prueba"=>$request['nombre_prueba'],
            "descripcion_prueba"=>$request['descripcion_prueba'],
            "cantidad_preguntas"=>$request['cantidad_preguntas'],
            "duracion_prueba"=>$request['duracion_prueba'] . ' min',
            "autor_prueba"=>$request['autor_prueba'],
            "estado_prueba"=>$request['estado_prueba'],
            "cantidad_alumnos"=>$request['cantidad_alumnos'],
        ]);
        $prueba->save();
        return response()->json([$prueba]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!empty($id)){

            return Prueba::find($id);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        Prueba::find($id)->delete();
        return response()->json(['status'=>'OK','data'=>'Dato Eliminado Correctamente'],200);
    }
}
