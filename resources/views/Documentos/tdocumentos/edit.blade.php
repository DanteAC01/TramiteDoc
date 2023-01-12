@extends('adminlte::page')
@section('title','Editar')
@section('content_header')
<h1>Editar tipo</h1>
@stop
@section('content')
<div class='row'>
  <div class="col-sm-12 col-md-12 col-lg-12">
  <div class="card">
  </div>
     <div class="card-body">
      {!! Form::model($tdocumento,['route'=>['Documentos.tdocumentos.update',$tdocumento->id],'method'=>'PUT']) !!}
          <div class="col-sm-6 col-md-6 col-lg-6">
               <div class="form-group">
                    {!! Form::label(null, 'nombre', [null]) !!}
                    {!! Form::text('nombre', $tdocumento->nombre, ['class' => 'form-control']) !!}
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