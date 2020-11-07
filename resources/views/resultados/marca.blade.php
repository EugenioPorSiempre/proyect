@extends('plantilla')
@section('contenido')

{!! Form::open(['url' => 'foo/bar','class' => 'border p-3 m-md-5']) !!}
<div class=" jumbotron abs-center">
    {{ Form::label('La marca es:', null, ['class' => 'control-label']) }}
    {{ Form::text('Holame', $marca, array_merge(['class' => 'form-control'], ['color'=>'red']))}}
</div>
{!! Form::close() !!}

@endsection