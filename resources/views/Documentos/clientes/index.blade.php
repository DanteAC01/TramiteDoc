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
          <th>ID</th>
          <th>Nombre</th>
          <th>Identificacion</th>
          <th>Telefono</th>
          <th>E-mail</th>
        </tr>
      </thead>

    <tbody>
@foreach ($clientes as $cliente)
  <tr>
    <td>{{$cliente->id}}</td>
    <td>{{$cliente->nombre}}</td>
    <td>{{$cliente->dniRuc}}</td>
    <td>{{$cliente->telefono}}</td>
    <td>{{$cliente->email}}</td>
    <td style="text-align: center; width: 160px">
      <td>
        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-edit-{{ $cliente->id }}">
          <i class="fas fa-trash-alt"></i>
      </a>
      </td>
      <td>
        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{ $cliente->id }}">
          <i class="fas fa-trash-alt"></i>
        </a>
      </td>
  </tr>
  @include('Documentos.clientes.modal')
@endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection