<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    // @return void

    public function _construct()
    {
        $this->middleware('guest');
    }

    // @return Response
    
    public function reporte()
    {
        $periodo = \DB::table('calificaciones')
        ->select('alumnos.idAlumno', 'alumnos.nombre', 'alumnos.apellidoPaterno', 'alumnos.apellidoMaterno',
        'calificaciones.faltas_asistencia', 'calificaciones.Trimestre_idTrimestre')
        ->join ('alumnos', 'calificaciones.alumnos_idAlumno', '=', 'alumnos.idAlumno',)
        ->join ('trimestre', 'calificaciones.Trimestre_idTrimestre', '=', 'trimestre.idTrimestre', )
        ->get();
         //dd($periodo);
           $view = \View::make('reporte', compact('periodo'))->render();
           $pdf = \App::make('dompdf.wrapper');
           $pdf->loadHTML($view);
           return $pdf->stream('reporteasistencia'.'pdf');
    }

    public function reporteCalif()
    {
         $periodo = \DB::table('calificaciones')
        ->select('alumnos.idAlumno','alumnos.nombre', 'alumnos.apellidoPaterno', 'alumnos.apellidoMaterno',
        'calificaciones.idCalificaciones', 'calificaciones.grado', 'calificaciones.grupo', 'calificaciones.calificacion',
        'calificaciones.Trimestre_idTrimestre', 'periodo.idPeriodo', 'periodo.inicioClase', 'periodo.finClase')
        ->join ('alumnos', 'calificaciones.alumnos_idAlumno', '=', 'alumnos.idAlumno')
        ->join ('trimestre', 'calificaciones.Trimestre_idTrimestre', '=', 'trimestre.idTrimestre', )
        ->join ('periodo', 'trimestre.periodo_idPeriodo', '=', 'periodo.idPeriodo')
        ->get();
         //dd($periodo);
          $view = \View::make('reporteCalif', compact('periodo'))->render();
           $pdf = \App::make('dompdf.wrapper');
           $pdf->loadHTML($view);
           return $pdf->stream('reportecalificacion'.'pdf');
          return view('reporteCalif');
    }
}