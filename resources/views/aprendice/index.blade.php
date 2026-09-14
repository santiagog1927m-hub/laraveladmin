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
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($aprendices as $aprendice)
                    <tr>

                        {{-- NOMBRE --}}
                        <td>
                            {{ $aprendice->name }}
                        </td>

                        {{-- EMAIL --}}
                        <td>
                            {{ $aprendice->email }}
                        </td>

                        {{-- NÚMERO CELULAR --}}
                        <td>
                            {{ $aprendice->cell_number }}
                        </td>

                        {{-- CURSO --}}
                        <td>
                            {{ $aprendice->course_id }}
                        </td>

                        {{-- COMPUTADOR --}}
                        <td>
                            {{ $aprendice->computer_id }}
                        </td>

                        {{-- IMAGEN --}}
                        <td>
                            @if ($aprendice->urlFoto)
                                <img src="{{ asset('storage/images/' . $aprendice->urlFoto) }}" alt="Imagen del aprendiz"
                                    width="80" height="60" style="object-fit: cover; border-radius: 5px;">
                            @else
                                <span class="text-muted">
                                    Sin imagen
                                </span>
                            @endif
                        </td>

                        {{-- ACCIONES --}}
                        <td>

                            {{-- MOSTRAR --}}
                            <a href="{{ route('aprendice.show', $aprendice->id) }}" class="btn btn-success btn-sm">
                                Mostrar
                            </a>

                            {{-- EDITAR --}}
                            <a href="{{ route('aprendice.edit', $aprendice->id) }}" class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            {{-- ELIMINAR --}}
                            <form action="{{ route('aprendice.destroy', $aprendice->id) }}" method="POST"
                                style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"
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
