<?php

use App\Http\Controllers\consumirapiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/empresas', function () {
    return view('empresas');
});

Route::get('/addempresas', function () {
    return view('addempresas');
});

Route::get('/editarempresas', function () {
    return view('editarempresas');
});



//-----------------------------------------------------------------------------------

Route::get('/empresas', [consumirapiController::class, 'todasempresas']);

Route::get('/adicionarempresas', [consumirapiController::class, 'adicionarempresas']);

Route::get('/editarempresas2{id}', [consumirapiController::class, 'editarempresas2'])->name('editar_empresas');
Route::get('/editarempresas3{id}', [consumirapiController::class, 'editarempresas3'])->name('editar_empresas3');

