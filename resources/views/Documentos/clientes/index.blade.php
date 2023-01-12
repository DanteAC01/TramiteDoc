@extends('adminlte::page')
@section('title','Clientes')
@section('content_header')
  <h1>Lista de clientes</h1>
@stop 
@section('content')
<div class='card'>
  <div class='card-header'>
    <h5>Clientes registrados</h5>
    <a href="{{route('Documentos.clientes.create')}}">
      <button class='btn btn-primary'>
        <i class='fas fa-folder-open'></i> Registrar nuevo cliente
      </button>
    </a>
  </div>
  <div class='card-body'>
    <table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Identificacion</th>
          <th>Telefono</th>
          <th>E-mail</th>
        </tr>
      </thead>

    <tbody>
@foreach ($cliente as $cliente)
  <tr>
    <td>{{$cliente->nombre}}</td>
    <td>{{$cliente->dniRuc}}</td>
    <td>{{$cliente->telefono}}</td>
    <td>{{$cliente->email}}</td>
    <td style="text-align: center; width: 160px">
  </tr>
@endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection