@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>COMPUTADORES</h1>
            <a href="{{ route('computer.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Nuevo computador
            </a>
        </div>

        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($computers as $computer)
                    <tr>
                        <td>{{ $computer->number }}</td>
                        <td>{{ $computer->brand }}</td>
                        <td><a href="{{ route('computer.show', $computer->id) }}">Mostrar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection