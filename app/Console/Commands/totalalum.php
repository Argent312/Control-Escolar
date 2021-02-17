<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;

class totalalum extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alumnosgenero:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualiza el total de alumnos de la escuela por genero';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $query="select count(idAlumno) as total from alumnos where sexo='H'"; 
        $consulta_hombres=DB::select($query); 
    
        foreach($consulta_hombres as $key =>$total){
            $a=$total->total;
            $arreglo_hombres=array('sexo'=>'Hombres','total'=>$a); 
        }

        $query2="select count(idAlumno) as total from alumnos where sexo='M'"; 
        $consulta_mujeres=DB::select($query2); 
    
        foreach($consulta_mujeres as $key =>$total){
            $b=$total->total;
            $arreglo_mujeres=array('sexo'=>'Mujeres','total'=>$b); 
        }

        $total=array($arreglo_hombres,$arreglo_mujeres);

        $json_string=json_encode($total);
        $file='public/Total-alumnos/total_alumnos.json';
        file_put_contents($file,$json_string);

    }
}
