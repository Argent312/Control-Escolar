<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .izquierda {
            width: 200px;
            float: left;
            margin-right: 10px;
        }

        .derecha {
            width: 200px;
            float: right;
        }

        h2 {
            font-size: 1.2rem;
            text-align: center;
        }

        h3 {
            text-align: center;
            font-size: 1rem;
        }

        span {
            font-weight: bold;
        }
    </style>


</head>

<body>
    <p><img class="izquierda" src="{{ asset('images/sep-logo.png') }}" alt="Logo SEP">
        <img class="derecha" src="{{ asset('images/estado-logo.png') }}" alt="Logo Estado">
    <h2>Sistema Educativo Nacional</h2>
    <h2>{{$escuela->nombre}}</h2>
    <h3>Clave {{$escuela->clave}}</h3>
    </p>

    <hr>

    <div>
        <h4>A QUIEN CORRESPONDA</h4>
        <P>PRESENTE:</P>
        <p>Quien suscribe el <span>C. {{$escuela->director}} </span>Diretor de la Escuela
            <span>{{$escuela->nombre}}</span> con la clave escolar <span>{{$escuela->clave}}</span>.
        </p>
        <br><br><br>

        <h2><span>HACE CONSTAR</span></h2>
        <br>

        <p>Que el alumno(a) <span>{{$datos->nombre}}</span> <span>{{$datos->apellidoP}}</span>
            <span>{{$datos->apellidoM}}</span> Actualmente se encuentra cursando <span>{{$datos->grado}}</span> Grado, 
            turno {{$datos->turno}}, de educacion Secundaria con un promedio de <span>8.8</span> correspondiente al ciclo escolar
            <span>CICLO</span>. En la Escuela <span>{{$escuela->nombre}}</span> ubicada en {{$escuela->direccion}} 
            en la ciudad de {{$escuela->ciudad}}, municipio de {{$escuela->municipio}} con numero de telefono 
            <span>{{$escuela->telefono}}</span>.
        </p>
        <br>

        <p>Por lo cual se expide la presente para los fines que haya lugar y para fines del interesado.</p>
        <br><br><br><br><br><br><br><br><br><br><br>

        <h2><span>ATENTAMENTE</span></h2>
        <br><br>

        <h2><span>Drector de la escuela</span></h2>
        <h2><span>{{$escuela->director}}</span></h2>
    </div>
</body>

</html>