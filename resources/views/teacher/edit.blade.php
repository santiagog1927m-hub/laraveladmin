@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Editar Instructor</h1>

        <form action="{{ route('teacher.update', $teacher->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label for="name" class="form-label">
                    Nombre
                </label>

                <input type="text"
                       name="name"
                       id="name"
                       class="form-control"
                       value="{{ $teacher->name }}"
                       required>

            </div>

            <div class="mb-3">

                <label for="email" class="form-label">
                    Correo
                </label>

                <input type="email"
                       name="email"
                       id="email"
                       class="form-control"
                       value="{{ $teacher->email }}"
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
                            {{ $teacher->area_id == $area->id ? 'selected' : '' }}>

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
                            {{ $teacher->training_center_id == $training_center->id ? 'selected' : '' }}>

                            {{ $training_center->name }}

                        </option>

                    @endforeach

                </select>

            </div>

            <button type="submit" class="btn btn-success">
                Actualizar
            </button>

            <a href="{{ route('teacher.list') }}"
               class="btn btn-secondary">
                Cancelar
            </a>

        </form>

    </div>

@endsection