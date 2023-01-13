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
        <a href="{{ route('Oficinas.oficinas.edit', $oficina->id) }}">
          <button class="btn btn-primary">
              <i class="far fa-edit"></i> Editar
          </button>
        </a>
      </td>
      <td>
        <a data-toggle="modal" data-target="#modal-delete-{{ $oficina->id }}">
           <button class="btn btn-danger">
             <i class="fas fa-trash-alt"></i> Eliminar
           </button>
        </a>
      </td>
  </tr>
  @include('Oficinas.oficinas.modal')
{{--   @include('Oficinas.oficinas.edit') --}}
@endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection