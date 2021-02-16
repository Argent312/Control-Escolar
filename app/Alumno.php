<?php
namespace App;
use illuminate\Database\Eloquent\Model;


class Alumno extends Model
{
    
    // public $timestamps = false;
	protected $table = "alumnos";
	public $timestamps =false;
	protected $fillable = [
		'curp',
		'nombre',
		'apellidoPaterno',
		'apellidoMaterno',
	];

	public function asignacion(){
        return $this->hasOne('App\Asignacion', 'alumnos_idAlumno', 'idAlumno');
    }

  
}