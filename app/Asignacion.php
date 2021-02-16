<?php
namespace App;
use illuminate\Database\Eloquent\Model;


class Asignacion extends Model
{
    
    // public $timestamps = false;
	protected $table = "asignacionmateria";
	public $timestamps =false;
	protected $fillable = [
		'turno',
		'grupo',
		'grado'
	];

	public function tecnologia(){
        return $this->hasOne('App\Tecnologia', 'idTecnologia', 'tecnologia_idTecnologia');
    }

    public function materia(){
        return $this->hasOne('App\Materia', 'idMaterias', 'materias_idMaterias');
    }
  
}