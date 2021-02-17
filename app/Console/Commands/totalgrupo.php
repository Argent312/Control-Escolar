<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;

class totalgrupo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'totalgrupo:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Total de hombre y mujeres por grupo';

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
        $query="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='H' and b.grado=1 and b.grupo='A'; "; 
        $consulta_hombres=DB::select($query); 
    
        foreach($consulta_hombres as $key =>$total){
            $a=$total->total;
            $arreglo_hombres=array('sexo'=>'Hombres','total'=>$a); 
        }

        $query2="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='M' and b.grado=1 and b.grupo='A'; "; 
        $consulta_mujeres=DB::select($query2); 
    
        foreach($consulta_mujeres as $key =>$total){
            $b=$total->total;
            $arreglo_mujeres=array('sexo'=>'Mujeres','total'=>$b); 
        }

        $total=array($arreglo_hombres,$arreglo_mujeres);

        $json_string=json_encode($total);
        $file='public/TotalGrupo/total_alumnos_A1.json';
        file_put_contents($file,$json_string);

        /*1-B*/
        $query3="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='H' and b.grado=1 and b.grupo='B'; "; 
        $consulta_hombres=DB::select($query3); 
    
        foreach($consulta_hombres as $key =>$total){
            $a=$total->total;
            $arreglo_hombres2=array('sexo'=>'Hombres','total'=>$a); 
        }

        $query4="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='M' and b.grado=1 and b.grupo='B'; "; 
        $consulta_mujeres=DB::select($query4); 
    
        foreach($consulta_mujeres as $key =>$total){
            $b=$total->total;
            $arreglo_mujeres2=array('sexo'=>'Mujeres','total'=>$b); 
        }

        $total2=array($arreglo_hombres2,$arreglo_mujeres2);

        $json_string=json_encode($total2);
        $file='public/TotalGrupo/total_alumnos_B1.json';
        file_put_contents($file,$json_string);



        /*2-A*/
        $query5="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='H' and b.grado=2 and b.grupo='A'; "; 
        $consulta_hombres=DB::select($query5); 
    
        foreach($consulta_hombres as $key =>$total){
            $a=$total->total;
            $arreglo_hombres3=array('sexo'=>'Hombres','total'=>$a); 
        }

        $query6="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='M' and b.grado=2 and b.grupo='A'; "; 
        $consulta_mujeres=DB::select($query6); 
    
        foreach($consulta_mujeres as $key =>$total){
            $b=$total->total;
            $arreglo_mujeres3=array('sexo'=>'Mujeres','total'=>$b); 
        }

        $total3=array($arreglo_hombres3,$arreglo_mujeres3);

        $json_string=json_encode($total3);
        $file='public/TotalGrupo/total_alumnos_A2.json';
        file_put_contents($file,$json_string);

        /*2-B*/
        $query7="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='H' and b.grado=2 and b.grupo='B'; "; 
        $consulta_hombres=DB::select($query3); 
    
        foreach($consulta_hombres as $key =>$total){
            $a=$total->total;
            $arreglo_hombres4=array('sexo'=>'Hombres','total'=>$a); 
        }

        $query8="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='M' and b.grado=2 and b.grupo='B'; "; 
        $consulta_mujeres=DB::select($query8); 
    
        foreach($consulta_mujeres as $key =>$total){
            $b=$total->total;
            $arreglo_mujeres4=array('sexo'=>'Mujeres','total'=>$b); 
        }

        $total4=array($arreglo_hombres4,$arreglo_mujeres4);

        $json_string=json_encode($total4);
        $file='public/TotalGrupo/total_alumnos_B2.json';
        file_put_contents($file,$json_string);



        /*3-A*/
        $query9="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='H' and b.grado=3 and b.grupo='A'; "; 
        $consulta_hombres=DB::select($query9); 
    
        foreach($consulta_hombres as $key =>$total){
            $a=$total->total;
            $arreglo_hombres5=array('sexo'=>'Hombres','total'=>$a); 
        }

        $query10="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='M' and b.grado=3 and b.grupo='A'; "; 
        $consulta_mujeres=DB::select($query10); 
    
        foreach($consulta_mujeres as $key =>$total){
            $b=$total->total;
            $arreglo_mujeres5=array('sexo'=>'Mujeres','total'=>$b); 
        }

        $total5=array($arreglo_hombres5,$arreglo_mujeres5);

        $json_string=json_encode($total5);
        $file='public/TotalGrupo/total_alumnos_A3.json';
        file_put_contents($file,$json_string);

        /*3-B*/
        $query11="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='H' and b.grado=3 and b.grupo='B'; "; 
        $consulta_hombres=DB::select($query11); 
    
        foreach($consulta_hombres as $key =>$total){
            $a=$total->total;
            $arreglo_hombres6=array('sexo'=>'Hombres','total'=>$a); 
        }

        $query12="select count(idAlumno) as total from alumnos a 
        inner join calificaciones b 
        on a.idAlumno=b.alumnos_idAlumno
        where a.sexo='M' and b.grado=3 and b.grupo='B'; "; 
        $consulta_mujeres=DB::select($query12); 
    
        foreach($consulta_mujeres as $key =>$total){
            $b=$total->total;
            $arreglo_mujeres6=array('sexo'=>'Mujeres','total'=>$b); 
        }

        $total6=array($arreglo_hombres6,$arreglo_mujeres6);

        $json_string=json_encode($total6);
        $file='public/TotalGrupo/total_alumnos_B3.json';
        file_put_contents($file,$json_string);


    }
}
