@extends('plantilla')
@section('contenido')



<form class="border p-3 m-md-5" method="POST" action="/vehiculo">
    <div class=" jumbotron abs-center">
        @csrf
        <label for="marcas">Marcas:</label>

        <select id="marca" name="marca">
            <option value="kia">KIA</option>
            <option value="isuzu">ISUZU</option>
            <option value="toyota">TOYOTA</option>

        </select>

        <label for="color">Color:</label>
        <select id="color" name="color">
            <option value="rojo">ROJO</option>
            <option value="azul">AZUL</option>
            <option value="blanco">BLANCO</option>
            <option value="negro">NEGRO</option>
        </select>

        <div class="form-group">
            <label for="propietario">PLACA</label>
            <input type="text" class="form-control" name="placa" id="placa" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Ingrese Placa</small>
        </div>

        <div class="form-group">
            <label for="chasis">N° CHASIS</label>
            <input type="text" class="form-control" name="chasis" id="chasis" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Ingrese Nro de Chasis</small>
        </div>

        <div class="form-group">
            <label for="propietario">PROPIETARIO</label>
            <input type="text" class="form-control" name="propietario" id="propietario" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Nombre del propetario</small>
        </div>

        <button type="submit" class="btn btn-primary">GUARDAR</button>
    </div>
</form>


@endsection