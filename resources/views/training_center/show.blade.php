@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">

            <div>
                <h5 class="mb-0 fw-bold">
                    Detalle del Centro de Formación
                </h5>

                <small>
                    Información del registro #{{ $centro->id }}
                </small>
            </div>

            <a href="{{ route('training_center.list') }}"
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
                    {{ $centro->id }}
                </p>
            </div>


           
            <div class="mb-3 border-bottom pb-2">
                <label class="form-label text-success fw-bold">
                    Nombre del Centro
                </label>

                <p class="fs-5 mb-0">
                    {{ $centro->name }}
                </p>
            </div>


         
            <div class="mb-3">
                <label class="form-label text-success fw-bold">
                    Ubicación
                </label>

                <p class="fs-5 mb-0">
                    {{ $centro->location }}
                </p>
            </div>

        </div>


        <div class="card-footer bg-light text-end">

            <a href="{{ route('training_center.list') }}"
               class="btn btn-success">
                Regresar a la lista
            </a>

        </div>

    </div>

</div>

@endsection