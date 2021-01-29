@extends('layouts.layout')
@extends('layouts.headerForm')
@section('title', 'Boleta Form')

@section('content')
<html>

<head>
    <title> HOLA</title>
    <link rel="stylesheet" href="css/stylees.css">
</head>

<body>
    <div class="cont">
        <ul class="naveg">
            <li><a href="">GRUPOS</a>
                <ul>
                    <li><a href="">Asistencia</a>
                        <ul>
                            <li><a class="report" href="{{('reporte/')}}">Reporte Para Asistencia.PDF</a></li>
                        </ul>
                    </li>
                    <li><a href="">Calificacion</a>
                        <ul>
                            <li><a href="{{('reporteCalif/')}}">Reporte Para calificacion.PDF</a></li>
                        </ul>
                    </li>
                </ul>

            </li>
        </ul>

    </div>
</body>

</html>

@endsection