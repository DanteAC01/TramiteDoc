@extends('adminlte::page')

@section('title', 'Nuevo documento')

@section('content_header')
    <h1>Nuevo documento</h1>
@stop

@section('content')
    <p>Nuevo documento</p>
    <label for="">Asunto</label>
    <input type="text">
    <label for="">Estado</label>
    <input type="text">
    <label for="">Folio</label>
    <input type="text">
    <button type="submit">Guardar</button>
@stop