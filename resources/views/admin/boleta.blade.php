@extends('layouts.layout')
@extends('layouts.headerForm')
@section('title', 'Boleta Form')

@section('content')
<h2 class="text-center mb-3 mt-2">Formulario de Ingreso</h2>
<form action="" class="mt-3 mb-3 border border-dark bordder-3 p-3">
    <h3>Datos del alumno</h3>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre </label>
        <input type="text" class="form-control" id="nombre">
    </div>

    <div class="mb-3">
        <label for="apellido-paterno" class="form-label">Apellido Paterno </label>
        <input type="text" class="form-control" id="apellido-paterno">
    </div>

    <div class="mb-3">
        <label for="apellido-materno" class="form-label">Apellido Materno </label>
        <input type="text" class="form-control" id="apellido-materno">
    </div>

    <div class="mb-3">
        <label for="curp" class="form-label">Curp </label>
        <input type="text" class="form-control" id="curp">
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="grado" class="form-label">Grado</label>
            <input type="text" class="form-control" id="grado">
        </div>
        <div class="col mb-3">
            <label for="grupo" class="form-label">Grupo</label>
            <input type="text" class="form-control" id="grupo">
        </div>
    </div>
    <div class="centrar-button">
        <button type="submit" class="btn btn-primary">Guardar Datos</button>
    </div>
</form>

@endsection