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
                    <th>Curso</th>
                    <th>Computador</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($aprendices as $aprendice)
                    <tr>
                        <td>{{ $aprendice->name }}</td>
                        <td>{{ $aprendice->email }}</td>
                        <td>{{ $aprendice->cell_number }}</td>
                        <td>{{ $aprendice->course_id }}</td>
                        <td>{{ $aprendice->computer_id }}</td>

                        <td>
                            <a href="{{ route('aprendice.show', $aprendice->id) }}"
                               class="btn btn-info btn-sm">
                                Mostrar
                            </a>

                            <a href="{{ route('aprendice.edit', $aprendice->id) }}"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('aprendice.destroy', $aprendice->id) }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Está seguro de eliminar este aprendiz?')">
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