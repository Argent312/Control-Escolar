<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use App\Alumn;
use App\Alumno;
use PDF;

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
            $alumno = new Alumno;

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
            $alumn->turno = $request->turno;
            $alumn->direccion = $request->direccion;
            $alumn->colonia = $request->colonia;
            $alumn->cp = $request->cp;
            $alumn->entidad = $request->entidad;
            $alumn->ciudad = $request->ciudad;
            $alumn->tutor_id = $request->idtutor;

            $alumn->save();

            $alumno->nombre = $request->nombre;
            $alumno->apellidoPaterno = $request->apellidoP;
            $alumno->apellidoMaterno = $request->apellidoM;
            $alumno->curp = $request->curp;
            $alumno->telEmergencia = $request->telefono;
            $alumno->edad = $request->edad;
            $alumno->sexo = $request->sexo;
            $alumno->tipoSangre = $request->sangre;
            $alumno->fechaNacimiento = $request->fechaN;
            $alumno->tecnologia = $request->tecnologia;
            $alumno->nacionalidad = $request->nacionalidad;

            $alumno->estadoAlumno = "Activo";
            $alumno->direccion = $request->direccion;
            $alumno->colonia = $request->colonia;
            $alumno->codigoPostal = $request->cp;
            $alumno->entidad = $request->entidad;


            $alumno->save();
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

        $alumno = Alumn::findOrFail($id);
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
            $alumn = Alumno::findOrFail($id);

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
            $alumno->turno = $request->turno;
            $alumno->direccion = $request->direccion;
            $alumno->colonia = $request->colonia;
            $alumno->cp = $request->cp;
            $alumno->entidad = $request->entidad;
            $alumno->ciudad = $request->ciudad;

            $alumno->update();

            $alumn->nombre = $request->nombre;
            $alumn->apellidoPaterno = $request->apellidoP;
            $alumn->apellidoMaterno = $request->apellidoM;
            $alumn->curp = $request->curp;
            $alumn->telEmergencia = $request->telefono;
            $alumn->edad = $request->edad;
            $alumn->sexo = $request->sexo;
            $alumn->tipoSangre = $request->sangre;
            $alumn->fechaNacimiento = $request->fechaN;
            $alumn->tecnologia = $request->tecnologia;
            $alumn->nacionalidad = $request->nacionalidad;

            $alumn->turno = $request->turno;
            $alumn->direccion = $request->direccion;
            $alumn->colonia = $request->colonia;
            $alumn->codigoPostal = $request->cp;
            $alumn->entidad = $request->entidad;
            $alumn->ciudad = $request->ciudad;

            $alumn->update();
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
        $alumn = Alumno::findOrFail($id);
        $alumno->estado = "Baja";
        $alumn->estadoAlumno = "Baja";
        $alumno->update();

        $datos = array(
            "nombre" => $alumno->nombre,
            "apellidoP" => $alumno->apellidoP,
            "apellidoM" => $alumno->apellidoM
        );
        return $datos;
    }

    public function constancia($id)
    {
    }
}
