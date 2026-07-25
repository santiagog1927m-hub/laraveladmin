@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>TEACHERS</h1>
            <a href="{{ route('teacher.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> NUEVOS INSTRUCTORES
            </a>
        </div>

        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection