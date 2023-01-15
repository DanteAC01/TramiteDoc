@extends('adminlte::page')

@section('title', 'Editar documento')

@section('content_header')
    <h1>Editar movimiento</h1>
@stop

@section('content')
{!! Form::model($movimiento,['route'=>['Movimientos.update', $movimiento->id],'method'=>'put']) !!}
    <p>Editar documento</p>
    <label for="">Documento</label>
    {!! Form::select('documento_id',$documento, null, ['class'=>'form-control','id'=>'documento_id']) !!}
    <label for="">oficina origen</label>
    {!! Form::select('oforigen_id',$oficina, null, ['class'=>'form-control', 'id'=>'oforigen_id']) !!}
    <label for="">oficina destino</label>
    {!! Form::select('ofdestino_id',$oficina, null, ['class'=>'form-control', 'id'=>'ofdestino_id']) !!}
    <label for="">fecha</label>
    {!! Form::date('fecha', null, ['class'=>'form-control']) !!}
    <label for="">hora</label>
    {!! Form::time('hora', null, ['class'=>'form-control']) !!}
    <button type="submit">Guardar</button>
    {!! Form::close() !!}
@stop