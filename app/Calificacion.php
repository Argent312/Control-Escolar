<?php
namespace App;
use illuminate\Database\Eloquent\Model;


class Calificacion extends Model
{
    
    // public $timestamps = false;
    protected $table = "calificaciones";
    public $timestamps =false;
    protected $fillable = [
        'calificacion',
        'faltas_asistencia',
        'asistencias',
        'grupo',
        'grado'
    ];

    public function alumno(){
        return $this->hasOne('App\Alumno', 'idAlumno', 'alumnos_idAlumno');
    }

    public function materia(){
        return $this->hasOne('App\Materia', 'idMaterias', 'materias_idMaterias');
    }

    public function trimestre(){
        return $this->hasOne('App\Trimestre', 'idTrimestre', 'Trimestre_idTrimestre');
    }

    



}