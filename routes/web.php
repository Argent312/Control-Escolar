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
    return view('auth.login');
});
Route::get('/main', function () {
    return view('main');
})->name('main')->middleware('auth');

Route::get('/alumnos/editar', function () {
    return view('admin.alumnoEdit');
})->name('editar')->middleware('secretaria-root');

Route::get('/alumnos/baja', function () {
    return view('admin.alumnoBaja');
})->name('baja')->middleware('secretaria-root');

Route::get('/constancias', function () {
    return view('admin.constancias');
})->middleware('secretaria-root');
//ruta para generar constancia de estudios

Route::resource('/constancia', 'ConstanciaController')->middleware('secretaria-root');
Route::resource('/alumno', 'AlumnoController')->middleware('secretaria-root');
Route::resource('/tutor', 'TutorController')->middleware('secretaria-root');
Route::resource('/root', 'AdminController')->middleware('root');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
