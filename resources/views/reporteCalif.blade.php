<h1>Reporte Para Calificaciones</h1>

<head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;




    }

    td,
    th {
        border: 1px solid gray;
        text-align: left;
        vertical-align: top;
        margin: 10px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>

<body>

    <table>
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
</body>