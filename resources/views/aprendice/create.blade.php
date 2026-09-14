@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">
<div class="card shadow-sm border-0">

    <!-- ENCABEZADO -->
    <div class="card-header bg-success text-white">

        <h4 class="mb-0 fw-bold">
            Registrar Aprendiz
        </h4>

        <small>
            Complete la información del nuevo aprendiz
        </small>

    </div>

    <!-- FORMULARIO -->
    <div class="card-body p-4">

        <form action="{{ route('aprendice.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <!-- NOMBRE -->
            <div class="mb-3">

                <label for="name"
                       class="form-label fw-bold text-success">
                    Nombre
                </label>

                <input type="text"
                       name="name"
                       id="name"
                       class="form-control"
                       placeholder="Ingrese el nombre del aprendiz"
                       required>

            </div>

            <!-- EMAIL -->
            <div class="mb-3">

                <label for="email"
                       class="form-label fw-bold text-success">
                    Email
                </label>

                <input type="email"
                       name="email"
                       id="email"
                       class="form-control"
                       placeholder="Ingrese el correo electrónico"
                       required>

            </div>

            <!-- CELULAR -->
            <div class="mb-3">

                <label for="cell_number"
                       class="form-label fw-bold text-success">
                    Número celular
                </label>

                <input type="number"
                       name="cell_number"
                       id="cell_number"
                       class="form-control"
                       placeholder="Ingrese el número celular"
                       required>

            </div>

            <!-- CURSO -->
            <div class="mb-3">

                <label for="course_id"
                       class="form-label fw-bold text-success">
                    Curso
                </label>

                <select name="course_id"
                        id="course_id"
                        class="form-select"
                        required>

                    <option value="">
                        Seleccione un curso
                    </option>

                    @foreach($courses as $course)

                        <option value="{{ $course->id }}">
                            {{ $course->course_number }}
                        </option>

                    @endforeach

                </select>

            </div>

            <!-- COMPUTADOR -->
            <div class="mb-3">

                <label for="computer_id"
                       class="form-label fw-bold text-success">
                    Computador
                </label>

                <select name="computer_id"
                        id="computer_id"
                        class="form-select"
                        required>

                    <option value="">
                        Seleccione un computador
                    </option>

                    @foreach($computers as $computer)

                        <option value="{{ $computer->id }}">
                            {{ $computer->number }}
                        </option>

                    @endforeach

                </select>

            </div>

            <!-- IMAGEN -->
            <div class="mb-4">

                <label for="urlFoto"
                       class="form-label fw-bold text-success">
                    Foto del aprendiz
                </label>

                <input type="file"
                       name="urlFoto"
                       id="urlFoto"
                       class="form-control"
                       accept="image/*">

                <small class="text-muted">
                    Seleccione una imagen del aprendiz.
                </small>

            </div>

            <!-- BOTONES -->
            <div class="d-flex justify-content-end gap-2">

                <a href="{{ route('aprendice.list') }}"
                   class="btn btn-secondary">
                    Cancelar
                </a>

                <button type="submit"
                        class="btn btn-success">
                    Guardar Aprendiz
                </button>

            </div>

        </form>

    </div>

</div>

</div>

@endsection
