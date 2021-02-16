<?php
namespace App;
use illuminate\Database\Eloquent\Model;


class Tecnologia extends Model
{
    
	// public $timestamps = false;
	protected $table = "tecnologia";
	public $timestamps =false;
	protected $fillable = [
		'nombre',
		'clave'
	];
  
}