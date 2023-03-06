<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use Illuminate\Http\Request; // Componente necessaria para o uso do Request

Route::get('/', function () {
    return view('Welcome');
});


Route::post('/cadastrar-produto'  , function (Request $request) {
      dd($request->all()); //Estou a pedir pra ser mostrada todas as informações //Recebo as informações do formulario apartir do metódo dd()
});

