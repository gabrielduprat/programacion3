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
Route::get('/nueva', function () {
    return view('F1.nueva_vista');
});
Route::get('/vista2/{nombre}', function ($nombre) {
    return view('vista2',['nombre'=>$nombre]);
});

Route::get('/vistaSaludo/{nombre}', function ($nombre) {
    return view('vistaSaludo',['nombre'=>$nombre]);
});

Route::get('/vista3/{edad}', [App\Http\Controllers\tablasController::class, 'index']);

Route::get('/vistaPorEdad/{edad}', function ($edad) {
    return view('vistaPorEdad',['edad'=>$edad]);
});

Route::get('/vistaTablasNumero/{numero}', function ($numero) {
    return view('vistaTablasNumero',['numero'=>$numero]);
});

Route::get('/saludosAlternados', function () {
    return view('saludosAlternados');
});