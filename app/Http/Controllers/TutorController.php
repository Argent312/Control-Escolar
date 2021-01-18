<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;
use App\Alumn;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $tutor = new Tutor;
            $tutor->nombre = $request->nombre;
            $tutor->apellidoP = $request->apellidoP;
            $tutor->apellidoM = $request->apellidoM;
            $tutor->domicilio = $request->domicilio;
            $tutor->ciudad = $request->ciudad;
            $tutor->colonia = $request->colonia;
            $tutor->ocupacion = $request->ocupacion;
            $tutor->telCasa = $request->telCasa;
            $tutor->telTrabajo = $request->telTrabajo;
            $tutor->celular = $request->celular;

            $tutor->save();
            $id_tutor = $tutor->id;
            return $id_tutor;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutor = Tutor::findOrFail($id);
        return $tutor;
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
        if ($request->ajax()) {
            $tutor = Tutor::findOrFail($id);

            $tutor->nombre = $request->nombre;
            $tutor->apellidoP = $request->apellidoP;
            $tutor->apellidoM = $request->apellidoM;
            $tutor->domicilio = $request->domicilio;
            $tutor->ciudad = $request->ciudad;
            $tutor->colonia = $request->colonia;
            $tutor->ocupacion = $request->ocupacion;
            $tutor->telCasa = $request->telCasa;
            $tutor->telTrabajo = $request->telTrabajo;
            $tutor->celular = $request->celular;

            $tutor->update();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
