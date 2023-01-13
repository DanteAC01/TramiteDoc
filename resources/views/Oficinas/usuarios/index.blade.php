@extends('adminlte::page')
@section('title','Usuarios')
@section('content_header')
  <h1>Lista de usuarios</h1>
@stop 
@section('content')
<div class='card'>
  <div class='card-header'>
    <h5>Usuarios registrados</h5>
    <a href="{{route('Oficinas.usuarios.create')}}">
      <button class='btn btn-primary'>
        <i class='fas fa-folder-open'></i> Registrar nuevo usuarios
      </button>
    </a>
  </div>
  <div class='card-body'>
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>E-mail</th>
          <th>password</th>
        </tr>
      </thead>
    <tbody>
@foreach ($users as $user)
  <tr>
    

    <td>{{ $user->id }}</td>
   <td>{{ $user->nombre }}</td>
   <td>{{ $user->email }}</td>
   <td>{{ $user->password }}</td>
   <td style="text-align: center; width: 160px">
    <td>
{{--       <a href="{{ route('Oficinas.usuarios.edit', $user->id) }}"> --}}
        <button class="btn btn-primary">
            <i class="far fa-edit"></i> Editar
        </button>
      </a>
    </td>
    <td>
      <a data-toggle="modal" data-target="#modal-delete-{{ $user->id }}">
         <button class="btn btn-danger">
           <i class="fas fa-trash-alt"></i> Eliminar
         </button>
      </a>
    </td>
  </tr>
  @include('<Oficinas.usuarios.modal')
  @endforeach
    <tbody>
    </tbody>
  </table>
  </div>
</div>
@endsection