@extends('adminlte::page')
@section('title','Clientes')
@section('content_header')
  <h1>Lista de clientes</h1>
@stop 
@section('content')
<div class='card'>
  <div class='card-header'>
    <h5>Clientes registrados</h5>
    <a href="{{route('documentos.clientes.create')}}">
      <button class='btn btn-primary'>
        <i class='fas fa-folder-open'></i> Registrar nuevo cliente
      </button>
    </a>
  </div>
  <div class='card-body'>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>DNI/RUC</th>
          <th>Telefono</th>
          <th>E-mail</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
@endsection