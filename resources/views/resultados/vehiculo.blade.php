@extends('plantilla')
@section('contenido')

{!! Form::open(['url' => 'foo/bar','class' => 'border p-3 m-md-5']) !!}
<div class=" jumbotron abs-center">
    {{ Form::label('La marca es:', null, ['class' => 'control-label']) }}
    {{ Form::text('Holame', $marca, array_merge(['class' => 'form-control'], ['color'=>'red']))}}
    {{ Form::label('El color es:', null, ['class' => 'control-label']) }}
    {{ Form::text('Holame', $color, array_merge(['class' => 'form-control'], ['color'=>'red']))}}
    {{ Form::label('La placa es:', null, ['class' => 'control-label']) }}
    {{ Form::text('Holame', $placa, array_merge(['class' => 'form-control'], ['color'=>'red']))}}
    {{ Form::label('El chasis es:', null, ['class' => 'control-label']) }}
    {{ Form::text('Holame', $chasis, array_merge(['class' => 'form-control'], ['color'=>'red']))}}
    {{ Form::label('Propietario:', null, ['class' => 'control-label']) }}
    {{ Form::text('Holame', $propietario, array_merge(['class' => 'form-control'], ['color'=>'red']))}}
</div>
{!! Form::close() !!}
@endsection