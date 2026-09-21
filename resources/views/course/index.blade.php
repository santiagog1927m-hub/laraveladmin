@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h1>CURSOS</h1>

            <a href="{{ route('course.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> NUEVO CURSO
            </a>

        </div>

        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <th>Número de curso</th>
                    <th>Día</th>
                    <th>Área</th>
                    <th>Centro de formación</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($courses as $course)
                    <tr>

                        {{-- NÚMERO DE CURSO --}}
                        <td>
                            {{ $course->course_number }}
                        </td>

                        {{-- DÍA --}}
                        <td>
                            {{ $course->day }}
                        </td>

                        {{-- ÁREA --}}
                        <td>
                            {{ $course->area_id }}
                        </td>

                        {{-- CENTRO DE FORMACIÓN --}}
                        <td>
                            {{ $course->training_center_id }}
                        </td>

                        {{-- ACCIONES --}}
                        <td>

                            {{-- MOSTRAR --}}
                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-success btn-sm">
                                Mostrar
                            </a>

                            {{-- EDITAR --}}
                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            {{-- ELIMINAR --}}
                            <form action="{{ route('course.destroy', $course->id) }}" method="POST"
                                style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Está seguro de eliminar este curso?')">
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