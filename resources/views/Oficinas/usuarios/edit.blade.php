@extends('adminlte::page')
@section('title','Usuarios')
@section('content_header')
<h1>Nuevo de uuser</h1>
@stop
@section('content')
<div class='row'>
  <div class="col-sm-12 col-md-12 col-lg-12">
  <div class="card">
   <h5>Datos de cliente</h5>
  </div>
     <div class="card-body">
        {!! Form::model($user,['route'=>['Oficinas.usuarios.update',$user->id],'method'=>'PUT']) !!}
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                {!! Form::label(null, 'name', [null]) !!}
                {!! Form::text('name', $user->nombre, ['class' => 'form-control']) !!}
                {!! Form::label(null, 'email', [null]) !!}
                {!! Form::email('email', $user->email, ['class' => 'form-control']) !!}
                {!! Form::label(null, 'password', [null]) !!}
                {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
                {!! Form::label(null, 'oficina', [null]) !!}
                {!! Form::select('oficina_id', $oficina, null, ['class' => 'form-control','id'=>'oficina_id']) !!}
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