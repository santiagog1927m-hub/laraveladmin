@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>APRENDICES</h1>
            <a href="{{ route('aprendice.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Nuevo estudiante
            </a>
        </div>

        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Número celular</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aprendices as $aprendice)
                    <tr>
                        <td>{{ $aprendice->name }}</td>
                        <td>{{ $aprendice->email }}</td>
                        <td>{{ $aprendice->cell_number }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection