@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        <!-- ENCABEZADO -->
        <div class="card-header bg-success text-white">

            <h4 class="mb-0 fw-bold">
                Formulario Área
            </h4>

            <small>
                Complete la información de la nueva área de formación
            </small>

        </div>


        <!-- FORMULARIO -->
        <div class="card-body p-4">

            <form action="{{route('area.store')}}"
                  method="POST"
                  enctype="multipart/form-data">

            @csrf

            <label>
                <label for="name" class="form-label fw-bold text-success">
                    Nombre:
                </label>

                <br>

                <input type="text"
                       name="name"
                       id="name"
                       class="form-control"
                       placeholder="Ingrese el nombre del área"
                       required>
            </label>

            <br>
            <br>


            <!-- BOTONES -->
            <div class="d-flex justify-content-end gap-2">

                <a href="{{ route('area.list') }}"
                   class="btn btn-secondary">
                    Cancelar
                </a>

                <button type="submit"
                        class="btn btn-success">
                    Guardar Área
                </button>

            </div>

            </form>

        </div>

    </div>

</div>

@endsection