<h1>Reporte de Asistencia</h1>

<head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
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
            <th>Faltas</th>
            <th>Asistencia</th>
            <th>Id Trimestre</th>
        </tr>
        @foreach($periodo as $p)
        <tr>
            <td>{{ $p->idAlumno}}</td>
            <td>{{ $p->nombre}}</td>
            <td>{{ $p->apellidoPaterno}}</td>
            <td>{{ $p->apellidoMaterno}}</td>
            <td>{{ $p->faltas_asistencia}}</td>
            <td>{{ $p->asistencias}}</td>
            <td>{{ $p->Trimestre_idTrimestre}}</td>
        </tr>
        @endforeach
    </table>
</body>