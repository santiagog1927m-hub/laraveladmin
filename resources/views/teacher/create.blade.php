@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        <!-- ENCABEZADO -->
        <div class="card-header bg-success text-white">

            <h4 class="mb-0 fw-bold">
                Formulario Instructores
            </h4>

            <small>
                Complete la información del nuevo instructor
            </small>

        </div>

        <!-- FORMULARIO -->
        <div class="card-body p-4">

            <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">

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
                       placeholder="Ingrese el nombre del instructor"
                       required>
            </label>

            <br>
            <br>

            <label>
                <label for="email" class="form-label fw-bold text-success">
                    Email:
                </label>

                <br>

                <input type="text"
                       name="email"
                       id="email"
                       class="form-control"
                       placeholder="Ingrese el correo electrónico"
                       required>
            </label>

            <br>
            <br>

            {{-- {{$areas}} --}}

            <label for="area_id" class="form-label fw-bold text-success">
                Area
            </label>

            <select name="area_id"
                    id="area_id"
                    class="form-control"
                    required>

                <option value="">
                    Seleccione un area
                </option>

                @foreach($areas as $area)

                    <option value="{{ $area->id }}">
                        {{ $area->name }}
                    </option>

                @endforeach

            </select>

            <br>
            <br>

            {{-- {{$training_centers}} --}}

            <label for="training_center_id"
                   class="form-label fw-bold text-success">
                Training center
            </label>

            <select name="training_center_id"
                    id="training_center_id"
                    class="form-control"
                    required>

                <option value="">
                    Seleccione un centro de formacion
                </option>

                @foreach($training_centers as $training_center)

                    <option value="{{ $training_center->id }}">
                        {{ $training_center->name }}
                    </option>

                @endforeach

            </select>

            <br>
            <br>

            <!-- IMAGEN -->
            <label for="urlFoto" class="form-label fw-bold text-success">
                Imagen del instructor
            </label>

            <input type="file"
                   name="urlFoto"
                   id="urlFoto"
                   class="form-control"
                   accept="image/*">

            <br>
            <br>

            <!-- BOTONES -->
            <div class="d-flex justify-content-end gap-2">

                <a href="{{ route('teacher.list') }}"
                   class="btn btn-secondary">
                    Cancelar
                </a>

                <button type="submit"
                        class="btn btn-success">
                    Guardar Instructor
                </button>

            </div>

            </form>

        </div>

    </div>

</div>

@endsection