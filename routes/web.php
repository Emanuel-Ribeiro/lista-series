<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/maquinas', 'App\Http\Controllers\MaquinasController@index');
Route::get('/maquinas/adicionar', 'App\Http\Controllers\MaquinasController@create');
