@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>CENTROS DE FORMACION</h1>
            <a href="{{ route('training_center.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> NUEVO CENTRO
            </a>
        </div>

        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($training_centers as $training_center)
                    <tr>
                        <td>{{ $training_center->name }}</td>
                        <td>{{ $training_center->location }}</td>
                        <td><a href="{{ route('training_center.show', $training_center->id) }}">Mostrar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection