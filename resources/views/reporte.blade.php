<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylees.css">
    <title>Reporte Para Asistencia</title>
</head>
<header>

    <div class="encab">
        <h1>Reporte Para Asistencia</h1>
        <h2>Sistema Educativo Nacional</h2>
        <h2>Escuela Secundaria</h2>
        <h3>Clave 1234567</h3>
    </div>
</header>

<body class="cuerpo">
    <div class="posiciontabla">
        <table class="tablasis">
            <thead class="encabezado">
                <tr>
                    <th>Id Alumno</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Faltas</th>
                    
                    <th>Id Trimestre</th>
                </tr>
                @foreach($periodo as $p)
                <tr>
                    <td>{{ $p->idAlumno}}</td>
                    <td>{{ $p->nombre}}</td>
                    <td>{{ $p->apellidoPaterno}}</td>
                    <td>{{ $p->apellidoMaterno}}</td>
                    <td>{{ $p->faltas_asistencia}}</td>
                    
                    <td>{{ $p->Trimestre_idTrimestre}}</td>
                </tr>
                @endforeach
        </table>
    </div>
</body>

</html>