@extends('plantilla')
@section('contenido')

<form class="border p-3 m-xl-5" method="GET" action="/vehiculos">


    <div class="jumbotron text-center ">
        <div class="abs-center">
            @csrf
            <label>
                <h1>BIENVENIDOS </h1>
                <h5>Elaborado por: Eugenio Isaac Martínez Chamorro</h5>
            </label>
            <button class="btn btn-outline-danger d-block mx-auto"> INICIAR!!</button>

        </div>
    </div>
</form>
@endsection