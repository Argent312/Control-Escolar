<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;

class artes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'artes:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualiza las calificaciones de la materia de Artes';

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
    /*Artes-grado1*/
        $query="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where grado=1 and materias.clave='ART';";

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
        $file='public/Calificaciones-grado/informacion/Artes/Artes_Primero.json';
        file_put_contents($file,$json_string);


    /*Artes-grado2*/
        $query2="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where grado=2 and materias.clave='ART2';";

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
        $file2='public/Calificaciones-grado/informacion/Artes/Artes_Segundo.json';
        file_put_contents($file2,$json_string2);

    /*Artes-grado3*/
        $query3="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where grado=3 and materias.clave='ART3';";
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
        $file3='public/Calificaciones-grado/informacion/Artes/Artes_Tercero.json';
        file_put_contents($file3,$json_string3);

    /**************************************Grupo A-1**********************************************/
        $query4="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='ART' and grupo='A';";
        $aprobado4=0; 
        $reprobado4=0;

        $califcacion4=DB::select($query4);
        foreach ($califcacion4 as $key => $calif4) {
            $d=$calif4->total;

            if($d>=6) {
                $aprobado4=$aprobado4+1; 
            }
            else{
                $reprobado4=$reprobado4+1;
            }

            $arreglo_aprobado_grupoa4=array('tipo'=>'Aprobado','total'=>$aprobado4);
            $arreglo_reprobado_grupoa4=array('tipo'=>'Reprobado','total'=>$reprobado4);

        }

        $total4=array($arreglo_aprobado_grupoa4,$arreglo_reprobado_grupoa4);

        $json_string4=json_encode($total4);
        $file4='public/Calificaciones-grupo/informacion/Artes/Artes_Primero_GrupoA.json';
        file_put_contents($file4,$json_string4);

    /***************************************Grupo B-1***************************************/
        $query5="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='ART' and grupo='B';";
        $aprobado5=0; 
        $reprobado5=0;

        $califcacion5=DB::select($query5);
        foreach ($califcacion5 as $key => $calif5) {
            $e=$calif5->total;

            if($e>=6) {
                $aprobado5=$aprobado5+1; 
                }
            else{
                $reprobado5=$reprobado5+1;
            }

            $arreglo_aprobado_grupob5=array('tipo'=>'Aprobado','total'=>$aprobado5);
            $arreglo_reprobado_grupob5=array('tipo'=>'Reprobado','total'=>$reprobado5);

        }

        $total5=array($arreglo_aprobado_grupob5,$arreglo_reprobado_grupob5);

        $json_string5=json_encode($total5);
        $file5='public/Calificaciones-grupo/informacion/Artes/Artes_Primero_GrupoB.json';
        file_put_contents($file5,$json_string5);

    /************************************Grupo A-2*****************************************/
        $query6="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='ART2' and grupo='A';";
        $aprobado6=0; 
        $reprobado6=0;

        $califcacion6=DB::select($query6);
        foreach ($califcacion6 as $key => $calif6) {
            $f=$calif6->total;

            if($f>=6) {
            $aprobado6=$aprobado6+1; 
            }
            else{
            $reprobado6=$reprobado6+1;
            }

            $arreglo_aprobado_grupoa6=array('tipo'=>'Aprobado','total'=>$aprobado6);
            $arreglo_reprobado_grupoa6=array('tipo'=>'Reprobado','total'=>$reprobado6);

        }

        $total6=array($arreglo_aprobado_grupoa6,$arreglo_reprobado_grupoa6);

        $json_string6=json_encode($total6);
        $file6='public/Calificaciones-grupo/informacion/Artes/Artes_Segundo_GrupoA.json';
        file_put_contents($file6,$json_string6);

    /*********************************Grupo B-2***********************************************/
        $query7="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='ART2' and grupo='B';";
        $aprobado7=0; 
        $reprobado7=0;

        $califcacion7=DB::select($query7);
        foreach ($califcacion7 as $key => $calif7) {
            $g=$calif7->total;

            if($g>=6) {
                $aprobado7=$aprobado7+1; 
            }
            else{
                $reprobado7=$reprobado7+1;
            }

            $arreglo_aprobado_grupoa7=array('tipo'=>'Aprobado','total'=>$aprobado7);
            $arreglo_reprobado_grupoa7=array('tipo'=>'Reprobado','total'=>$reprobado7);

        }   

        $total7=array($arreglo_aprobado_grupoa7,$arreglo_reprobado_grupoa7);

        $json_string7=json_encode($total7);
        $file7='public/Calificaciones-grupo/informacion/Artes/Artes_Segundo_GrupoB.json';
        file_put_contents($file7,$json_string7);


    /************************************Grupo A-3*****************************************/
        $query8="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='ART3' and grupo='A';";
        $aprobado8=0; 
        $reprobado8=0;

        $califcacion8=DB::select($query8);
        foreach ($califcacion8 as $key => $calif8) {
            $h=$calif8->total;

            if($h>=6) {
                $aprobado8=$aprobado8+1; 
            }
            else{
                $reprobado8=$reprobado8+1;
            }

            $arreglo_aprobado_grupoa8=array('tipo'=>'Aprobado','total'=>$aprobado8);
            $arreglo_reprobado_grupoa8=array('tipo'=>'Reprobado','total'=>$reprobado8);

        }

        $total8=array($arreglo_aprobado_grupoa8,$arreglo_reprobado_grupoa8);

        $json_string8=json_encode($total8);
        $file8='public/Calificaciones-grupo/informacion/Artes/Artes_Tercero_GrupoA.json';
        file_put_contents($file8,$json_string8);

    /*********************************Grupo B-3***********************************************/
        $query9="select calificacion as total from calificaciones 
        inner join materias on calificaciones.materias_idMaterias=materias.idMaterias
        where materias.clave='ART3' and grupo='B';";
        $aprobado9=0; 
        $reprobado9=0;

        $califcacion9=DB::select($query9);
        foreach ($califcacion9 as $key => $calif9) {
            $i=$calif9->total;

            if($i>=6) {
                $aprobado9=$aprobado9+1; 
            }
            else{
                $reprobado9=$reprobado9+1;
            }

            $arreglo_aprobado_grupoa9=array('tipo'=>'Aprobado','total'=>$aprobado9);
            $arreglo_reprobado_grupoa9=array('tipo'=>'Reprobado','total'=>$reprobado9);

        }

        $total9=array($arreglo_aprobado_grupoa9,$arreglo_reprobado_grupoa9);

        $json_string9=json_encode($total9);
        $file9='public/Calificaciones-grupo/informacion/Artes/Artes_Tercero_GrupoB.json';
        file_put_contents($file9,$json_string9);


    }
}
