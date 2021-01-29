@extends('layouts.layout')
@extends('layouts.headerForm')
@section('title', 'Menu Docentes')

@section('content')
<html>

<head>
    <title>Menu Docentes</title>
    <link rel="stylesheet" href="css/stylees.css">
</head>

<body>
    <div class="cont">
        <ul class="naveg">
            <li><a href="">GRUPOS</a>
                <ul>
                    <li><a href="">ASISTENCIA</a>
                        <ul>
                            <li><a class="report" href="{{('reporte/')}}">REPORTE PARA ASISTENCIA.PDF</a></li>
                        </ul>
                    </li>
                    <li><a href="">CALIFICACIÓN</a>
                        <ul>
                            <li><a href="{{('reporteCalif/')}}">REPORTE PARA CALIFICACIÓN.PDF</a></li>
                        </ul>
                    </li>
                </ul>

            </li>
        </ul>

    </div>
</body>

</html>

@endsection