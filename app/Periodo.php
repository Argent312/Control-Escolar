<?php
namespace App;
use illuminate\Database\Eloquent\Model;


class Periodo extends Model
{
    
    // public $timestamps = false;
  protected $table = "periodo";
  public $timestamps =false;
    protected $fillable = [
        'idPeriodo',
        'inicioClase',
        'finClase',
    ];
  
}