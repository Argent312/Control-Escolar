<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Docentes</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/stylees.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .dropdown-menu .sub-menu {
                left: 100%;
                position: absolute;
                top: 0;
                visibility: hidden;
                margin-top: -1px;
            }

            .dropdown-menu li:hover .sub-menu {
                visibility: visible;
            }

            .dropdown:hover .dropdown-menu {
                display: block;
            }

        </style>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    </head>
    <body>
    <body>
    @section('content')
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                                                                                
        <li class="dropdown">

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GRUPOS <span class="caret"></span></a>
        <ul class="dropdown-menu sub-menu">
                                                <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ASISTENCIA <span class="caret"></span></a>
        <ul class="dropdown-menu sub-menu">
        <li><a href="{{('reporte/')}}">REPORTE DE LISTA DE ASISTENCIA. PDF</a></li>
                    <a href="/"></a>
                                    </ul>
    </li>
                    
                                                                <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CALIFICACIÓN <span class="caret"></span></a>
        <ul class="dropdown-menu sub-menu">
                                                <li><a href="">REPORTE PARA CALIFICACIONES  PDF </a></li>
                    <a href="/"></a>
                                    </ul>
    </li>
                    
                                    </ul>
    </li>
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
    
            
            <!-- <div class="content">
            <div class="row mt-3 header">
    <div class="col-3">
        <img src="http://localhost/php/Control-Escolar-main/public/images/sep-logo.png" alt="Logo SEP">
    </div> -->
    <!-- <div class="col-6">
        <h2>Sistema Educativo Nacional</h2>
        <h2>Escuela Secundaria</h2>
        <h3>Clave 1234567</h3>
    </div> -->
    <!-- <div class="col-3">
        <img src="http://localhost/php/Control-Escolar-main/public/images/estado-logo.png" alt="Logo Estado">
    </div> -->
    
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    



</body>
    </body>
</html>


