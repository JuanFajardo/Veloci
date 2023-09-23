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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::resource('/Vehiculo' , 'App\Http\Controllers\VehiculoController');
    Route::get('/Vehiculo/{id}/activo' , 'App\Http\Controllers\VehiculoController@activo');
    Route::get('/Vehiculo/{id}/popular' , 'App\Http\Controllers\VehiculoController@popular');

    Route::resource('/Trabajo' , 'App\Http\Controllers\TrabajoController');
    Route::get('/Trabajo/{id}/Activar' , 'App\Http\Controllers\TrabajoController@activar');
    Route::resource('/Tipo' , 'App\Http\Controllers\TipoController');
    Route::resource('/Motor' , 'App\Http\Controllers\MotorController');
    Route::resource('/Marca' , 'App\Http\Controllers\MarcaController');
    Route::resource('/Combustible' , 'App\Http\Controllers\CombustibleController');

    Route::get('/Visita' , 'App\Http\Controllers\VisitaController@index');
    Route::get('/Visita/{id}' , 'App\Http\Controllers\VisitaController@detalle');
    Route::get('/Grafica/{inicio}/{fin}/{tipo}' , 'App\Http\Controllers\VisitaController@graf');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Tienda/{busqueda}/Marca', [App\Http\Controllers\HomeController::class, 'show'])->name('home');
Route::get('/Tienda/{id}' , 'App\Http\Controllers\VehiculoController@show');
Route::get('/Tienda' , 'App\Http\Controllers\VehiculoController@tienda');
Route::get('/Inventario/{tipo}' , 'App\Http\Controllers\VehiculoController@inventarioTipo');
Route::post('/Correo' , 'App\Http\Controllers\VehiculoController@correo')->name('Enviar.Correo');
Route::post('/Tienda' , 'App\Http\Controllers\VehiculoController@filtro')->name('Vehiculo.filtro');
Route::post('/Tienda/Buscar' , 'App\Http\Controllers\VehiculoController@buscar')->name('vehiculo.buscar');

Route::get('/Pagina/{pagina}' , 'App\Http\Controllers\VehiculoController@pagina');
Route::get('/Clasificados' , 'App\Http\Controllers\TrabajoController@clasificados');
