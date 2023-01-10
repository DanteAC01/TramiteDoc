@extends('adminlte::page')
@section('title','Nuevo cliente')
@section('content_header')
<h1>Nuevo de cliente</h1>
@stop
@section('content')
<div class='row'>
 <div class="col-sm-12 col-md-12 col-lg-12">
  <div class="card">
   <h5>Datos de cliente</h5>
  </div>
  <div class='card-body'>
   @if (isset($cliente)) 
   <input type="hidden" value="{{ $cliente->idcliente }}" name="cliente_id">
   <div class="row">
       <div class="col-sm-12 col-md-4 col-lg-4">
        {!! Form::label(null, 'nombre', [null]) !!}
        {!! Form::text('nombre', $cliente->nombre, ['class'=>'form-control']) !!}
       </div>
  </div>
  @endif
 </div>
</div>
@stop