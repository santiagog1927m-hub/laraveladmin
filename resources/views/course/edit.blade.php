@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Editar Curso</h1>

        <form action="{{ route('course.update', $course->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label for="course_number" class="form-label">
                    Número de curso
                </label>

                <input type="text"
                       name="course_number"
                       id="course_number"
                       class="form-control"
                       value="{{ $course->course_number }}"
                       required>

            </div>

            <div class="mb-3">

                <label for="day" class="form-label">
                    Día
                </label>

                <input type="text"
                       name="day"
                       id="day"
                       class="form-control"
                       value="{{ $course->day }}"
                       required>

            </div>

            <div class="mb-3">

                <label for="area_id" class="form-label">
                    Área
                </label>

                <select name="area_id"
                        id="area_id"
                        class="form-control"
                        required>

                    @foreach ($areas as $area)

                        <option value="{{ $area->id }}"
                            {{ $course->area_id == $area->id ? 'selected' : '' }}>

                            {{ $area->name }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label for="training_center_id" class="form-label">
                    Centro de formación
                </label>

                <select name="training_center_id"
                        id="training_center_id"
                        class="form-control"
                        required>

                    @foreach ($training_centers as $training_center)

                        <option value="{{ $training_center->id }}"
                            {{ $course->training_center_id == $training_center->id ? 'selected' : '' }}>

                            {{ $training_center->name }}

                        </option>

                    @endforeach

                </select>

            </div>

            <button type="submit" class="btn btn-success">
                Actualizar
            </button>

            <a href="{{ route('course.list') }}"
               class="btn btn-secondary">
                Cancelar
            </a>

        </form>

    </div>

@endsection