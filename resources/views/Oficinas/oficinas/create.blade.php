@extends('adminlte::page')
@section('title','Nuevo oficina')
@section('content_header')
<h1>Nueva oficina</h1>
@stop
@section('content')
<div class='row'>
  <div class="col-sm-12 col-md-12 col-lg-12">
  <div class="card">
  </div>
     <div class="card-body">
          {!! Form::open(['route'=>'Oficinas.oficinas.store','method'=>'post']) !!}
          @if (isset($oficina))
          <input type="hidden" value="{{ $oficina->idOficina }}" name="oficina_id">
          @endif
          <div class="col-sm-6 col-md-6 col-lg-6">
               <div class="form-group">
                    {!! Form::label(null, 'nombre', [null]) !!}
                    {!! Form::text('nombre', $oficina->nombre, ['class' => 'form-control']) !!}
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