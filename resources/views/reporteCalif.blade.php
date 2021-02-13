<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylees.css">
    <title>Reporte Para Calificaciones</title>
</head>
<header>

    <div class="encab">
        <h1>Reporte Para Calificaciones</h1>
        <h2>Sistema Educativo Nacional</h2>
        <h2>Escuela Secundaria</h2>
        <h3>Clave 1234567</h3>
    </div>
</header>

<body class="cuerpo">

    <div class="posiciontabla">
        <table>
            <thead class="encabezado">
                <tr>
                    <th>Id Alumno</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Id Cal</th>
                    <th>Grado</th>
                    <th>Grupo</th>
                    <th>Calificacion</th>
                    <!-- <th>Id Trimestre</th> -->
                    <th>Id periodo</th>
                    <th>Inicio Clase</th>
                    <th>Fin Clase</th>
                </tr>
            </thead>
            @foreach($periodo as $c)
            <tr>
                <td>{{ $c->idAlumno }}</td>
                <td>{{ $c->nombre }}</td>
                <td>{{ $c->apellidoPaterno }}</td>
                <td>{{ $c->apellidoMaterno }}</td>
                <td>{{ $c->idCalificaciones }}</td>
                <td>{{ $c->grado }}</td>
                <td>{{ $c->grupo }}</td>
                <td>{{ $c->calificacion }}</td>
                <!-- <td>{{ $c->Trimestre_idTrimestre }}</td> -->
                <td>{{ $c->idPeriodo}}</td>
                <td>{{ $c->inicioClase }}</td>
                <td>{{ $c->finClase }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>