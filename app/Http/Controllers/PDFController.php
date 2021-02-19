<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodo;
use App\Alumno;
use App\Tecnologia;
use App\Calificacion;
use App\Asignacion;
use App\Trimestre;
use Illuminate\Support\Facades\DB;


class PDFController extends Controller
{
    public function show()
    {
        $grados = DB::table('asignacionmateria')->select('grado')->distinct()->get();
        $grupos = DB::table('asignacionmateria')->select('grupo')->distinct()->get();
        $materias = DB::table('materias')->get();
        $trimestres = DB::table('trimestre')->get();
        $alumnos = DB::table('alumnos')->get();

        return view('GenerarBoleta', compact('grados', 'grupos', 'materias', 'trimestres', 'alumnos'));
    }


    public function PDFPeriodos(Request $request)
    {
        $grado = $request->input('grado');
        $grupo = $request->input('grupo');
        $trimestre = $request->input('trimestre');
        $alumno = $request->input('alumno');

        $suma_total = 0;
        $array_materias = [];
        $boleta = Calificacion::where('grado', $grado)->where('grupo', $grupo)->with('alumno', 'alumno.asignacion', 'alumno.asignacion.tecnologia')->first();
        $trimestres = DB::table('trimestre')->get();
        $calificaciones = DB::table('calificaciones')
            ->join('materias', 'calificaciones.materias_idMaterias', 'materias.idMaterias')
            ->join('trimestre', 'calificaciones.Trimestre_idTrimestre', 'trimestre.idTrimestre')
            ->where('grado', $grado)
            ->where('grupo', $grupo)
            ->where('alumnos_idAlumno', $alumno)
            ->groupBy('materias_idMaterias')
            ->groupBy('materias.nombre')
            ->select('materias_idMaterias as id_materia', 'materias.nombre as materia')
            ->selectRaw('GROUP_CONCAT(calificacion) as calificaciones')
            ->selectRaw('GROUP_CONCAT(trimestre.numeroTimestre) as trimestres')
            ->get();

        foreach ($calificaciones as $calificacion) {
            $array_calificaciones = [];
            $array_cal_trim = explode(",", $calificacion->calificaciones);
            $array_trim = explode(",", $calificacion->trimestres);

            $trimestre_desc = DB::table('trimestre')->where('idTrimestre', $trimestre)->select('numeroTimestre')->first();
            $trimestre_selected = $trimestre_desc->numeroTimestre;




            array_push($array_calificaciones, $calificacion->id_materia);
            array_push($array_calificaciones, $calificacion->materia);

            for ($i = 1; $i < 4; $i++) {
                array_push($array_calificaciones, '');
            }
            for ($i = 1; $i < 4; $i++) {
                $clave = array_search($i, $array_trim);
                $pos = $i + 1;
                $reemplazo = array($pos => $array_cal_trim[$clave]);
                $array_calificaciones = array_replace($array_calificaciones, $reemplazo);
            }

            //Promedio
            if ($trimestre_selected == 1) {
                $suma = $array_calificaciones[2];
            } elseif ($trimestre_selected == 2) {
                $suma = $array_calificaciones[2] + $array_calificaciones[3];
            } else {
                $suma = $array_calificaciones[2] + $array_calificaciones[3] + $array_calificaciones[4];
            }

            $promedio = round($suma / $trimestre_selected);
            $suma_total = $suma_total + $promedio;
            array_push($array_calificaciones, $promedio);
            array_push($array_materias, $array_calificaciones);
        }

        $promedio_final = $suma_total / count($array_materias);

        set_time_limit(0);
        $pdf = \PDF::loadView('boleta', compact('boleta', 'array_materias', 'trimestre_selected', 'promedio_final'));

        return $pdf->stream('boleta.pdf');
    }
}
