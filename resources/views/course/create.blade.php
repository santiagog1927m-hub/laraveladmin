```php
@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        <!-- ENCABEZADO -->
        <div class="card-header bg-success text-white">

            <h4 class="mb-0 fw-bold">
                Registrar Curso
            </h4>

            <small>
                Complete la información del nuevo curso
            </small>

        </div>


        <!-- FORMULARIO -->
        <div class="card-body p-4">

            <form action="{{ route('course.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- NÚMERO DEL CURSO -->
                <div class="mb-3">

                    <label for="course_number"
                           class="form-label fw-bold text-success">
                        Número de curso
                    </label>

                    <input type="number"
                           name="course_number"
                           id="course_number"
                           class="form-control"
                           placeholder="Ingrese el número del curso"
                           required>

                </div>


                <!-- DÍA -->
                <div class="mb-3">

                    <label for="day"
                           class="form-label fw-bold text-success">
                        Día
                    </label>

                    <input type="text"
                           name="day"
                           id="day"
                           class="form-control"
                           placeholder="Ingrese el día del curso"
                           required>

                </div>


                <!-- ÁREA -->
                <div class="mb-3">

                    <label for="area_id"
                           class="form-label fw-bold text-success">
                        Área
                    </label>

                    <select name="area_id"
                            id="area_id"
                            class="form-select"
                            required>

                        <option value="">
                            Seleccione un área
                        </option>

                        @foreach($areas as $area)

                            <option value="{{ $area->id }}">
                                {{ $area->name }}
                            </option>

                        @endforeach

                    </select>

                </div>


                <!-- CENTRO DE FORMACIÓN -->
                <div class="mb-3">

                    <label for="training_center_id"
                           class="form-label fw-bold text-success">
                        Centro de Formación
                    </label>

                    <select name="training_center_id"
                            id="training_center_id"
                            class="form-select"
                            required>

                        <option value="">
                            Seleccione un centro de formación
                        </option>

                        @foreach($training_centers as $training_center)

                            <option value="{{ $training_center->id }}">
                                {{ $training_center->name }}
                            </option>

                        @endforeach

                    </select>

                </div>


                <!-- BOTONES -->
                <div class="d-flex justify-content-end gap-2">

                    <a href="{{ route('course.list') }}"
                       class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="submit"
                            class="btn btn-success">
                        Guardar Curso
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
```
