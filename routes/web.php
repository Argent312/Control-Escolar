<?php
use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Reportes;
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
//ruta para generar boleta de calificaciones
Route::get('/admin', function () {
    return view('admin.boleta');
});

Route::post('/pdfboleta', 'PDFController@PDFPeriodos')->name('boletaPDF');
Route::get('/GenerarBoleta', 'PDFController@show');



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

/*Reportes materias por grado*/
Route::get("/LenguaMaterna", [Reportes::class, "ReporteLengua"])->name('reporte.lengua');
Route::get("/Matematicas", [Reportes::class, "ReporteMatematicas"])->name('reporte.mate');
Route::get("/Ciencias", [Reportes::class, "ReporteCiencias"])->name('reporte.ciencias');
Route::get("/LenguaExtranjera", [Reportes::class, "ReporteIngles"])->name('reporte.ingles');
Route::get("/Geografica", [Reportes::class, "ReporteGeografia"])->name('reporte.geo');
Route::get("/Historia", [Reportes::class, "ReporteHistoria"])->name('reporte.historia');
Route::get("/Tecnologia", [Reportes::class, "ReporteTecnologia"])->name('reporte.tecno');
Route::get("/EducacionFisica", [Reportes::class, "ReporteEducacion"])->name('reporte.edu');
Route::get("/Civica", [Reportes::class, "ReporteCivica"])->name('reporte.civica');
Route::get("/Artes", [Reportes::class, "ReporteArtes"])->name('reporte.artes');

/*Reportes materias por grado*/
Route::get("/GrupoLenguaMaterna", [Reportes::class, "GruposLengua"])->name('grupo.lengua');
Route::get("/GrupoMatematicas", [Reportes::class, "GruposMatematicas"])->name('grupo.mate');
Route::get("/GrupoCiencias", [Reportes::class, "GruposCiencias"])->name('grupo.ciencias');
Route::get("/GrupoLenguaExtranjera", [Reportes::class, "GruposIngles"])->name('grupo.ingles');
Route::get("/GrupoGeografica", [Reportes::class, "GruposGeografia"])->name('grupo.geo');
Route::get("/GrupoHistoria", [Reportes::class, "GruposHistoria"])->name('grupo.historia');
Route::get("/GrupoTecnologia", [Reportes::class, "GruposTecnologia"])->name('grupo.tecno');
Route::get("/GrupoEducacionFisica", [Reportes::class, "GruposEduFisica"])->name('grupo.edu');
Route::get("/GrupoCivica", [Reportes::class, "GruposCivica"])->name('grupo.civica');
Route::get("/GrupoArtes", [Reportes::class, "GruposArtes"])->name('grupo.artes');


/*Graficas de total de alumnos*/
Route::get("/TotalAlumnos", [Reportes::class, "TotalAlumnos"])->name('total.alumnos');
Route::get("/TotalAlumnosGrupo", [Reportes::class, "TotalAlumnosGrupo"])->name('total.alumnosgrupo');