<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request as HttpRequest;//




Route::get('/', function () {
    return view('formularios.Bienvenida');
});

Route::get('/marcas', function () {
    return view('formularios.marcas');
});

Route::get('/vehiculos', function () {
    return view('formularios.vehiculos');
});


//
Route::post('marca', function (HttpRequest $request) {
    return view('resultados.marca', ['marca' => $request->nombre]);
});


Route::post('/vehiculos', function (HttpRequest $request) {
    dd($request->all());
});