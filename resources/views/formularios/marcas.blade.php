@extends('plantilla')
@section('contenido')

<form class="border p-3 m-md-5" method="post" action="/marca">

    <div class=" jumbotron abs-center">
        @csrf
        <div class="form-group active ">
            <div class="content text-center">
                <h5>Registrar Marca</h5>
            </div>
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Solo se permiten texto</small>
        </div>
            <button class="btn btn-danger d-block mx-auto">Guardar</button>
    </div>
</form>
@endsection
