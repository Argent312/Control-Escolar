@extends('layouts.layout')
@extends('layouts.headerForm')
@section('title', 'Lista de Asistencia Form')

@section('content')
<h2 class="text-center mb-3 mt-2">Boleta</h2>
<form action="pdfboleta" class="mt-3 mb-3 border border-dark bordder-3 p-3" method="POST">
    @csrf
    <div class="row">
        <div class="col mb-3">
            <label for="grado" class="form-label">Grado</label>
            <select class="form-control" id="grado" name="grado">
                <option value="">-- Seleccione el grado--</option>
                @foreach($grados as $grado)
                    <option value="{{ $grado->grado }}">{{ $grado->grado }}</option>
                @endforeach
            </select>

            <label for="grupo" class="form-label">Grupo</label>
            <select class="form-control" id="grupo" name="grupo">
                <option value="">-- Seleccione el grupo--</option>
                @foreach($grupos as $grupo)
                    <option value="{{ $grupo->grupo }}">{{ $grupo->grupo }}</option>
                @endforeach
            </select>

            <!--
            <label for="materia" class="form-label">Materia</label>
            <select class="form-control" id="materia" name="materia">
                <option value="">-- Seleccione el materia--</option>
                @foreach($materias as $materia)
                    <option value="{{ $materia->idMaterias }}">{{ $materia->nombre }}</option>
                @endforeach
            </select>
            -->

            <label for="trimestre" class="form-label">Trimestre</label>
            <select class="form-control" id="trimestre" name="trimestre">
                <option value="">-- Seleccione el trimestre--</option>
                @foreach($trimestres as $trimestre)
                    <option value="{{ $trimestre->idTrimestre}}">{{ $trimestre->numeroTimestre}} </option>
                @endforeach
            </select>

            <label for="alumno" class="form-label">Alumno</label>
            <select class="form-control" id="alumno" name="alumno">
                <option value="">-- Seleccione el alumno--</option>
                @foreach($alumnos as $alumno)
                    <option value="{{ $alumno->idAlumno}}">{{ $alumno->nombre}} {{ $alumno->apellidoPaterno }} {{ $alumno->apellidoMaterno }} </option>
                @endforeach
            </select>
        </div>
    </div>
       
   
    <div class="centrar-button">
        <button type="submit" class="btn btn-primary">Imprimir boleta</button>
    </div>
</form>
<div class="centrar-button">
    <a href="#"><button type="submit" class="btn btn-primary">Regresar</button></a>
</div>



@endsection
