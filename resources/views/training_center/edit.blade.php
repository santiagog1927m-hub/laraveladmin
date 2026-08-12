@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Editar Centro de Formación</h1>

        <form action="{{ route('training_center.update', $training_center->id) }}"
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
                       value="{{ $training_center->name }}"
                       required>

            </div>

            <div class="mb-3">

                <label for="location" class="form-label">
                    Ubicación
                </label>

                <input type="text"
                       name="location"
                       id="location"
                       class="form-control"
                       value="{{ $training_center->location }}"
                       required>

            </div>

            <button type="submit" class="btn btn-success">
                Actualizar
            </button>

            <a href="{{ route('training_center.list') }}"
               class="btn btn-secondary">
                Cancelar
            </a>

        </form>

    </div>

@endsection