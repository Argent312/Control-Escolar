@extends('layouts.layoutMateria')

@extends('layouts.navForm')

@extends('layouts.headerForm')

@section('title', 'Reportes')

@section('content')


<?php
	$data = file_get_contents("Calificaciones-grado/informacion/Tecnologia/Tecno_Primero.json");
	$arreglo = json_decode($data, true); 

	$data2 = file_get_contents("Calificaciones-grado/informacion/Tecnologia/Tecno_Segundo.json");
	$arreglo2 = json_decode($data2, true); 

	$data3 = file_get_contents("Calificaciones-grado/informacion/Tecnologia/Tecno_Tercero.json");
	$arreglo3 = json_decode($data3, true); 
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

<script>
window.onload = function () {
	CanvasJS.addColorSet("greenShades",
                [//colorSet Array
				
				"#09B801",
                "#F02A00"
                              
        		]);

	var chart = new CanvasJS.Chart("chartContainer",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Tecnología I"
		},

		exportFileName: "Primer Año:Tecnología I",
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

	/**********************************************************************/

	CanvasJS.addColorSet("greenShades",
                [//colorSet Array
				
				"#09B801",
                "#F02A00"
                              
        		]);

	var chart2 = new CanvasJS.Chart("chartContainer2",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Tecnología II"
		},

		exportFileName: "Segundo Año: Tecnología II",  
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
	/*************************************************************/
	CanvasJS.addColorSet("greenShades",
                [//colorSet Array
				
				"#09B801",
                "#F02A00"
                              
        		]);

	var chart3 = new CanvasJS.Chart("chartContainer3",
	{
		colorSet: "greenShades",
		
		title:{
			text: "Tecnología III"
		},

		exportFileName: "Tercer Año: Tecnología III",  
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
}	
</script> 

@endsection

