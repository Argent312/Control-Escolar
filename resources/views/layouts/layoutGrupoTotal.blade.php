<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--Styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <link href="{{ asset(mix('css/styles.css')) }}" rel="stylesheet">
    <link href="{{ asset(mix('css/reportes.css')) }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="nav">
        @yield('nav')
    </div>

    <div class="main container" id="app">
        @yield('header')
        @yield('content')
    <div class="row">
        <div class="col s4">
             <div class="card-panel grey lighten-1 titulo">
                <h3>Relación Aprobados y Reprobados por Materia-Grupo</h3>         
            </div>
        </div>
    </div>
    
    
    
    <div class="row">

    <div class="col s6">
        <div class="card-content ">
			<div class="card-panel grey lighten-1">
            <h6 style="text-align:center;
                            font-weight:bold;
                            font-size:35px;
                            margin-bottom:auto;">Primer Año</h6>
                @yield('graficauno')
			</div>
        </div>
    </div>

	<div class="col s6">
        <div class="card-content ">
			<div class="card-panel grey lighten-1">
            <h6 style="text-align:center;
                            font-weight:bold;
                            font-size:35px;
                            padding-bottom:auto;">Primer Año</h6>
            @yield('graficados')
			</div>
        </div>
    </div>

    </div>

    <div class="row">

    <div class="col s6">
        <div class="card-content ">
			<div class="card-panel grey lighten-1">
            <h6 style="text-align:center;
                            font-weight:bold;
                            font-size:35px;
                            margin-bottom:auto;">Segundo Año</h6>
                @yield('graficatres')
			</div>
        </div>
    </div>

	<div class="col s6">
        <div class="card-content ">
			<div class="card-panel grey lighten-1">
            <h6 style="text-align:center;
                            font-weight:bold;
                            font-size:35px;
                            margin-bottom:auto;">Segundo Año</h6>
            @yield('graficacuatro')
			</div>
        </div>
    </div>
    
    </div>

    <div class="row">

    <div class="col s6">
        <div class="card-content ">
			<div class="card-panel grey lighten-1">
                <h6 style="text-align:center;
                            font-weight:bold;
                            font-size:35px;
                            margin-bottom:auto;">Tercer Año</h6>
                @yield('graficacinco')
			</div>
        </div>
    </div>

	<div class="col s6">
        <div class="card-content ">
			<div class="card-panel grey lighten-1">
            <h6 style="text-align:center;
                            font-weight:bold;
                            font-size:35px;
                            margin-bottom:auto;">Tercer Año</h6>
            @yield('graficaseis')
			</div>
        </div>
    </div>
    
    </div>

</div>

    <footer>
        @yield('footer')
    </footer>

    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script> 
</body>

</html>