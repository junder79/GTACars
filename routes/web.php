<?php

use App\Http\Controllers\autosController;
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



/* Pagina Generica (Estática) */ 

Route::get('/', function () {
    return view('pagina');
});

Route::get('/autos','autosController@indexAutos');

Route::get('/aviones','avionesController@indexAviones');




// Route::get('/camiones', function () {
//     return view('aviones');
// });
