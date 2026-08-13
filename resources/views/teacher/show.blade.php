@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        <!-- ENCABEZADO -->
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">

            <div>
                <h5 class="mb-0 fw-bold">
                    Detalle del Instructor
                </h5>

                <small>
                    Información del registro #{{ $profesor->id }}
                </small>
            </div>

            <a href="{{ route('teacher.list') }}"
               class="btn btn-light btn-sm">
                Volver
            </a>

        </div>


        <!-- INFORMACIÓN -->
        <div class="card-body p-4">

            <!-- ID -->
            <div class="mb-3 border-bottom pb-2">
                <label class="form-label text-success fw-bold">
                    ID
                </label>

                <p class="fs-5 mb-0">
                    {{ $profesor->id }}
                </p>
            </div>


            <!-- NOMBRE -->
            <div class="mb-3 border-bottom pb-2">
                <label class="form-label text-success fw-bold">
                    Nombre del Instructor
                </label>

                <p class="fs-5 mb-0">
                    {{ $profesor->name }}
                </p>
            </div>


            <!-- CORREO -->
            <div class="mb-3 border-bottom pb-2">
                <label class="form-label text-success fw-bold">
                    Correo del Instructor
                </label>

                <p class="fs-5 mb-0">
                    {{ $profesor->email }}
                </p>
            </div>


            <!-- ÁREA -->
            <div class="mb-3 border-bottom pb-2">
                <label class="form-label text-success fw-bold">
                    Área
                </label>

                <p class="fs-5 mb-0">
                    {{ $profesor->area_id }}
                </p>
            </div>


            <!-- CENTRO -->
            <div class="mb-3">
                <label class="form-label text-success fw-bold">
                    Centro de Formación
                </label>

                <p class="fs-5 mb-0">
                    {{ $profesor->training_center_id }}
                </p>
            </div>

        </div>


        <!-- PIE -->
        <div class="card-footer bg-light text-end">

            <a href="{{ route('teacher.list') }}"
               class="btn btn-success">
                Regresar a la lista
            </a>

        </div>

    </div>

</div>

@endsection