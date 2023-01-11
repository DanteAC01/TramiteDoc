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
     <div class="card-body">
          {!! Form::open(['route'=>'Documentos.clientes.store','method'=>'post']) !!}
          @if (isset($cliente))
          <input type="hidden" value="{{ $cliente->idCliente }}" name="cliente_id">
          @endif
          <div class="col-sm-6 col-md-6 col-lg-6">
               <div class="form-group">
                    {!! Form::label(null, 'nombre', [null]) !!}
                    {!! Form::text('nombre', $cliente->nombre, ['class' => 'form-control']) !!}
                    {!! Form::label(null, 'dniRuc',[null]) !!}
                    {!! Form::text('dniRuc', $cliente->dniRuc, ['class' => 'form-control']) !!}
                    {!! Form::label(null, 'email', [null]) !!}
                    {!! Form::email('email', $cliente->email, ['class' => 'form-control']) !!}
                    {!! Form::label(null, 'telefono', [null]) !!}
                    {!! Form::text('telefono', $cliente->telefono, ['class' => 'form-control']) !!}
                  </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary" type="submit">
                Guardar
            </button>
            </div>
          </div>
     </div>
  </div>
</div>
@stop