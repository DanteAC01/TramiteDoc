@extends('adminlte::page')
@section('title','Oficinas')
@section('content_header')
  <h1>Lista de oficinas</h1>
@stop 
@section('content')
<div class='card'>
  <div class='card-header'>
    <h5>Oficinas registradas</h5>
    <a href="{{route('Oficinas.oficinas.create')}}">
      <button class='btn btn-primary'>
        <i class='fas fa-folder-open'></i>Registrar nueva oficina
      </button>
    </a>
  </div>
  <div class='card-body'>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
        </tr>
      </thead>
    <tbody>
@foreach ($oficinas as $oficina)
  <tr>
    <td>{{ $oficina->id }}</td>
    <td>{{ $oficina->nombre }}</td>
    <td style="text-align: center; width: 160px">
      <td>
        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-edit-{{ $oficina->id }}">
          <i class="fas fa-trash-alt"></i>
      </a>
      </a>
      </td>
      <td>
        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{ $oficina->id }}">
          <i class="fas fa-trash-alt"></i>
        </a>
      </td>
  </tr>
  @include('Oficinas.oficinas.edit')
  @include('Oficinas.oficinas.modal')

@endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection