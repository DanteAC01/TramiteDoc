@extends('adminlte::page')
@section('title','Nuevo documento')
@section('content_header')
<h1>Nuevo de documento</h1>
@stop
@section('content')
<div class='row'>
  <div class="col-sm-12 col-md-12 col-lg-12">
  <div class="card">
   <h5>Documentos existentes</h5>
  </div>
     <div class="card-body">
          {!! Form::model($documento,['route'=>['Documentos.documentos.update',$documento->id],'method'=>'put']) !!}
          <div class="col-sm-6 col-md-6 col-lg-6">
               <div class="form-group">
                    {!! Form::label(null, 'asunto', [null]) !!}
                    {!! Form::text('asunto', $documento->asunto, ['class' => 'form-control']) !!}
                    {!! Form::label(null, 'estado',[null]) !!}
                    {!! Form::text('estado', $documento->estado, ['class' => 'form-control']) !!}
                    {!! Form::label(null, 'folio', [null]) !!}
                    {!! Form::text('folio', $documento->folio, ['class' => 'form-control']) !!}
                    <label for="">Tipo de documento</label>
                    {!! Form::select('tdocumento_id', $tdocumento, null, ['class'=>'form-control','id'=>'tdocumento_id']) !!}
                    <label for="">Cliente</label>
                     {!! Form::select('cliente_id', $cliente, null, ['class'=>'form-control','id'=>'cliente_id']) !!}
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