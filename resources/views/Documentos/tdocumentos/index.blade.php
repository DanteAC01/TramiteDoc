@extends('adminlte::page')
@section('title','Tipos de documentos')
@section('content_header')
  <h1>Lista de tipos de documentos</h1>
@stop 
@section('content')
<div class='card'>
  <div class='card-header'>
    <a href="{{route('Documentos.tdocumentos.create')}}">
      <button class='btn btn-primary'>
        <i class='fas fa-folder-open'></i> Nuevo tipo de documento
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
@foreach ($tdocumentos as $tdocumento)
  <tr>
    <td>{{$tdocumento->id}}</td>
    <td>{{$tdocumento->nombre}}</td>
    <td style="text-align: center; width: 160px">
      <td>
        <a href="{{ route('Documentos.tdocumentos.edit', $tdocumento->id) }}" class="btn btn-success btn-sm">
          <i class="far fa-edit"></i>
      </a>
      </td>
      <td>
        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{ $tdocumento->id }}">
          <i class="fas fa-trash-alt"></i>
        </a>
      </td>
  </tr>
  @include('Documentos.tdocumentos.modal')
@endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection