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

Route::get('/test', function () {
    $nombre = 'mariano';
    return view('test', ['nombre' => $nombre]);
});


Route::get('/inicio', function () {
    return view('inicio');
});


Route::get('/formulario', function () {
    return view('form');
});

Route::post('/procesa', function () {
    // $nombre = $_POST['nombre'];
    // $nombre = request()->input(key:'nombre');
    // $nombre = request()->post(key:'nombre');
    // $nombre = request()->nombre;
    $nombre = request(key: 'nombre');
    $marcas = [
        'AMD', 'Fernet', 'Audiotechnica', 
        'Intel', 'Toshiba', 'Apple'
      ];

    return view('procesa', [
        'nombre' => $nombre,
        'marcas' => $marcas 
    ]);
});