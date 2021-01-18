<?php

use App\Http\Controllers\AlumnoController;
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

Route::get('/alumnos/editar', function () {
    return view('admin.alumnoEdit');
});
Route::get('/alumnos/baja', function () {
    return view('admin.alumnoBaja');
});
Route::get('/constancias', function () {
    return view('admin.constancia');
});
//ruta para generar constancia de estudios
Route::pattern('/alumno', '[0-9]+');
Route::get('/alumno/{alumno}/constancia', 'AlumnoController@constancia');

Route::resource('/alumno', 'AlumnoController');
Route::resource('/tutor', 'TutorController');

