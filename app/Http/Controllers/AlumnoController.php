<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use App\Alumn;

use function GuzzleHttp\Promise\all;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Alumn::all();
        return $datos;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumnoSecretaria');
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
            $alumn = new Alumn;

            $alumn->nombre = $request->nombre;
            $alumn->apellidoP = $request->apellidoP;
            $alumn->apellidoM = $request->apellidoM;
            $alumn->curp = $request->curp;
            $alumn->telefono = $request->telefono;
            $alumn->edad = $request->edad;
            $alumn->sexo = $request->sexo;
            $alumn->sangre = $request->sangre;
            $alumn->fechaNacimiento = $request->fechaN;
            $alumn->lugarNacimiento = $request->lugarN;
            $alumn->nacionalidad = $request->nacionalidad;
            $alumn->grado = $request->grado;
            $alumn->grupo = $request->grupo;
            $alumn->direccion = $request->direccion;
            $alumn->colonia = $request->colonia;
            $alumn->cp = $request->cp;
            $alumn->entidad = $request->entidad;
            $alumn->ciudad = $request->ciudad;
            $alumn->tutor_id = $request->idtutor;

            $alumn->save();
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
        
        $alumno = Alumn:: findOrFail($id);
        return $alumno;
        
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
            $alumno = Alumn::findOrFail($id);
            $alumno->nombre = $request->nombre;
            $alumno->apellidoP = $request->apellidoP;
            $alumno->apellidoM = $request->apellidoM;
            $alumno->curp = $request->curp;
            $alumno->telefono = $request->telefono;
            $alumno->edad = $request->edad;
            $alumno->sexo = $request->sexo;
            $alumno->sangre = $request->sangre;
            $alumno->fechaNacimiento = $request->fechaN;
            $alumno->lugarNacimiento = $request->lugarN;
            $alumno->nacionalidad = $request->nacionalidad;
            $alumno->grado = $request->grado;
            $alumno->grupo = $request->grupo;
            $alumno->direccion = $request->direccion;
            $alumno->colonia = $request->colonia;
            $alumno->cp = $request->cp;
            $alumno->entidad = $request->entidad;
            $alumno->ciudad = $request->ciudad;

            $alumno->update();
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
        $alumno = Alumn::findOrFail($id);
        $alumno->estado = "Baja";
        $alumno->update();

        $datos = array(
            "nombre" => $alumno->nombre,
            "apellidoP" => $alumno->apellidoP,
            "apellidoM" => $alumno->apellidoM
        );
        return $datos;
    }

    public function constancia($id){
      return $id;   
    }
}
