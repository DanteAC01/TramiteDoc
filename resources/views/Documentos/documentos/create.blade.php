@extends('adminlte::page')

@section('title', 'Nuevo documento')

@section('content_header')
    <h1>Nuevo documento</h1>
@stop

@section('content')
    {!! Form::open(['route'=>'Documentos.documentos.index','method'=>'post']) !!}
    <p>Nuevo documento</p>
    <label for="">Asunto</label>
    {!! Form::text('asunto', null, ['class'=>'form-control']) !!}
    <label for="">Estado</label>
    {!! Form::text('estado', null, ['class'=>'form-control']) !!}
    <label for="">Folio</label>
    {!! Form::text('folio', null, ['class'=>'form-control']) !!}
    <label for="">Tipo de documento</label>
    {!! Form::select('tdocumento_id', $tdocumento, null, ['class'=>'form-control','id'=>'tdocumento_id']) !!}
    <label for="">Cliente</label>
    {!! Form::select('cliente_id', $cliente, null, ['class'=>'form-control','id'=>'cliente_id']) !!}
    <button type="submit">Guardar</button>
    {!! Form::close() !!}
@stop