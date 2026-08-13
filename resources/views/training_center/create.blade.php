@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        <!-- ENCABEZADO -->
        <div class="card-header bg-success text-white">

            <h4 class="mb-0 fw-bold">
                Formulario Training Center
            </h4>

            <small>
                Complete la información del nuevo centro de formación
            </small>

        </div>


        <!-- FORMULARIO -->
        <div class="card-body p-4">

            <form action="{{route('training_center.store')}}"
                  method="POST"
                  enctype="multipart/form-data">

            @csrf

            <label>
                <label for="name" class="form-label fw-bold text-success">
                    Nombre
                </label>

                <br>

                <input type="text"
                       name="name"
                       id="name"
                       class="form-control"
                       placeholder="Ingrese el nombre del centro"
                       required>
            </label>

            <br>
            <br>


            <label>
                <label for="location" class="form-label fw-bold text-success">
                    Ubicación
                </label>

                <br>

                <input type="text"
                       name="location"
                       id="location"
                       class="form-control"
                       placeholder="Ingrese la ubicación del centro"
                       required>
            </label>

            <br>
            <br>


            <!-- BOTONES -->
            <div class="d-flex justify-content-end gap-2">

                <a href="{{ route('training_center.list') }}"
                   class="btn btn-secondary">
                    Cancelar
                </a>

                <button type="submit"
                        class="btn btn-success">
                    Guardar Centro
                </button>

            </div>

            </form>

        </div>

    </div>

</div>

@endsection