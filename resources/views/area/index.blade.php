@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h1>AREAS DE FORMACION</h1>

            <a href="{{ route('areas.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Nueva Area
            </a>

        </div>

        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($areas as $area)

                    <tr>

                        <td>{{ $area->name }}</td>

                        <td>

                            <a href="{{ route('area.show', $area->id) }}"
                               class="btn btn-info btn-sm">
                                Mostrar
                            </a>

                            <a href="{{ route('area.edit', $area->id) }}"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('area.destroy', $area->id) }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Está seguro de eliminar esta área?')">
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