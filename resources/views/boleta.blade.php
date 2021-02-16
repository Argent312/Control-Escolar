<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilosBoleta.css">
  <title>Boleta de calificaciones primer trimestre</title>
</head>

<body>
  <!-- -------------------- Cabecera -------------------- -->
  <div class="cabecera">
    <div id="logo">
      <img src="images/logoEdu.png" alt="">
    </div>

    <div id="logo2">
      <img src="images/header2.JPG" alt="">
    </div>

    <div id="logo1">
      <img src="images/header.JPG" alt="">
    </div>
  </div>
  
  <p class="grado">{{$boleta->grado}}° GRADO DE EDUCACIÓN SECUNDARIA CICLO ESCOLAR <strong>2019-2020</strong> </p>

  <!-- -------------------------------------------Datos alumnos---------------------------- -->
  <p class="datos">DATOS DEL ALUMNO </p>
  <div class="form">
    <p class="paterno1">{{$boleta->alumno->apellidoPaterno}}</p>
    <p class="materno1">{{$boleta->alumno->apellidoMaterno}}</p>
    <p class="nombre1">{{$boleta->alumno->nombre}}</p>
    <p class="curp1">{{$boleta->alumno->curp}}</p>
  </div>
  <br>
  <div class="form1">
    <p class="paterno">PRIMER APELLIDO</p>
    <p class="materno">SEGUNDO APELLIDO</p>
    <p class="nombre">NOMBRE(S)</p>
    <p class="curp">CURP</p>
  </div>
  <br><br><br>

  <!-- -----------------------------------------------Datos escuela---------------------------- -->
  <p class="datos2">DATOS DE LA ESCUELA </p>
  <div class="form">
    <p class="nomEscuela1">Escuela secundaria técnica</p>
    <p class="grupo1">{{$boleta->alumno->asignacion->turno}}</p>
    <p class="turno1">{{$boleta->grupo}}</p>
    <p class="cct1">CCTaa</p>
  </div>
  <br>
  <div class="form2">
    <p class="nomEscuela">NOMBRE DE LA ESCUELA</p>
    <p class="grupo">TURNO</p>
    <p class="turno">GRUPO</p>
    <p class="cct">CCT</p>
  </div>
  <br><br>

  <!-- ------------------------------------tablas-------------------------- -->
  <br>
  <div class="tabla3">
    <table class="table3 table-bordered" width="230px">
      <thead>
        <tr>
          <th height="1%"><p id="par">TECNOLOGÍA</p></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td height="4%">
            <p id="para">Énfasis de campo: {{$boleta->alumno->asignacion->tecnologia->nombre}}</p><br>
          </td>
        </tr>
        <tr>
          <td>
            <p class id ="para">Clave: {{$boleta->alumno->asignacion->tecnologia->clave}}</p>  
          </td>
        </tr>
      </tbody>
    </table>
    <br>
    <table class="table4 table-bordered" width="260px">
      <thead>
        <tr>
          <th colspan="2"><p class="asist">ASISTENCIA</p> </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td width="150px"><p class="asis">Calendario Escolar</p></td>  
          <td><p class="asis"> </p> </td>
        </tr>
        <tr>
          <td height="3.5%"><p class="asis">Asistencias</p></td>
          <td><p class="asis">{{$boleta->asistencias}}</p></td>  
        </tr>
        
        <tr>
          <td><p class="asis">% Asistencia*</p></td>
          <td><p class="asis"><?php echo (int) (($boleta->asistencias/100) * 100);?>%</p></td>
        </tr>
      </tbody>
    </table>
    <br>
    <p class="asisMin">*Asistencia mínima para ser promovido: 80%</p>

    <table class="table5 table-bordered">
      <thead>
        <tr>
          <th width="200px"><p class="pro">PROMEDIO FINAL DE GRADO</p> </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td height="2.5%"><p class="cali">{{$promedio_final}}</p></td>
        </tr>
      </tbody>
    </table>
    <br>
    <table class="table6 table-bordered">
      <thead>
        <tr>
          <th height="1%" width="260px"><p class="asist">FIRMA DE LA MADRE, PADRE DE FAMILIA O TUTOR</p> </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td HEIGHT="8%" VALIGN="TOP"><p class="perio">1er periodo</p></td>
        </tr>
        <tr>
          <td HEIGHT="8%" VALIGN="TOP"><p class="perio">2do periodo</p></td>
        </tr>
        <tr>
          <td HEIGHT="8%" VALIGN="TOP"><p class="perio">3er periodo</p></td>
        </tr>
      </tbody>
    </table>
    <br><br><br>
    <table class="table7">
      <tr>
        <td> <img class="sellito" src="images/sello.JPG" alt=""> </td>
      </tr>
    </table>
    <br>

    <table class="table8 table-bordered" width="15%">
      <tr>
        <td style="border-bottom-color: #000000; border-left-color: #000000; border-right-color: #000000;"><p id="fechas"><?php  echo "" . date("Y");?></p></td>
        <td style="border-bottom-color: #000000; border-right-color: #000000;"><p id="fechas"><?php  echo "" . date("m");?></p></td>
        <td style="border-bottom-color: #000000; border-right-color: #000000;"><p id="fechas"><?php  echo "" . date("d")?></p></td>
      </tr>
      <tr>
        <td style="border-left-color: #ffffff; border-right-color: #ffffff; border-bottom-color:#ffffff;"><p id="fecha">AÑO</p></td>
        <td style="border-right-color: #ffffff; border-bottom-color:#ffffff;"><p id="fecha">MES</p></td>
        <td style="border-right-color: #ffffff; border-bottom-color:#ffffff;"><p id="fecha">DÍA</p></td>
      </tr>
    </table>
  </div>

  <!-- -------------------------------tablaaClal---------------------------- -->
  <div class="tablaCal">
    <table class="table1 table-bordered">
      <thead>
        <tr>
          <th rowspan="2" colspan="2"><p id="parraf">ASIGNATURAS/ÁREAS</p> </th>
          <th colspan="3"><p id="parraf">PERIODOS DE EVALUACIÓN</p> </th>
          <th rowspan="2" id="pro"><p id="parraf">PROMEDIO FINAL</p> </th>
        </tr>
        <tr>
          <th><p id="parraf">1er</p></th>
          <th><p id="parraf">2°</p></th>
          <th><p id="parraf">3er</p></th>
        </tr>
      </thead>
      <tbody>
        @foreach($array_materias as $materia)
        <tr>
          @if ($loop->first)
          <td rowspan="{{ count($array_materias) }}"><p id="parra"> FORMACIÓN ACADÉMICA</p> </td>
          @endif
          <td><p id="parrafo">{{ $materia[1] }}</p> </td>
          <td><p class="cali">{{ $materia[2] }}</p></td>
          <td><p class="cali">{{ $trimestre_selected >= 2 ? $materia[3] : '' }}</p></td>
          <td><p class="cali">{{ $trimestre_selected >= 3 ? $materia[4] : '' }}</p></td>
          <td><p class="cali">{{ $materia[5] }}</p></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- ------------------------------------------tabla2--------------------------------------- -->
    <div class="tabla2">
      <table class="table2 table-bordered" height="135pt">
        <tr>
          <td  height="135pt">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p class="firma">NOMBRE Y FIRMA DEL DIRECTOR</p>
            <br>
            <br>
            <br> <p class="xalapa">xalapa</p>
            <p class="firma">LUGAR DE EXPEDICIÓN</p>
          </td>
        </tr>
      </table>
    </div>  
  <div class="page-break"></div>

  <!-- --------------------------------------------------------------------- -->
  <div class="observaciones">
  <table class="table9 table-bordered">
  <tbody>
  <thead>
  <tr>
  <th colspan="2"><p class="obser">OBSERVACIONES O RECOMENDACIONES GENERALES DEL DOCENTE</p> </th>
  </tr>
  </thead>
  <tr>
  <th width="6%"> <p id="ob">PRIMERPERIODO</p></th>
  <td></td>
  </tr>
  <tr>
  <td><p id="ob">SEGUNDOPERIODO</p> </td>
  <td></td>
  </tr>
  <tr>
  <td><p id="ob">TERCERPERIODO</p></td>
  <td></td>
  </tr>
  </tbody>
  </table>
  </div>
  <br><br>
  <footer>
  <p class="folio">FOLIO:</p>
  <p class="foliofin">SE SANCIONARÁ A QUIEN CON SOLO O FINES LUCRATIVOS REPRODUZCA TOTAL O PARCIALMENTE ESTE FORMATO </p>
  </footer>
</body>

</html>
