@extends('layouts.layout')
@extends('layouts.headerForm')
@section('title', 'Boleta Form')
@extends('admin.menu-item')
@include('admin', 'menu.item')
@section('content')
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @foreach ($menus as $key => $item)
                @if ($item['parent'] != 0)
                @break
                @endif
                @include('partials.menu-item', ['item' => $item])
                @endforeach
            </ul>
        </div>

    </div>

</nav>
<div id="app" class="main container">
    <div class="row mt-3 header">
        <div class="col-3">
            <img src="http://localhost/php/Control-Escolar-main/public/images/sep-logo.png" alt="Logo SEP">
        </div>
        <div class="col-6">
            <h2>Sistema Educativo Nacional</h2>
            <h2>Escuela Secundaria</h2>
            <h3>Clave 1234567</h3>
        </div>
        <div class="col-31">
            <img src="http://localhost/php/Control-Escolar-main/public/images/estado-logo.png" alt="Logo Estado">
        </div>

        @endsection