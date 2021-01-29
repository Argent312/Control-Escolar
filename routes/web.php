<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.boleta');
});


 Route::get('/reporte', 'UserController@reporte');
    //  ->name('views.reporte'); 


    
    Route::get ('/reporteCalif', 'UserController@reporteCalif')
    ->name('views.reporteCalif');
     
// Route::get('pdf', 'ReportController@generar' );

// // Insercion de datos a la tabla ALUMNOS BIEN
// Route::get('/insert', function(){
//     DB::insert('insert into alumnos (idAlumno, curp, nombre, apellidoPaterno, apellidoMaterno, edad, sexo, tipoSangre, fechaNacimiento, direccion, colonia, codigoPostal, entidad, nacionalidad, estadoAlumno, tecnologia, telEmergencia) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [1, 'veoc', 'cesar', 'vel', 'ort', 20, 'M', 'O', '2005/11/01', 'calle', 'col', '91168', 'ver', 'mex', 'vig', 'sis', '81302']);
// });


// // Insercion de datos a la tabla MATERIAS BIEN
// Route::get('/insert', function () {
//     DB::insert('insert into materias (idMaterias, nombre, clave, horaInicio, horaFinalizaion) values (?, ?,?,?,?)', [3, 'matematicas','m03','09:00:00', '10:00:00']);
// });
// Route::get('/insert', function () {
//     DB::insert('insert into materias (idMaterias, nombre, clave, horaInicio, horaFinalizaion) values (?, ?,?,?,?)', [1, 'filosofia','m01','07:00:00', '8:00:00']);
// });



// Insercion de datos a la tabla PERIODO BIEN
//    Route::get('/insert', function(){
//      DB::insert('insert into periodo (idPeriodo, inicioClase, finClase) values (?,?,?)', [1, '2005/11/01', '2008/11/01']); 
//  });
//  Route::get('/insert', function(){
//      DB::insert('insert into periodo (idPeriodo, inicioClase, finClase) values (?,?,?)', [2, '2005/11/01', '2008/11/01']); 
//  });
// Route::get('/insert', function(){
//       DB::insert('insert into periodo (idPeriodo, inicioClase, finClase) values (?,?,?)', [3, '2005/11/01', '2008/11/01']); 
//   });




// Insercion de datos a la tabla TRIMESTRE BIEN
// Route::get('/insert', function () {
//     DB::insert('insert into trimestre (idTrimestre, numeroTimestre, periodo_idPeriodo) values (?,?,?)', [1,"tercer",1]);
// });


// // Insercion de datos a la tabla CALIFICACIONES
// Route::get('/insert', function () {
//     DB::insert('insert into calificaciones (idCalificaciones, calificacion, faltas_asistencia, asistencias, grado, grupo, tipo, alumnos_idAlumno, materias_idMaterias, Trimestre_idTrimestre) values (?,?,?,?,?,?,?,?,?,?)', [1, 8.5, 2, 'sj', 't', 'A', 'Vespertino', 1, 1, 1]);
// });
// Route::get('/insert', function () {
//      DB::insert('insert into calificaciones (idCalificaciones, calificacion, faltas_asistencia, asistencias, grado, grupo, tipo, alumnos_idAlumno, materias_idMaterias, Trimestre_idTrimestre) values (?,?,?,?,?,?,?,?,?,?)', [2, 9.5, 0, 'bien', '2', 'A', 'Matutino', 1, 3, 1]);
// });
// Route::get('/insert', function () {
//      DB::insert('insert into calificaciones (idCalificaciones, alumnos_idAlumno, calificacion, faltas_asistencia, asistencias, grado, grupo, tipo, materias_idMaterias, Trimestre_idTrimestre) values (?,?,?,?,?,?,?,?,?,?)', [3, 1, 10, 3, 'HA', 'V', 'F', 'Matutino', 1, 1]);
//      });
//Route::get('/insert', function () {
  //   DB::insert('insert into calificaciones (idCalificaciones, alumnos_idAlumno, calificacion, faltas_asistencia, asistencias, grado, grupo, tipo, materias_idMaterias, Trimestre_idTrimestre) values (?,?,?,?,?,?,?,?,?,?)', [5, 1, 10, 3, 'HA', 'V', 'F', 'Matutino', 1, 1]);
   //  });


   Route::get('/select', function(){
       DB::select('SELECT trimestre.idTrimestre, periodo.inicioClase FROM trimestre INNER JOIN periodo ON trimestre.periodo_idPeriodo = periodo.idPeriodo');
   });

   Route::get('/select', function(){
       DB::select('SELECT alumnos.idAlumno, alumnos.nombre, alumnos.apellidoPaterno, alumnos.apellidoMaterno,
        calificaciones.idCalificaciones, calificaciones.grado, calificaciones.grupo, calificaciones.calificacion 
         FROM calificaciones
          INNER JOIN alumnos ON calificaciones.alumnos_idAlumno = alumnos.idAlumno;');
   });
//INNER JOIN CONSULTA DE 3 TABLAS
Route::get('/select', function(){
   DB::select('SELECT alumnos.idAlumno, alumnos.nombre, alumnos.apellidoPaterno, alumnos.apellidoMaterno, 
calificaciones.idCalificaciones, calificaciones.faltas_asistencia, calificaciones.asistencias, idTrimestre, calificaciones.Trimestre_idTrimestre
FROM calificaciones 
INNER JOIN alumnos 
ON calificaciones.alumnos_idAlumno = alumnos.idAlumno
INNER JOIN trimestre
ON calificaciones.Trimestre_idTrimestre = trimestre.idTrimestre;');
});

Route::get('/select', function(){
   DB::select('SELECT alumnos.idAlumno, alumnos.nombre, alumnos.apellidoPaterno, alumnos.apellidoMaterno, 
calificaciones.idCalificaciones, calificaciones.grado, calificaciones.grupo , idTrimestre, 
calificaciones.Trimestre_idTrimestre
FROM calificaciones 
INNER JOIN alumnos 
ON calificaciones.alumnos_idAlumno = alumnos.idAlumno
INNER JOIN trimestre
ON calificaciones.Trimestre_idTrimestre = trimestre.idTrimestre;');
});


//consulta con 4 tablas calif, alum, trim, periodo
Route::get('/select', function(){
   DB::select('SELECT alumnos.idAlumno, alumnos.nombre, alumnos.apellidoPaterno, alumnos.apellidoMaterno, 
calificaciones.idCalificaciones, calificaciones.faltas_asistencia, calificaciones.asistencias,
calificaciones.Trimestre_idTrimestre, periodo.idPeriodo, periodo.inicioClase, periodo.finClase
FROM calificaciones 
INNER JOIN alumnos 
ON calificaciones.alumnos_idAlumno = alumnos.idAlumno
INNER JOIN trimestre
ON calificaciones.Trimestre_idTrimestre = trimestre.idTrimestre
INNER JOIN periodo
ON trimestre.periodo_idPeriodo = periodo.idPeriodo;
');
});