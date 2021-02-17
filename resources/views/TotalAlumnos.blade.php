@extends('layouts.layout')
@extends('layouts.headerForm')


@section('title', 'Reportes Alumnos')

@section('content')

<?php
	$data = file_get_contents("Total-alumnos/total_alumnos.json");
	$arreglo = json_decode($data, true);  
?>

<!--Titulo de la vista-->
<div class="row">
    <div class="col s12">
         <div class="card-panel grey lighten-1 titulo">
            <h3>Total de hombres y mujeres en la escuela</h3>         
        </div>
    </div>
</div>

<!--Grafica-->
<div class="row">
  <div class="col s12">
    <div class="card-content">
      <div class="card-panel">
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
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
        text: "Total Alumnos"
      },
      exportFileName: "Estadistica primer año", 
		  exportEnabled: true,
      
      data: [

      {
        dataPoints: [
          <?php
             foreach($arreglo as $value) {
              $total=$value['total'];
						  $sexo=$value['sexo']; 

              echo "{ y:".strtoupper($total).",label:'".strtoupper($sexo)."',indexLabelFontColor:'green'},";
          } 
          ?>
       
        ]
      }
      ]
    });

    chart.render();
  }
  </script>

@endsection