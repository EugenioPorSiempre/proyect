<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home']);
Route::get('/marcas', [PagesController::class, 'marcas']);
Route::get('/vehiculos', [PagesController::class, 'vehiculos']);

//
Route::post('marca', [PagesController::class, 'marca']);
Route::post('/vehiculo', [PagesController::class, 'vehiculo']);