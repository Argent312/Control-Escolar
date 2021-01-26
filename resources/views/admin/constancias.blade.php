@extends('layouts.layout')
@extends('layouts.headerForm')
@section('title', 'Constancias')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Curp</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($alumnos as $alumno)
        <tr>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellidoP}}</td>
            <td>{{$alumno->apellidoM}}</td>
            <td>{{$alumno->curp}}</td>
            <td>
                <button class="btn">
                    <a href="{{ route('constancia.show', $alumno->id) }}">Generar Constancia</a>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection