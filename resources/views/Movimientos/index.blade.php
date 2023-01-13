@extends('adminlte::page')

@section('title', 'Movimientos')

@section('content_header')
    <h1>Movimientos</h1>
@stop

@section('content')
    <p></p>
    <a href="{{ route('Movimientos.create') }}">
        <button>Nuevo movimiento</button>
    </a>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Documento</th>
                    <th>Oficina origen</th>
                    <th>Oficina destino</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movimientos as $movimiento )
                <tr>
                    <td>{{ $movimiento->documento->asunto }}</td>
                    <td>{{ $movimiento->oficina_id }}</td>
                    <td>{{ $movimiento->oficina_id }}</td>
                    <td>{{ $movimiento->fecha}}</td>
                    <td>{{ $movimiento->hora }}</td>
                    <td>
                        <a href="{{ route(' Movimientos.edit',$movimiento->id) }}" class="btn btn-success btn-sm">
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