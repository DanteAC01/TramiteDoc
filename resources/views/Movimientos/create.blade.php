@extends('adminlte::page')

@section('title', 'Nuevo documento')

@section('content_header')
    <h1>Nuevo movimiento</h1>
@stop

@section('content')
    {!! Form::open(['route'=>'Movimientos.index','method'=>'post']) !!}
    <p>Nuevo documento</p>
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