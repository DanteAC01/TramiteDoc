@extends('adminlte::page')

@section('title', 'Documentos')

@section('content_header')
    <h1>Documentos</h1>
@stop

@section('content')
    <p></p>
    <a href="{{ route('Documentos.documentos.create') }}">
        <button>Nuevo Documento</button>
    </a>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Asunto</th>
                    <th>Estado</th>
                    <th>Folio</th>
                    <th>Tipo</th>
                    <th>Cliente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documentos as $documento )
                <tr>
                    <td>{{ $documento->asunto }}</td>
                    <td>{{ $documento->estado }}</td>
                    <td>{{ $documento->folio }}</td>
                    <td>{{ $documento->tdocumento->nombre}}</td>
                    <td>{{ $documento->cliente->nombre}}</td>
                    <td>
                        <a href="{{ route('Documentos.documentos.edit',$documento->id) }}" class="btn btn-success btn-sm">
                            <i class="far fa-edit"></i>
                        </a>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@stop