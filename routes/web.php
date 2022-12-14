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
    $ID_logado = null;
    setCookie_logado($ID_logado);
    return view('welcome');
});

Route::get('/cadastro', function () {
    return view('cadastroUsuario');
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

Route::get('/taxis', function () {
    return view('taxis');
});

Route::get('/addtaxis', function () {
    return view('addtaxis');
});

Route::get('/corridas', function () {
    return view('corridas');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/editarusuarios', function () {
    return view('editarusuarios');
});

Route::get('/taxistaCorridasDisponiveis', function () {
    return view('taxistaCorridasDisponiveis');
});

Route::get('/CorridasAceitas', function () {
    return view('CorridasAceitas');
});

Route::get('/editarstatuscorrida', function () {
    return view('editarstatuscorrida');
});


//-----------------------------------------------------------------------------------
//home
Route::get('/home', [consumirapiController::class, 'home']);
//cadastro
Route::get('/cadastro', [consumirapiController::class, 'cadastroUsuario']);
//-----------------------------------------------------------------------------------
//empresas
Route::get('/empresas', [consumirapiController::class, 'todasempresas']);

Route::get('/addempresas', [consumirapiController::class, 'addempresas']);

Route::get('/adicionarempresas', [consumirapiController::class, 'adicionarempresas']);

Route::get('/editarempresas2{id}', [consumirapiController::class, 'editarempresas2'])->name('editar_empresas');
Route::get('/editarempresas3{id}', [consumirapiController::class, 'editarempresas3'])->name('editar_empresas3');

Route::get('/deleteempresas{id}', [consumirapiController::class, 'deleteempresas'])->name('delete_empresas');

//------------------------------------------------------------------------------------
//taxis
Route::get('/taxis', [consumirapiController::class, 'todostaxis']);

Route::get('/adicionartaxis', [consumirapiController::class, 'adicionartaxis']);

Route::get('/addtaxis', [consumirapiController::class, 'addtaxis']);

Route::get('/editartaxis2{id}', [consumirapiController::class, 'editartaxis2'])->name('editar_taxis');
Route::get('/editartaxis3{id}', [consumirapiController::class, 'editartaxis3'])->name('editar_taxis3');

Route::get('/deletetaxis{id}', [consumirapiController::class, 'deletetaxis'])->name('delete_taxis');

//-----------------------------------------------------------------------------------
//corridas
Route::get('/corridas', [consumirapiController::class, 'todascorridas']);

Route::get('/editarstatus{id}', [consumirapiController::class, 'editarstatus'])->name('editar_status');
Route::get('/editarstatusb/{id}', [consumirapiController::class, 'editarstatusb'])->name('editar_statusb');

//-----------------------------------------------------------------------------------
//Painel Taxista
Route::get('/taxistaCorridasDisponiveis', [consumirapiController::class, 'corridasDispo']);

Route::get('/aceitarCorrida/{id}', [consumirapiController::class, 'aceitarCorrida'])->name('aceitar_Corrida');
Route::get('/CorridasAceitas', [consumirapiController::class, 'minhasCorridas']);

Route::get('/finalizarCorrida/{id}', [consumirapiController::class, 'finalizarCorrida'])->name('finalizar_Corrida');

//-----------------------------------------------------------------------------------
//usuarios
Route::get('/logar', [consumirapiController::class, 'logar']);

Route::get('/usuarios', [consumirapiController::class, 'todosUsuarios']);

Route::get('/adicionarUsuario', [consumirapiController::class, 'adicionarUsuario']);

Route::get('/editarusuariosb{id}', [consumirapiController::class, 'editarusuariosb'])->name('editar_usuariob');
Route::get('/editarusuarios3/{id}', [consumirapiController::class, 'editarusuarios3'])->name('editar_usuario3');

Route::get('/deleteusuarios{id}', [consumirapiController::class, 'deleteusuarios'])->name('delete_usuarios');