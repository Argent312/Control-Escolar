<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;

class geo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'geo:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualiza las calificaciones de la materia de Geografía';

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
    /*Geografia-grado1*/ 
        $query="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where grado=1 and materias.clave='GEO1';";
        $aprobado=0; 
        $reprobado=0;

        $califcacion=DB::select($query);
        foreach ($califcacion as $key => $calif) {
            $a=$calif->total;
            
            if($a>=6) {
                $aprobado=$aprobado+1; 
            }
            else{
                $reprobado=$reprobado+1;
            }

            $arreglo_aprobado=array('tipo'=>'Aprobado','total'=>$aprobado);
            $arreglo_reprobado=array('tipo'=>'Reprobado','total'=>$reprobado);
            
        }

        $total=array($arreglo_aprobado,$arreglo_reprobado);

        $json_string=json_encode($total);
        $file='public/Calificaciones-grado/informacion/Geografia/Geo_Primero.json';
        file_put_contents($file,$json_string);
        

    /*Geografia-grado2*/ 
        $query2="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where grado=2 and materias.clave='GEO2';";
        $aprobado2=0; 
        $reprobado2=0;
    
        $califcacion2=DB::select($query2);
        foreach ($califcacion2 as $key => $calif2) {
            $b=$calif2->total;
                
            if($b>=6) {
                $aprobado2=$aprobado2+1; 
            }
            else{
                $reprobado2=$reprobado2+1;
            }
    
            $arreglo_aprobado2=array('tipo'=>'Aprobado','total'=>$aprobado2);
            $arreglo_reprobado2=array('tipo'=>'Reprobado','total'=>$reprobado2);
                
        }
    
        $total2=array($arreglo_aprobado2,$arreglo_reprobado2);
    
        $json_string2=json_encode($total2);
        $file2='public/Calificaciones-grado/informacion/Geografia/Geo_Segundo.json';
        file_put_contents($file2,$json_string2);

    /*Geografia-grado3*/ 
        $query3="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where grado=3 and materias.clave='GEO3';";
        $aprobado3=0; 
        $reprobado3=0;
     
        $califcacion3=DB::select($query3);
        foreach ($califcacion3 as $key => $calif3) {
            $c=$calif3->total;
                 
            if($c>=6) {
                $aprobado3=$aprobado3+1; 
            }
            else{
                $reprobado3=$reprobado3+1;
            }
     
            $arreglo_aprobado3=array('tipo'=>'Aprobado','total'=>$aprobado3);
            $arreglo_reprobado3=array('tipo'=>'Reprobado','total'=>$reprobado3);
                 
        }
     
        $total3=array($arreglo_aprobado3,$arreglo_reprobado3);
     
        $json_string3=json_encode($total3);
        $file3='public/Calificaciones-grado/informacion/Geografia/Geo_Tercero.json';
        file_put_contents($file3,$json_string3);

    /**************************************Grupo A-1**********************************************/
        $query4="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='GEO1' and grupo='A';";
        $aprobado=0; 
        $reprobado=0;

        $califcacion=DB::select($query4);
        foreach ($califcacion as $key => $calif) {
            $a=$calif->total;
            
            if($a>=6) {
                $aprobado=$aprobado+1; 
            }
            else{
                $reprobado=$reprobado+1;
            }

            $arreglo_aprobado_grupoa=array('tipo'=>'Aprobado','total'=>$aprobado);
            $arreglo_reprobado_grupoa=array('tipo'=>'Reprobado','total'=>$reprobado);
            
        }

        $total4=array($arreglo_aprobado_grupoa,$arreglo_reprobado_grupoa);

        $json_string=json_encode($total4);
        $file='public/Calificaciones-grupo/informacion/Geografia/Geo_Primero_GrupoA.json';
        file_put_contents($file,$json_string);

    /***************************************Grupo B-1***************************************/
        $query5="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='GEO1' and grupo='B';";
        $aprobado=0; 
        $reprobado=0;

        $califcacion=DB::select($query5);
        foreach ($califcacion as $key => $calif) {
            $a=$calif->total;
    
            if($a>=6) {
            $aprobado=$aprobado+1; 
                }
            else{
                $reprobado=$reprobado+1;
            }

        $arreglo_aprobado_grupoa=array('tipo'=>'Aprobado','total'=>$aprobado);
        $arreglo_reprobado_grupoa=array('tipo'=>'Reprobado','total'=>$reprobado);
    
        }

        $total5=array($arreglo_aprobado_grupoa,$arreglo_reprobado_grupoa);

        $json_string=json_encode($total5);
        $file='public/Calificaciones-grupo/informacion/Geografia/Geo_Primero_GrupoB.json';
        file_put_contents($file,$json_string);

    /************************************Grupo A-2*****************************************/
        $query6="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='GEO2' and grupo='A';";
        $aprobado=0; 
        $reprobado=0;

        $califcacion=DB::select($query6);
        foreach ($califcacion as $key => $calif) {
            $a=$calif->total;

            if($a>=6) {
                $aprobado=$aprobado+1; 
            }   
            else{
                $reprobado=$reprobado+1;
            }

            $arreglo_aprobado_grupoa=array('tipo'=>'Aprobado','total'=>$aprobado);
            $arreglo_reprobado_grupoa=array('tipo'=>'Reprobado','total'=>$reprobado);

        }

        $total6=array($arreglo_aprobado_grupoa,$arreglo_reprobado_grupoa);

        $json_string=json_encode($total6);
        $file='public/Calificaciones-grupo/informacion/Geografia/Geo_Segundo_GrupoA.json';
        file_put_contents($file,$json_string);

    /*********************************Grupo B-2***********************************************/
        $query7="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='GEO2' and grupo='B';";
        $aprobado=0; 
        $reprobado=0;

        $califcacion=DB::select($query7);
        foreach ($califcacion as $key => $calif) {
            $a=$calif->total;

            if($a>=6) {
                $aprobado=$aprobado+1; 
            }   
            else{
                $reprobado=$reprobado+1;
            }

            $arreglo_aprobado_grupoa=array('tipo'=>'Aprobado','total'=>$aprobado);
            $arreglo_reprobado_grupoa=array('tipo'=>'Reprobado','total'=>$reprobado);

        }

        $total7=array($arreglo_aprobado_grupoa,$arreglo_reprobado_grupoa);

        $json_string=json_encode($total7);
        $file='public/Calificaciones-grupo/informacion/Geografia/Geo_Segundo_GrupoB.json';
        file_put_contents($file,$json_string);


    /************************************Grupo A-3*****************************************/
        $query8="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='GEO3' and grupo='A';";
        $aprobado=0; 
        $reprobado=0;

        $califcacion=DB::select($query8);
        foreach ($califcacion as $key => $calif) {
            $a=$calif->total;

            if($a>=6) {
                $aprobado=$aprobado+1; 
            }
            else{
                $reprobado=$reprobado+1;
            }

            $arreglo_aprobado_grupoa=array('tipo'=>'Aprobado','total'=>$aprobado);
            $arreglo_reprobado_grupoa=array('tipo'=>'Reprobado','total'=>$reprobado);

        }

        $total8=array($arreglo_aprobado_grupoa,$arreglo_reprobado_grupoa);

        $json_string=json_encode($total8);
        $file='public/Calificaciones-grupo/informacion/Geografia/Geo_Tercero_GrupoA.json';
        file_put_contents($file,$json_string);

    /*********************************Grupo B-3***********************************************/
        $query9="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='GEO3' and grupo='B';";
        $aprobado=0; 
        $reprobado=0;

        $califcacion=DB::select($query9);
        foreach ($califcacion as $key => $calif) {
            $a=$calif->total;

            if($a>=6) {
                $aprobado=$aprobado+1; 
            }
            else{
                $reprobado=$reprobado+1;
            }

            $arreglo_aprobado_grupoa=array('tipo'=>'Aprobado','total'=>$aprobado);
            $arreglo_reprobado_grupoa=array('tipo'=>'Reprobado','total'=>$reprobado);

        }

        $total9=array($arreglo_aprobado_grupoa,$arreglo_reprobado_grupoa);

        $json_string=json_encode($total9);
        $file='public/Calificaciones-grupo/informacion/Geografia/Geo_Tercero_GrupoB.json';
        file_put_contents($file,$json_string);

    }
}
