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
    return view('admin.constancias');
});
//ruta para generar constancia de estudios

Route::resource('/constancia', 'ConstanciaController');
Route::resource('/alumno', 'AlumnoController');
Route::resource('/tutor', 'TutorController');
Route::resource('/root', 'AdminController')->middleware('root');
