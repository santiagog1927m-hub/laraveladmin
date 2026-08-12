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
                    <th>Número</th>
                    <th>Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($computers as $computer)

                    <tr>

                        <td>{{ $computer->number }}</td>

                        <td>{{ $computer->brand }}</td>

                        <td>

                            <a href="{{ route('computer.show', $computer->id) }}"
                               class="btn btn-info btn-sm">
                                Mostrar
                            </a>

                            <a href="{{ route('computer.edit', $computer->id) }}"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('computer.destroy', $computer->id) }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Está seguro de eliminar este computador?')">
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