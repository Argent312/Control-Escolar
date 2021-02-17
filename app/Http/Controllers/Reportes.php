<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Reportes extends Controller
{
    /*Reportes Calificaciones por Materia-Año*/
    public function ReporteLengua(Request $request) {
        return view('LenguaMaterna');
    }

    public function ReporteMatematicas(Request $request) {
        return view('Matematicas');
    }

    public function ReporteCiencias(Request $request) {
        return view('Ciencias');
    }

    public function ReporteIngles(Request $request) {
        return view('LenguaExtranjera');
    }
    
    public function ReporteHistoria(Request $request) {
        return view('Historia');
    }

    public function ReporteGeografia(Request $request) {
        return view('Geografia');
    }

    public function ReporteCivica(Request $request) {
        return view('Civica');
    }

    public function ReporteTecnologia(Request $request) {
        return view('Tecnologia');
    }

    public function ReporteEducacion(Request $request) {
        return view('EducacionFisica');
    }

    public function ReporteArtes(Request $request) {
        return view('Artes');
    }
    /*************************************************************************************/
    public function TotalAlumnos(Request $request) {
        return view('TotalAlumnos');
    }

    public function TotalAlumnosGrupo(Request $request){
        return view('TotalAlumnosGrupo');
    }
    /*************************************************************************************/
    public function GruposLengua(Request $request) {
        return view('GrupoLengua');
    }

    public function GruposMatematicas(Request $request) {
        return view('GrupoMatematicas');
    }

    public function GruposCiencias(Request $request) {
        return view('GrupoCiencias');
    }

    public function GruposIngles(Request $request) {
        return view('GrupoIngles');
    }

    public function GruposGeografia(Request $request) {
        return view('GrupoGeografia');
    }

    public function GruposTecnologia(Request $request) {
        return view('GrupoTecnologia');
    }

    public function GruposHistoria(Request $request) {
        return view('GrupoHistoria');
    }

    public function GruposCivica(Request $request) {
        return view('GrupoCivica');
    }

    public function GruposArtes(Request $request) {
        return view('GrupoArtes');
    }

    public function GruposEduFisica(Request $request) {
        return view('GrupoEduFisica');
    }

}
