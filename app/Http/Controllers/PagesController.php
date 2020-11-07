<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;

class PagesController extends Controller
{
    public function home()
    {
        return view('formularios.Bienvenida');
    }
    public function marcas()
    {
        return view('formularios.marcas');
    }
    public function vehiculos()
    {
        return view('formularios.vehiculos');
    }
    //
    public function marca(HttpRequest $request)
    {
        return view('resultados.marca', ['marca' => $request->nombre]);
    }
    public function vehiculo(HttpRequest $request)
    {
        return view('resultados.vehiculo', [
            'marca' => $request->marca,
            'color' => $request->color,
            'placa' => $request->placa,
            'chasis' => $request->chasis,
            'propietario' => $request->propietario
        ]);
    }
}
