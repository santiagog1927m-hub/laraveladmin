@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">

            <div>
                <h5 class="mb-0 fw-bold">
                    Detalle del Curso
                </h5>

                <small>
                    Información del registro #{{ $curso->id }}
                </small>
            </div>

            <a href="{{ route('course.list') }}"
               class="btn btn-light btn-sm">
                Volver
            </a>

        </div>


        
        <div class="card-body p-4">

            
            <div class="mb-3 border-bottom pb-2">
                <label class="form-label text-success fw-bold">
                    ID
                </label>

                <p class="fs-5 mb-0">
                    {{ $curso->id }}
                </p>
            </div>


            
            <div class="mb-3 border-bottom pb-2">
                <label class="form-label text-success fw-bold">
                    Número de Curso
                </label>

                <p class="fs-5 mb-0">
                    {{ $curso->course_number }}
                </p>
            </div>


            
            <div class="mb-3 border-bottom pb-2">
                <label class="form-label text-success fw-bold">
                    Día
                </label>

                <p class="fs-5 mb-0">
                    {{ $curso->day }}
                </p>
            </div>


           
            <div class="mb-3 border-bottom pb-2">
                <label class="form-label text-success fw-bold">
                    Área del Curso
                </label>

                <p class="fs-5 mb-0">
                    {{ $curso->area_id }}
                </p>
            </div>


            
            <div class="mb-3">
                <label class="form-label text-success fw-bold">
                    Centro de Formación
                </label>

                <p class="fs-5 mb-0">
                    {{ $curso->training_center_id }}
                </p>
            </div>

        </div>


       
        <div class="card-footer bg-light text-end">

            <a href="{{ route('course.list') }}"
               class="btn btn-success">
                Regresar a la lista
            </a>

        </div>

    </div>

</div>

@endsection