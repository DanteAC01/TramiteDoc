@extends('adminlte::page')
@section('title','Nueva oficina')
@section('content_header')
<h1>Nueva oficina</h1>
@stop
@section('content')
<div class='row'>
  <div class="col-sm-12 col-md-12 col-lg-12">
  <div class="card">
  </div>
     <div class="card-body">
          {!! Form::model($oficina,['route'=>['Oficinas.oficinas.update',$oficina->id],'method'=>'PUT']) !!}
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