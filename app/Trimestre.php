<?php
namespace App;
use illuminate\Database\Eloquent\Model;


class Trimestre extends Model
{
    
    // public $timestamps = false;
  protected $table = "trimestre";
  protected $primaryKey = 'idTrimestre';
  public $timestamps =false;
    protected $fillable = [
        'numeroTimestre',
        'periodo_idPeriodo',
        
    ];
  
}