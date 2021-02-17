@extends('layouts.layoutGrupo')

@extends('layouts.headerForm')

@extends('layouts.navForm')

@section('title', 'Reportes')

@section('content')


<?php
	$data = file_get_contents("TotalGrupo/total_alumnos_A1.json");
	$arreglo = json_decode($data, true); 

	$data2 = file_get_contents("TotalGrupo/total_alumnos_B1.json");
	$arreglo2 = json_decode($data2, true); 

    /*********************************************************************/
    $data3 = file_get_contents("TotalGrupo/total_alumnos_A2.json");
	$arreglo3 = json_decode($data3, true); 

    $data4 = file_get_contents("TotalGrupo/total_alumnos_B2.json");
	$arreglo4 = json_decode($data4, true); 

    /*********************************************************************/
    $data5 = file_get_contents("TotalGrupo/total_alumnos_A3.json");
	$arreglo5 = json_decode($data5, true); 

    $data6 = file_get_contents("TotalGrupo/total_alumnos_B3.json");
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
	CanvasJS.addColorSet("greenShades",
                [
				
                "#155efa",
                "#23e200"  
                              
        		]);

	var chart = new CanvasJS.Chart("chartContainer",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo A"
		},

		exportFileName: "Grupo A:Primer Año",
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
						$sexo=$value['sexo']; 
						echo "{ y:".$total.",indexLabel:'".$sexo."'},";
					} 
				?>
			]
		}
		]
	});
	chart.render();

	/**********************************************************************/

	CanvasJS.addColorSet("greenShades",
                [
				
                "#155efa",
                "#23e200"  
                              
        		]);

	var chart2 = new CanvasJS.Chart("chartContainer2",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo B"
		},

		exportFileName: "Grupo B:Primer Año",
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
						$sexo=$value2['sexo']; 
						echo "{ y:".$total.",indexLabel:'".$sexo."'},";
					} 
				?>
			]
		}
		]
	});
	chart2.render();

    /**********************************************************************/

	CanvasJS.addColorSet("greenShades",
                [
				
                "#155efa",
                "#23e200"  
                              
        		]);

	var chart3 = new CanvasJS.Chart("chartContainer3",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo A:"
		},

		exportFileName: "Grupo A:Segundo Año",
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
						$sexo=$value3['sexo']; 
						echo "{ y:".$total.",indexLabel:'".$sexo."'},";
					} 
				?>
			]
		}
		]
	});
	chart3.render();

    /**********************************************************************/

	CanvasJS.addColorSet("greenShades",
                [
				
                "#155efa",
                "#23e200"  
                              
        		]);

	var chart4 = new CanvasJS.Chart("chartContainer4",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo B"
		},

		exportFileName: "Grupo B:Segundo Año",
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
						$sexo=$value4['sexo']; 
						echo "{ y:".$total.",indexLabel:'".$sexo."'},";
					} 
				?>
			]
		}
		]
	});
	chart4.render();

    /**********************************************************************/

	CanvasJS.addColorSet("greenShades",
                [
				
				"#09B801",
                "#F02A00"
                              
        		]);

	var chart5 = new CanvasJS.Chart("chartContainer5",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo A"
		},

		exportFileName: "Grupo A:Tercer Año",
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
						$sexo=$value5['sexo']; 
						echo "{ y:".$total.",indexLabel:'".$sexo."'},";
					} 
				?>
			]
		}
		]
	});
	chart5.render();

    /**********************************************************************/

	CanvasJS.addColorSet("greenShades",
                [
				
				"#09B801",
                "#F02A00"
                              
        		]);

	var chart6 = new CanvasJS.Chart("chartContainer6",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Grupo B"
		},

		exportFileName: "Grupo B:Tercer Año",
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
						$sexo=$value6['sexo']; 
						echo "{ y:".$total.",indexLabel:'".$sexo."'},";
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

