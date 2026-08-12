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
                    <th>Id de área</th>
                    <th>Id centro</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($teachers as $teacher)

                    <tr>

                        <td>{{ $teacher->name }}</td>

                        <td>{{ $teacher->email }}</td>

                        <td>{{ $teacher->area_id }}</td>

                        <td>{{ $teacher->training_center_id }}</td>

                        <td>

                            <a href="{{ route('teacher.show', $teacher->id) }}"
                               class="btn btn-info btn-sm">
                                Mostrar
                            </a>

                            <a href="{{ route('teacher.edit', $teacher->id) }}"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('teacher.destroy', $teacher->id) }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Está seguro de eliminar este instructor?')">
                                    Eliminar
                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

@endsection