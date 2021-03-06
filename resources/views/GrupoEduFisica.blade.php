@extends('layouts.layoutGrupo')

@extends('layouts.headerForm')

@extends('layouts.navForm')

@section('title', 'Reportes')

@section('content')


<?php
	$data = file_get_contents("Calificaciones-grupo/informacion/EduFisica/Edu_Primero_GrupoA.json");
	$arreglo = json_decode($data, true); 

	$data2 = file_get_contents("Calificaciones-grupo/informacion/EduFisica/Edu_Primero_GrupoB.json");
	$arreglo2 = json_decode($data2, true); 

    /*********************************************************************/
    $data3 = file_get_contents("Calificaciones-grupo/informacion/EduFisica/Edu_Segundo_GrupoA.json");
	$arreglo3 = json_decode($data3, true); 

    $data4 = file_get_contents("Calificaciones-grupo/informacion/EduFisica/Edu_Segundo_GrupoB.json");
	$arreglo4 = json_decode($data4, true); 

    /*********************************************************************/
    $data5 = file_get_contents("Calificaciones-grupo/informacion/EduFisica/Edu_Tercero_GrupoA.json");
	$arreglo5 = json_decode($data5, true); 

    $data6 = file_get_contents("Calificaciones-grupo/informacion/EduFisica/Edu_Tercero_GrupoB.json");
	$arreglo6 = json_decode($data6, true); 
?>


<!--Grafica de pastel-->
@section('graficauno')
	<div id="chartContainer" style="height: 270px; width: 100%;"></div>
	
@endsection

@section('graficados')
	<div id="chartContainer2" style="height: 270px; width: 100%;"></div>
@endsection

@section('graficatres')
	<div id="chartContainer3" style="height: 270px; width: 100%;"></div>
	
@endsection

@section('graficacuatro')
	<div id="chartContainer4" style="height: 270px; width: 100%;"></div>
@endsection

@section('graficacinco')
	<div id="chartContainer5" style="height: 270px; width: 100%;"></div>
	
@endsection

@section('graficaseis')
	<div id="chartContainer6" style="height: 270px; width: 100%;"></div>
@endsection

<script>
window.onload = function () {
	/*Grafia A-1*/
	CanvasJS.addColorSet("greenShades",
                [
				"#09B801",
                "#F02A00"      
        		]);

	var chart = new CanvasJS.Chart("chartContainer",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo A:Educación Fisica I"
		},

		exportFileName: "Grupo A:Educación Fisica I",
		exportEnabled: true,

		legend: {
			maxWidth: 350,
			itemWidth: 120
		},
		data: [
		{
			type: "pie",
			showInLegend: false,
			legendText: "{indexLabel}",
			dataPoints: [
				<?php
					foreach($arreglo as $value){
						$total=$value['total'];
						$tipo=$value['tipo']; 
						echo "{ y:".$total.",indexLabel:'".$tipo."'},";
					} 
				?>
			]
		}
		]
	});
	chart.render();

	/*Grafia B-1*/
	CanvasJS.addColorSet("greenShades",
                [
				
				"#09B801",
                "#F02A00"
                              
        		]);

	var chart2 = new CanvasJS.Chart("chartContainer2",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo B:Educación Fisica I"
		},

		exportFileName: "Grupo B:Educación Fisica I",
		exportEnabled: true,

		legend: {
			maxWidth: 350,
			itemWidth: 120
		},
		data: [
		{
			type: "pie",
			showInLegend: false,
			legendText: "{indexLabel}",
			dataPoints: [
				<?php
					foreach($arreglo2 as $value2){
						$total=$value2['total'];
						$tipo=$value2['tipo']; 
						echo "{ y:".$total.",indexLabel:'".$tipo."'},";
					} 
				?>
			]
		}
		]
	});
	chart2.render();

    /*Grafia A-2*/
	CanvasJS.addColorSet("greenShades",
                [
				"#09B801",
                "#F02A00"            
        		]);

	var chart3 = new CanvasJS.Chart("chartContainer3",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo A:Educación Fisica II"
		},

		exportFileName: "Grupo A:Educación Fisica II",
		exportEnabled: true,

		legend: {
			maxWidth: 350,
			itemWidth: 120
		},
		data: [
		{
			type: "pie",
			showInLegend: false,
			legendText: "{indexLabel}",
			dataPoints: [
				<?php
					foreach($arreglo3 as $value3){
						$total=$value3['total'];
						$tipo=$value3['tipo']; 
						echo "{ y:".$total.",indexLabel:'".$tipo."'},";
					} 
				?>
			]
		}
		]
	});
	chart3.render();

    /*Grafia B-2*/
	CanvasJS.addColorSet("greenShades",
                [
				"#09B801",
                "#F02A00"
                              
        		]);

	var chart4 = new CanvasJS.Chart("chartContainer4",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo B:Educación Fisica II"
		},

		exportFileName: "Grupo B:Educación Fisica II",
		exportEnabled: true,

		legend: {
			maxWidth: 350,
			itemWidth: 120
		},
		data: [
		{
			type: "pie",
			showInLegend: false,
			legendText: "{indexLabel}",
			dataPoints: [
				<?php
					foreach($arreglo4 as $value4){
						$total=$value4['total'];
						$tipo=$value4['tipo']; 
						echo "{ y:".$total.",indexLabel:'".$tipo."'},";
					} 
				?>
			]
		}
		]
	});
	chart4.render();

    /*Grafia A-3*/
	CanvasJS.addColorSet("greenShades",
                [
				"#09B801",
                "#F02A00"                             
        		]);

	var chart5 = new CanvasJS.Chart("chartContainer5",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo A:Educación Fisica III"
		},

		exportFileName: "Grupo A:Educación Fisica III",
		exportEnabled: true,

		legend: {
			maxWidth: 350,
			itemWidth: 120
		},
		data: [
		{
			type: "pie",
			showInLegend: false,
			legendText: "{indexLabel}",
			dataPoints: [
				<?php
					foreach($arreglo5 as $value5){
						$total=$value5['total'];
						$tipo=$value5['tipo']; 
						echo "{ y:".$total.",indexLabel:'".$tipo."'},";
					} 
				?>
			]
		}
		]
	});
	chart5.render();

    /*Grafia B-2*/
	CanvasJS.addColorSet("greenShades",
                [
				"#09B801",
                "#F02A00"         
        		]);

	var chart6 = new CanvasJS.Chart("chartContainer6",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo B:Educación Fisica III"
		},

		exportFileName: "Grupo B:Educación Fisica III",
		exportEnabled: true,

		legend: {
			maxWidth: 350,
			itemWidth: 120
		},
		data: [
		{
			type: "pie",
			showInLegend: false,
			legendText: "{indexLabel}",
			dataPoints: [
				<?php
					foreach($arreglo6 as $value6){
						$total=$value6['total'];
						$tipo=$value6['tipo']; 
						echo "{ y:".$total.",indexLabel:'".$tipo."'},";
					} 
				?>
			]
		}
		]
	});
	chart6.render();
}	
</script> 

@endsection

